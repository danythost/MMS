<?php 
session_start();

if (session_destroy()) {

	header('location: login.php');
	die();
}else{
	session_unset();
}

mysqli_close($dbconn);

?>