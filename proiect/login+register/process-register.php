<?php

//FIELDS VALIDATION
//EMAIL
if ( ! filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)){
    die("Adresa de email este obligatorie");
}
//PHONE de schimbat
if (empty($_POST["phone"])){
    die("Numarul de telefon este obligatoriu");
}
//USERNAME
if (empty($_POST["username"])){
    die("Nume de ultizator este obligatoriu");
}
//PASSWORD
if (strlen($_POST["password"]) < 8) {
    die("Password must be at least 8 characters");
}

if ( ! preg_match("/[a-z]/i", $_POST["password"])) {
    die("Password must contain at least one letter");
}

if ( ! preg_match("/[0-9]/", $_POST["password"])) {
    die("Password must contain at least one number");
}
//CONFIRM PASSWORD
if ($_POST["password"] !== $_POST["password_repeat"]) {
    die("Passwords must match");
}
//CRIPTAM PAROLA
$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

//CONNECT TO DB.php
$mysqli = require __DIR__ . "/Connect.php";

//INSERT DATA
$sql = "INSERT INTO user (email,phone,username, password_hash)
        VALUES (?, ?, ?, ?)";

$stmt = $mysqli->stmt_init();

//CATCH DB ERROR
if ( ! $stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}

$stmt->bind_param("ssss",
    $_POST["email"],
    $_POST["phone"],
    $_POST["username"],
    $password_hash);

if ($stmt->execute()) {
    header("Location: login.php");
    exit;
} else {
    if ($mysqli->errno === 1062) {
        die("email already taken");
    } else {
        die($mysqli->error . " " . $mysqli->errno);
    }
}