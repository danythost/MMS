<?php 
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_USER', 'root');
DEFINE ('DB_PASSWORD', 'capaCino19');
DEFINE ('DB_NAME', 'e_shika');

//try catch
try{

	$dbcon = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) 
	or die(header('location: errors/dberror.html'));
	mysqli_set_charset($dbcon, 'utf8');
	//more code here later
}
catch(Exception $dbcon){

	print "The Server is Busy please try again Later";

}

catch(Error $dbcon){

	print "An Error occured please try again later";
}
?>
