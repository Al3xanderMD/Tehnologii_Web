<?php
class DatabaseConnection
{
    private $host;
    private $dbname;
    private $username;
    private $password;
    private $mysqli;

    public function __construct($host, $dbname, $username, $password)
    {
        $this->host = $host;
        $this->dbname = $dbname;
        $this->username = $username;
        $this->password = $password;

        $this->connect();
    }

    private function connect()
    {
        $this->mysqli = new mysqli($this->host, $this->username, $this->password, $this->dbname);

        if ($this->mysqli->connect_errno) {
            die("Connection error: " . $this->mysqli->connect_error);
        }
    }

    public function getConnection()
    {
        return $this->mysqli;
    }
}

$host = "161.35.71.86";
$dbname = "web";
$username = "hcode";
$password = "M976Yn^63Eu?pq27";

$database = new DatabaseConnection($host, $dbname, $username, $password);
$mysqli = $database->getConnection();
return $mysqli;