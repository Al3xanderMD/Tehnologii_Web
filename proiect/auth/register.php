<?php

function registerUser()
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

// Handle POST request for registration
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    registerUser();
}
?>
<!DOCTYPE html>
<html>
<form action="register.php" method="post">
    <link rel="stylesheet" href="LogIn_Reg.css">
    <div class="container">
        <h1 class="element">&#xCEnregistrare</h1>
        <p class="element">V&#259 rug&#259m s&#259 completa&#355i acest formular pentru a v&#259 crea un cont.</p>
        <hr>

        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Introduce&#355i adresa de email" name="email" id="email" required>

        <label for="phone"><b>Num&#x103r de telefon</b></label>
        <input type="text" placeholder="Introduce&#355i num&#x103rul de telefon" name="phone" id="phone" required>

        <label for="username"><b>Nume de utilizator</b></label>
        <input type="text" placeholder="Introduce&#355i numele de utilizator" name="username" id="username" required>

        <label for="password"><b>Parola</b></label>
        <input type="password" placeholder="Introduce&#355i parola" name="password" id="password" required>

        <label for="password_repeat"><b>Repeta&#355i parola</b></label>
        <input type="password" placeholder="Repeta&#355i parola" name="password_repeat" id="password_repeat" required>
        <hr>

        <button type="submit" class="register_log_btn">&#xCEnregistrare</button>
    </div>

    <div class="container">
        <p>Ai deja un cont? <a href="login.php">Sign in</a>.</p>
    </div>
</form>
</html>
