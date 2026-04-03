<!-- Update table -->

<?php

$HOSTNAME = 'localhost';
$USERNAME = 'root';
$PASSWORD = '';
$DATABASE = 'phpprojects';

$con = mysqli_connect($HOSTNAME, $USERNAME, $PASSWORD, $DATABASE);
if($con){
    // echo "Connection and Database Successful";

    $sql = "update `data` set `username`='Waswa' where `username`='Lailah'";
    $queryexecute = mysqli_query($con, $sql);

    if($queryexecute){
        echo "Data updated successfully";
    }
    else{
        die(mysqli_error($con));
    }

}else{
    die(mysqli_error($con));
}

?>



