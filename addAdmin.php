<?php 
	require_once 'Auth/connect.php';
	require_once 'Auth/session.php';
?>

<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	//initializing variables
	$username = stripslashes($_POST['username']);
	$username = trim($username);
	$username = mysqli_real_escape_string($dbcon, $username);

	$passwd = stripslashes($_POST['passwd']);
	$passwd = trim($passwd);
	$passwd = mysqli_real_escape_string($dbcon, $passwd);

	if (empty($username && $passwd)) {
		header('location: ../errors/addAdminError.html');
	}else{

		//sql_query
		$q="INSERT INTO `admin` (`username`,`passwd`) VALUES ('$username','$passwd')";
		$result=$dbcon->query($q);
		if (!$result) {
			header('location: errors/addAdminError.html');
		}else{
			header('location: adminrecord.php');
		}
	}
	
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add User</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/responsive.css">
	<link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="layout/styles/fontawesome-free/css/fontawesome-all.min.css">
</head>
<body style="background-image: url(images/LYAQpr.jpg);">
	<style>
		.form{
			background: #c0bfc7;
			width: 400px;
			height: 390px;
			margin-top: 3%;
			border-radius: 8px;
			color: whitesmoke;
		}
	</style>
<div class="container">
	<div class="row">
		<div class="col-md-12" align="center">
			<!--forminput-->
			<div class="form" id="form">
				<h3>Create Admin Record</h3>
				<form action="addAdmin.php" method="POST">
					<p>
						<label for="username"> User :</label>
						<input type="text" class="user" name="username" placeholder="🧓🏼" style="border-radius: 8px;">
					</p>


					<p>
						<label for="password"> Password :</label>
						<input type="password" class="pass" name="passwd" placeholder="🔐" style="border-radius: 8px">
					</p>

					<p>
					<button type="btn" class="btn btn-primary" name="addAdmin">Create</button>
					</p>

					<p>
						<a href="adminrecord.php" style="color: darkred;"><i class="fas fa">Cancel</i></a>
					</p>
				</form>
			</div>
		</div>
	</div>
</div>

<!--jscript-->
 <script src="js/jquery.min.js"></script>
 <script src="js/popper.min.js"></script>
 <script src="js/bootstrap.bundle.min.js"></script>
 <script src="js/jquery-3.0.0.min.js"></script>
 <script src="js/modal.js"></script>
</body>
</html>

<?php 
$dbcon->close();
exit();
?>