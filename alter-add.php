<?php

$HOSTNAME = 'localhost';
$USERNAME = 'root';
$PASSWORD = '';
$DATABASE = 'phpprojects';

$con = mysqli_connect($HOSTNAME, $USERNAME, $PASSWORD, $DATABASE);
if($con){
	$sql = "alter table `data` add email VARCHAR(100) NOT NULL";
	$queryexecute = mysqli_query($con, $sql);
	if($queryexecute){
		echo "Table column added successfully";
	}else{
		die(mysqli_error($con));
	}
}else{
	die(mysqli_error($con));
}


?>