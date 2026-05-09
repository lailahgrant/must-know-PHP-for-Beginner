<?php
// inserting data

$HOSTNAME = 'localhost';
$USERNAME = 'root';
$PASSWORD = '';
$DATABASE = 'phpprojects';

$con = mysqli_connect($HOSTNAME, $USERNAME, $PASSWORD, $DATABASE);

if($con){
    
    //echo "Connection and Database Successful";

    // $sql = "insert into `data`(username, email) values ('Grant', 'grant@gmail.com')";
    $sql = "insert into `data`(username, email) values ('Lailah', 'lailah@gmail.com')";
    // $sql = "insert into `data`(username, email) values ('Bushra', 'bushra@gmail.com')";
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