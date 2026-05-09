<?php

$HOSTNAME = 'localhost';
$USERNAME = 'root';
$PASSWORD = '';
$DATABASE = 'phpprojects';

$con = mysqli_connect($HOSTNAME, $USERNAME, $PASSWORD, $DATABASE);
if($con){
	echo "Database connected successfully </br>";

	$sql = "alter table `data` drop column `email`";
	$queryexecute = mysqli_query($con, $sql);
	if($queryexecute){
		echo "Table altered successfully";
	}else{
		die(mysqli_error($con));
	}

}else{
	die(mysqli_error($con));
}

?>