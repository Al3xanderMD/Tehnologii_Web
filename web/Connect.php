<?php
$CONFIG=[
    'servername' => "localhost",
    'username' => "root",
    'password' => '',
    'db' => 'web'
];
$conn=new mysqli($CONFIG["servername"],$CONFIG["username"],$CONFIG["password"],$CONFIG["db"]);
if($conn->connect_error)
{
    echo "Connection failed" .$conn->connect_error;
}
else
{
    echo "Successfully connected to DB";
}
$sql = "SELECT id, nume FROM test";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["nume"].  "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>