<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/responsive.css">
	<link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="layout/styles/fontawesome-free/css/fontawesome-all.min.css">
</head>
<body style="background-image: url(images/GBOels.webp);">
<div class="container-fluid">
	<div class="row">
    <div class="info" align="center" style="margin-top: 1.3%;">
     <i class="fas fa" style="font-size: 26px; float: left;" title="Enlarge_ScreenSize"><button style="border-radius: 10px;">press F11</button></i>
     <a href="help.php" style="float: right;" title="How_To_Use"><button type="btn" class="btn btn-standard" ><i class="fas fa-info-circle" style="color: yellow; font-size: 30px;"></i></button></a>
   </div>
		<div class="col-md-12" align="center">
      <div class="logo" id="Logo">
        <img src="images/ECWA_LOGO2.jpg" width="150" height="150" style="margin-top: 1%; border-radius: 50%;">
      </div>
  			<div class="main_body" id="main_body">
  				<h3 style="color: whitesmoke; margin-top: 1%;"><i class="fas fa">ECWA CHURCH SHIKA-LOCAL DATABASE</i></h3>
  			</div>
		</div>
	</div>
</div>

<div class="container">
  <div class="row">
    <!--carousel section-->
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-12" align="center">
<?php
session_start();
  require_once 'Auth/connect.php';

?>
  <!--login validation in SELF file-->
<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  //initialization
  $username = stripslashes($_POST['username']);
  $username = mysqli_real_escape_string($dbcon, $username);
  //password validation
  $passwd = stripslashes($_POST['passwd']);
  $passwd = mysqli_real_escape_string($dbcon, $passwd);

  //sql_query
  $Q = "SELECT * FROM `admin` WHERE username = '$username' AND passwd = '$passwd'";
    $result = $dbcon->query($Q);
     $rows = mysqli_num_rows($result);
    if ($rows == 1) {
         $_SESSION['username'] = $username;
         //redirect to user Dashboard
      header('location: Home.php');
    }else{ ?>
<h2 style="color: yellow;">
    <?php echo "Invalid Credentials !!"; ?>
</h2>
    <?php
      }

    }
?>

<!--mod login-->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#login" style="margin-left: 2%; margin-bottom: 3%; color: whitesmoke; border-radius: 19px;">Admin Login</button>
<!-- Modal -->
<div id="login" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content" style="background: linear-gradient(to top, darkblue 30%, whitesmoke 98%); margin: auto; margin-top: 10%; color: whitesmoke; border-radius: 5px; box-shadow: 3px 3px 3px 3px cornflowerblue;">
      <div class="modal-header">
         <!--some kinda stuff here-->
        <h4 class="modal-title" style="color: black;">Admin Login</h4>
      </div>
      <div class="modal-body" align="center">
       
        <form action="index.php" method="POST">
          <p>
            <label for="User">User : </label>
            <input type="text" class="username" name="username" placeholder="🧓🏼" style="border-radius: 8px;">
          </p>

          <p>
            <label for="password"> Password : </label>
            <input type="password" class="password" name="passwd" placeholder="🔐" style="border-radius: 8px;">
          </p>

          <button type="btn" class="btn btn-standard" name="login" style="background-color: whitesmoke;">Login</button>
        </form>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">❌</button>
      </div>
    </div>

  </div>
</div>

        <div id="demo" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <p>
                    <img src="images/blended/mac.png" width="710" height="210" style="border-radius: 12px; box-shadow: 0 4px 8px 0 #ffffff, 0 6px 20px 0 #ffffff">
                  </p>
               </div>
               <div class="carousel-item">
                  <p>
                    <img src="images/blended/chicago.png" width="710" height="210" style="border-radius: 12px; box-shadow: 0 4px 8px 0 #ffffff, 0 6px 20px 0 #ffffff;">
                    </p>
               </div>
               <div class="carousel-item">
                  <p>
                    <img src="images/blended/house3.png" width="710" height="210" style="border-radius: 12px; box-shadow: 0 4px 8px 0 #ffffff, 0 6px 20px 0 #ffffff;">
                  </p>
               </div>
               <div class="carousel-item">
                  <p>
                    <img src="images/blended/team2.png" width="710" height="210" style="border-radius: 12px; box-shadow: 0 4px 8px 0 rgba(255, 255, 255, 255), 0 6px 20px 0 rgba(255, 255, 255, 255);">
                  </p>
               </div>
            </div>
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