<?php 

session_start();

if (!isset($_SESSION['fullname'])) {
	 header('location: login.php');
	 exit();
}

?>