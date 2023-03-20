<?php 
	require_once 'Auth/connect.php';
	require_once 'Auth/session.php';
?>

<?php 
	
	$id = $_GET['id'];

	$sql = "SELECT * FROM admin WHERE id = '$id'";
	$result = $dbcon->query($sql);

	if ($result-> num_rows > 0 ) {
		// output data of each row
		while ($row = $result->fetch_assoc()) {
			$username = $row['username'];
			$passwd = $row['passwd'];
		}
	}else{
		echo "No or bad results found";
		header('location:editadmin.php');
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
		<form action="updateadmin.php" method="POST">
			<div class="form-group row">
				<label for="username" class="col-sm-4 col-form-label">Username :</label>
				</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" name="username" maxlength="30" value="<?php echo $username; ?>" required>
				</div>
			</div>

			<div class="form-group row">
				<label for="password" class="col-sm-4 col-form-label">Password :</label>
				<div class="col-sm-6">
					<input type="password" class="form-control" name="passwd" maxlength="30" value="<?php echo $passwd; ?>" required>
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
