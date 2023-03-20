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
<body style=" ">
	<style>
		#form {
			color: yellowgreen;
		}
	</style>
<div class="container">
	<div class="row">
		<div class="col-md-12" align="center">
			<!--forminput-->
			<div class="form" id="form">
				<h3>Add Member Record</h3>
<?php 
include 'Auth/connect.php';
include 'Auth/session.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	// initializing variables...
	$image = $_FILES['image']['name'];
	$target = "profileImage/".basename($image);

	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
		$msg = "Image uploaded successfully";
		}else{
		$msg = "Failed to upload image";
		}
		extract($_POST);
		$Qry = "INSERT INTO `member` (`fname`, `image`, `email`, `occupation`, `address`) VALUES ('$fname', '$image', '$email', '$occupation', '$address')";
		$res = mysqli_query($dbcon, $Qry);
		if($res){
			$_SESSION['success'] = 'Record uploaded successfully';
		?>
			<script>
				window.location = "Home.php";
			</script>
		<?php
		}else{
			?>
			<script>
				window.location = "errors/addmemError.html";
			</script>
		<?php
		}
}

?>
				<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" enctype="multipart/form-data">
					Name : <input type="text" name="fname" id=""><br /><br />
					email : <input type="email" name="email" id=""><br /><br />
					Occupation : <input type="text" name="occupation" id=""><br /><br />
					Address : <input type="text" name="address" id=""><br /><br />
					Date : <input type="date" name="date" id=""><br /><br />

					<image class="profile-img" src="profileImage/<? $image; ?>" style="height:100px;width:90px; border-radius: 50px;">
                    	<input type="hidden" value="<? $image; ?>" name="old_image">
					Image :<input type="file" class="form-group" name="image" id="imageUpld">
					<input type="submit" name="submit">
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
