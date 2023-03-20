<?php 
	require_once 'Auth/connect.php';
	require_once 'Auth/session.php';
?>

<?php 
	
	$id = $_GET['id'];
	if(isset($_REQUEST['submit'])){
	extract($_POST);
	$target_dir = "profileImage/";
	$image1 = basename($_FILES["image"]["name"]);
	if($_FILES["image"]["tmp_name"]!=''){
	  $image = $target_dir . basename($_FILES["image"]["name"]);
	 if (move_uploaded_file($_FILES["image"]["tmp_name"], $image)) {
	  
		 @unlink("profileImage/".$_POST['old_image']);
	  
	  } else {
		  echo "Sorry, there was an error uploading your file.";
	  }
	
	}
	else {
	   $image1 =$_POST['old_image'];
	}
}
	$sql = "SELECT * FROM member WHERE id = '$id'";
	$result = $dbcon->query($sql);

	if ($result-> num_rows > 0 ) {
		// output data of each row
		while ($row = $result->fetch_assoc()) {
			$fname = $row['fname'];
			$image = $row['image'];
			$email = $row['email'];
			$occupation = $row['occupation'];
			$address = $row['address'];
		}
	}else{
		echo "No or bad results found";
		header('location:editmem.php');
	}
?> 


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit-Records</title>
	<!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
       <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
       <!-- main css -->
      <link rel="stylesheet" href="css/main.css">
      <!--fontawesome-->
      <link rel="stylesheet" href="layout/styles/fontawesome-free/css/fontawesome-all.min.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--fontawesome-->
      <link rel="stylesheet" href="layout/styles/fontawesome-free/css/fontawesome-all.min.css">
</head>
<body>
<div class="container">
	<h2 class="h2 text-center">Edit Records</h2>
		<form action="update.php" method="POST">
			<div class="form-group row">
				<label for="fname" class="col-sm-4 col-form-label">Full Name :</label>
				</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" name="fname" placeholder="Full Name" maxlength="30" value="<?php echo $fname; ?>" required>
				</div>
			</div>

			<div class="form-group row">
				<label for="image" class="col-sm-4 col-form-label">Image :</label>
				<div class="col-sm-6">
					<image class="profile-img" src="profileImage/<?=$image;?>" style="height:30%; width:50%;">
					<input type="hidden" value="<?php $image;?>" name="old_image">
					<input type="file" class="form-group" name="image">			
				</div>
			</div>

			<div class="form-group row">
				<label for="email" class="col-sm-4 col-form-label">Email :</label>
				<div class="col-sm-6">
					<input type="email" class="form-control" name="email" placeholder="email" maxlength="30" value="<?php echo $email; ?>" required>
				</div>
			</div>

			<div class="form-group row">
				<label for="occupation" class="col-sm-4 col-form-label"> Occupation :</label>
				<div class="col-sm-6">
					<input type="occupation" class="form-control" name="occupation" placeholder="occupation" maxlength="30" value="<?php echo $occupation; ?>" required>
				</div>
			</div>

			<div class="form-group row">
				<label for="address" class="col-sm-4 col-form-label"> Address :</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" name="address" placeholder="Address" maxlength="30" value="<?php echo $address; ?>">
				</div>
			</div>
			<div class="submit">
				<input type="submit" value="upadte">
			</div>

				<input type="hidden" name="id" value="<?php echo $id ?>">
		</form>
</div>
</body>
</html>
<?php 
$dbcon-> close();
exit();
 ?>

