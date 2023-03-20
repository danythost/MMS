<?php 
	require_once 'Auth/connect.php';
	require_once 'Auth/session.php';
?>
<?php 

	$id = $_GET['id'];

	//delete from_DB;

	$sql = "DELETE FROM member WHERE id = '$id'";

	if ($dbcon->query($sql) === TRUE) {
		header('location:Home.php');
	}else{
		echo "We have encountered a Problem" . $dbcon->error();
	}

	//close connection
$dbcon->close();
exit();
