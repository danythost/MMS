<?php 
	require_once 'Auth/connect.php';
	require_once 'Auth/session.php';
?>
<?php 
	
	$id = $_GET['id'];

	$sql = "SELECT * FROM member WHERE id = '$id'";
	$result = $dbcon->query($sql);

	if ($result-> num_rows > 0) {
		//output data
		while ($row = $result->fetch_assoc()) {
			$fname = $row['fname'];
			$image = $row['image'];
			$email = $row['email'];
			$occupation = $row['occupation'];
			$address = $row['address'];
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
<body style="background-image: url(images/worshippraise.webp); background-size: cover; background-repeat: no-repeat;">
<p style="text-align: right; margin-right: 14px; margin-top: 14px;"><a href="Home.php">❎</a></p>
<div class="container">
	<div class="row">
		<!--styling-->
		<div class="col-md-7" align="center">
			<div class="mem_det" style="margin-top: 3%; margin-bottom: 3%;">
				<img src="profileImage/<?=$image; ?>" style="height: 430px; width: 70%; margin-top: 3%; border-radius: 50%;">
			</div>
		</div>
		<div class="col-md-3" id="member_details">
			<div class="mem_det" id="mem_det" style="margin-top: 22%; margin-bottom: 3%; border-radius: 10px;">
			<div class="form-group">
				<label for="fname" style="color: black;" class="fas fa">Name:</label> <?php echo $fname; ?> 
			</div><br>
			<div class="form-group">
				<label for="email" style="color: black;" class="fas fa">Email:</label> <?php echo $email; ?> 
			</div><br>

			<div class="form-group">
				<label for="occupation" style="color: black;" class="fas fa">Occupation:</label> <?php echo $occupation; ?>
			</div><br />
			<div class="form-group">
				<label for="address" style="color: black;" class="fas fa">Address</label><?php echo $address; ?>
			</div>
			<br>
			</div>
		</div>
	</div>
</div>
</body>
</html>