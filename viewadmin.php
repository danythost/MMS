<?php 
	require_once 'Auth/connect.php';
	require_once 'Auth/session.php';
?>
<?php 
	
	$id = $_GET['id'];

	$sql = "SELECT * FROM admin WHERE id = '$id'";
	$result = $dbcon->query($sql);

	if ($result-> num_rows > 0) {
		//output data
		while ($row = $result->fetch_assoc()) {
			$username = $row['username'];
			$passwd = $row['passwd'];
			$created = $row['created'];
		}
	}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ViewMembers</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/responsive.css">
	<link rel="stylesheet" href="css/jquery-ui.css">
  	<link rel="stylesheet" href="layout/styles/fontawesome-free/css/fontawesome-all.min.css">
</head>
<body style="background-image: url(images/forestbridge.jpg); background-size: cover; background-repeat: no-repeat;">
<p style="text-align: right;"><a href="adminrecord.php">❎</a></p>
<div class="container">
	<div class="row">
		<!--styling-->
		<div class="col-md-3" id="member_details" style="width: 50%;"><h3 style="color: whitesmoke;"><strong>Admin Record<strong></h3>
			<div class="mem_det" id="mem_det" style="margin-top: 8%; padding: 3% 0% 0% 3%; margin-bottom: 3%; border-radius: 10px; background: linear-gradient(to top right, #0033cc 27%, #66ff66 81%); color: whitesmoke; border-radius: 10px;">
				<div class="form-group">
					<label for="fullname" style="color: black;" class="fas fa">Username:</label> <?php echo $username; ?> 
				</div><br>
				<div class="form-group">
					<label for="email" style="color: black;" class="fas fa">Password:</label> <?php echo $passwd; ?> 
				</div><br>
				<div class="form-group">
					<label for="created" style="color: black;" class="fas fa">Date/Time Created:</label> <?php echo $created;?>
				</div> <br>
			</div>
		</div>
	</div>
</div>
</body>
</html>