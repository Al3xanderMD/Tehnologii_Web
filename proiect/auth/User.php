<?php

class User
{
    private $username;
    private $email;
    private $password;
    private $phone;

    /**
     * @param $username
     * @param $email
     * @param $password
     * @param $phone
     */
    public function __construct($username, $email, $password, $phone)
    {
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->phone = $phone;
    }
    static function registerUser(): void
    {
        $errors = [];

        $mysqli = require __DIR__ . "/Connect.php";
        $stmt = $mysqli->stmt_init();

        // Check if email already exists
        $checkEmailSql = "SELECT COUNT(*) FROM user WHERE email = ?";
        $checkEmailStmt = $mysqli->prepare($checkEmailSql);
        $checkEmailStmt->bind_param("s", $_POST["email"]);
        $checkEmailStmt->execute();
        $checkEmailStmt->bind_result($emailCount);
        $checkEmailStmt->fetch();
        $checkEmailStmt->close();

        if ($emailCount > 0) {
            http_response_code(400);
            $errors[] = "Email already taken";
        }

        // Continue with the insert statement
        $stmt = $mysqli->stmt_init();

        //FIELDS VALIDATION
        //EMAIL
        if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            http_response_code(400);
            $errors[] = "Adresa de email este obligatorie";
        }
        //PHONE de schimbat
        if (empty($_POST["phone"])) {
            http_response_code(400);
            $errors[] = "Numarul de telefon este obligatoriu";
        }
        //USERNAME
        if (empty($_POST["username"])) {
            http_response_code(400);
            $errors[] = "Nume de utilizator este obligatoriu";
        }
        //PASSWORD
        if (strlen($_POST["password"]) < 8) {
            http_response_code(400);
            $errors[] = "Password must be at least 8 characters";
        }

        if (!preg_match("/[a-z]/i", $_POST["password"])) {
            http_response_code(400);
            $errors[] = "Password must contain at least one letter";
        }

        if (!preg_match("/[0-9]/", $_POST["password"])) {
            http_response_code(400);
            $errors[] = "Password must contain at least one number";
        }
        //CONFIRM PASSWORD
        if ($_POST["password"] !== $_POST["password_repeat"]) {
            http_response_code(400);
            $errors[] = "Passwords do not match";
        }
        //CRIPTAM PAROLA
        $password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

        //INSERT DATA
        $sql = "INSERT INTO user (email,phone,username, password_hash)
            VALUES (?, ?, ?, ?)";

        //CATCH DB ERROR
        if (!$stmt->prepare($sql)) {
            die("SQL error: " . $mysqli->error);
        }

        $stmt->bind_param(
            "ssss",
            $_POST["email"],
            $_POST["phone"],
            $_POST["username"],
            $password_hash
        );

        if (count($errors) > 0) {
            // Generate JavaScript alerts for each error
            echo '<script>';
            foreach ($errors as $error) {
                echo 'alert("' . $error . '");';
            }
            echo '</script>';
        } else {
            if ($stmt->execute()) {
                http_response_code(200);
                header("Location: login.php");
                exit;
            }
        }
    }
}