<?php
$db_host = '161.35.71.86';
$db_name = 'web';
$db_user = 'hcode';
$db_pass = 'M976Yn^63Eu?pq27';

$mysqli = new mysqli($db_host,$db_user,$db_pass,$db_name);

if($mysqli->connect_error){
    printf("Connect failed: %s\n",$mysqli->connect_error);
    exit();
}


