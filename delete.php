<?php 

$HOSTNAME = "localhost";
$USERNAME = "root";
$PASSWORD = "";     
$DATABASE = "phpprojects";

$con = mysqli_connect($HOSTNAME, $USERNAME, $PASSWORD, $DATABASE);  
if ($con) {
    echo "Connection successful <br>";

    // DELETE DATA
    $sql = "delete from `data` where `id` = '1'";
    $queryexecute = mysqli_query($con, $sql);
    if($queryexecute){
        echo "Data deleted successfully";       
    }else{
        die(mysqli_error($con));
    }

}else{
    die(mysqli_error($con));
}

?>