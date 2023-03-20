<?php 
session_start();

if (session_destroy()) {

	header('location: index.php');
	die();
}else{
	session_unset();
}

mysqli_close($dbconn);

?>