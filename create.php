<?php

$HOSTNAME = 'localhost';
$USERNAME = 'root';
$PASSWORD = '';

$con = mysqli_connect($HOSTNAME, $USERNAME, $PASSWORD);
if($con){
    
    //echo "Connection successful";

    //query to create database
    $sql = "create database `phpprojects`";
    //execute query
    $queryexecute = mysqli_query($con, $sql);
    if($queryexecute){
        echo "Successfully created database";
    }
    else{
        die(mysqli_error($con));
    }
}
else{
    die(mysqli_error($con));
} 

?>