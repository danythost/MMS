<?php 
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_USER', 'root');
DEFINE ('DB_PASSWORD', 'capaCino19');
DEFINE ('DB_NAME', 'e_shika');

$dbcon = @mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(header('location: errors/dberror.html'));
	
?>