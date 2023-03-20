<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/responsive.css">
	<link rel="stylesheet" href="css/jquery-ui.css">
  	<link rel="stylesheet" href="layout/styles/fontawesome-free/css/fontawesome-all.min.css">
</head>
<body>
<p style="border-bottom-color: yellow; margin-left: 3%;"><!--modal here-->
	SuperAdmin : Mr Kaka Paul Ebamosi <button type="button" data-toggle="modal" data-target="#login" style="border-radius: 50%;" title="Super Admin
making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quissed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus facilisis odio sed mi. 
Curabitur suscipit. Nullam vel nisi. Etiam semper ipsum ut lectus. Proin aliquam, erat eget 
pharetra commodo, eros mi condimentum quam, sed commodo justo quam ut velit. "><i class="fas fa-info-circle"></i></button>
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
            <input type="text" class="username" name="username" style="border-radius: 8px;">
          </p>

          <p>
            <label for="password"> Password : </label>
            <input type="password" class="password" name="password" style="border-radius: 8px;">
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
</p>
<p style="border-bottom-color: yellow; margin-left: 3%;">
	Developers : Henrypenstuff@gmail.com / 08086008471 <br >
	<span class="social_icons"></span>
</p>
<!---modal--->


<!---js files--->
      <script src="js/jquery-3.0.0.min.js"></script>
 	<script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/modal.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>