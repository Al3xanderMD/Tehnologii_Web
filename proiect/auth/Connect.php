<?php

$host = "161.35.71.86";
$dbname = "web";
$username = "hcode";
$password = "M976Yn^63Eu?pq27";

$mysqli = new mysqli(hostname: $host,
    username: $username,
    password: $password,
    database: $dbname);

if ($mysqli->connect_errno) {
    die("Connection error: " . $mysqli->connect_error);
}

return $mysqli;