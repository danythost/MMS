<?php 
	require_once 'Auth/connect.php';
	require_once 'Auth/session.php';
?>

<?php 
//initialize variables
$fname = $_POST['fname'];
$image = $_POST['image'];
$email = $_POST['email'];
$occupation = $_POST['occupation'];
$address = $_POST['address'];
$id = $_POST['id'];

$sql = "UPDATE member set fname='$fname', image='$image', email='$email', occupation='$occupation', address='$address' WHERE id='$id' ";
//redirect user back to main page
if ($dbcon->query($sql) === TRUE) {
	header('location:Home.php');
}else{
	echo "We encountered an error updating this record";
	header('location:editmem.php');
}

//close sql connection
$dbcon->close();