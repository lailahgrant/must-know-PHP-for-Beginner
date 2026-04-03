<?php
// inserting data

$HOSTNAME = 'localhost';
$USERNAME = 'root';
$PASSWORD = '';
$DATABASE = 'phpprojects';

$con = mysqli_connect($HOSTNAME, $USERNAME, $PASSWORD, $DATABASE);

if($con){
    
    //echo "Connection and Database Successful";

    $sql = "insert into `data`(username, email) values ('Grant', 'grant@gmail.com')";
    $queryexecute = mysqli_query($con, $sql);

    if($queryexecute){
        echo "Data inserted successfully";
    }else{
    die(mysqli_error($con));
    }

}else{
    die(mysqli_error($con));
}

?>