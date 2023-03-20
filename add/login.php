<?php 
session_start();
require_once 'connect.php';

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<!--styles-->
	<link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/responsive.css">
  <link rel="stylesheet" href="../css/jquery-ui.css">
  <link rel="stylesheet" href="../layout/styles/fontawesome-free/css/fontawesome-all.min.css">
</head>
<body style="background-image: url(../images/GBOels.webp);">
<div class="container">
	<div class="row">
		<div class="col-md-12" align="center">
			<div class="member" id="mem_acct">
				<h2 style="margin-top: 3%;"><i class="fas fa">Login to Upload Member(Family) Image</i></h2>
			</div>
			<style>
				#login{
					margin-top: 3%;
					width: 30%;
					height: 10%;
					color: whitesmoke;
				}

				#mem_acct{
					color: whitesmoke;
				}
			</style>
			<?php 
				//login evaluation
				if ($_SERVER['REQUEST_METHOD'] == 'POST') {
					// initializing variables
					$fllname = stripslashes($_POST['fllname']);
					$fllname = mysqli_real_escape_string($dbcon, $fllname);

					 //sql_query
					  $Q = "SELECT * FROM `member` WHERE fllname = '$fllname'";
					    $result = $dbcon->query($Q);
					     $rows = mysqli_num_rows($result);
					    if ($rows == 1) {
					         $_SESSION['fllname'] = $fllname;
					         //redirect to user Dashboard
					      header('location: addimage.php');
					    }else{ ?>
					<h2 style="color: yellow;">
					    <?php echo "Invalid Credentials !!"; ?>
					</h2>
					    <?php
					      }
    				}
			?>
			<div class="lgin" id="login">
				<form action="login.php" method="POST">
					<p>
					<label for="fullname">Enter Father's name to Login: </label>
					<input type="text" class="user" name="fllname" placeholder="  e.g Gandu ..." style="border-radius: 8px;">
				</p>

					<p>
					<button type="btn" class="btn btn-default" name="login" style="background-color: whitesmoke;">Login</button>
					</p>

					<p>
						<a href="../Home.php"><u><i class="fas fa" style="color: whitesmoke;">Cancel</i></u></a> ||
						<a href="../adminrecord.php"><u><i class="fas fa" style="color: whitesmoke;">Admin</i></u></a>
					</p>
				</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>