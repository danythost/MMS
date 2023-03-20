<?php 
	require_once 'Auth/connect.php';
	require_once 'Auth/session.php';
?>

<?php 
//initialize variables
$username = $_POST['username'];
$passwd = $_POST['passwd'];
$id = $_POST['id'];

$sql = "UPDATE admin set username='$username', passwd='$passwd' WHERE id='$id' ";
//redirect user back to main page
if ($dbcon->query($sql) === TRUE) {
	header('location:adminrecord.php');
}else{
	header('location:editadmin.php');
}

//close sql connection
$dbcon->close();