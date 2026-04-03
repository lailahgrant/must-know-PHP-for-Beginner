<?php

/*
//1st method

$HOSTNAME = 'localhost';
$USERNAME = 'root';
$PASSWORD = '';

$con = mysqli_connect($HOSTNAME, $USERNAME, $PASSWORD);
if($con){
    echo "Connection successful";
}
else{
    die(mysqli_error($con));
}
*/


/*
// 2nd method
$mysqli = new mysqli('localhost', 'root', '');
if($mysqli){
    echo "Connection successful";
}
else{
    die(mysqli_error($mysqli));
}
*/

//3rd method
define('DB_HOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD','');
$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD);
if($mysqli){
    echo "Connection successful";
}
else{
    die(mysqli_error($mysqli));
}
?>