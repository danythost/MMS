<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>info</title>
	<!-- css files-->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/responsive.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="layout/styles/fontawesome-free/css/fontawesome-all.min.css">
</head>
<body>
<div class="container-fluid">
    <div class="row" style="background-color: #006699;">
        <div class="header" style="margin-top: 0.7%; margin-bottom: 1.3%; padding: 3px 3px 3px 3px !important;">
            <span style="float: left; padding-left: 3%;"><h3><i class="fas fa" style="color: #ffffff;">User Guide</i></h3></span>
            <span></span>
            <span style="float: right; padding-right: 5%;"><h6><i class="fas fa" style="color: #ffffff;">Developers</i></h6></span>        
    </div>
</div>
        <a href="adminrecord.php"><button type="btn" class="btn btn-standard"><i class="fas fa-chevron-circle-left"></i></button> Login</a>

<div class="container">
	<div class="row">
		<div class="col-md-2" align="center" style="background-color: #006699; color: whitesmoke; border-radius: 10px; border: yellow;">
			<span><i class="fas fa">Quick Menu</i></span>
            <style>
                .tab_list button {
                    color: yellowgreen;
                    padding: 4px 4px 4px 4px;
                }
                .tab_list:hover{
                    background-color: #ffffff;
                }

                .tab_list button:hover{
                    background-color: #e6e600;
                }
                .head_content{
                    background-color: #006699;
                    color: whitesmoke;
                    border-radius: 6px;
                }
            </style>
			<div class="tab_list" id="tab_button" style="border-radius: 6px;">
				<button class="btn" onclick="loadDoc()">Overview</button><br>
				<button class="btn" onclick="loaddbusers()">DB_ Users</button><br />
				<button class="btn" onclick="loaddbsystem()">DB_system</button><br />
				<button class="btn" onclick="loadservers()">Servers</button><br />
				<button class="btn" onclick="loadmemrec()">Member Record</button><br />
				<button class="btn" onclick="loadaddmem()">Add Member</button><br />
				<button class="btn" onclick="loadadmin_rec()">Admin Recod</button><br />
				<button class="btn" onclick="loadadd_admin()">Add Admin</button><br />
				<button class="btn" onclick="loadmodifycode()">Modify Code</button><br />
				<button class="btn" onclick="loadhowto()">How-To(s)</button><br />
				<button class="btn" onclick="loadupgrade()">Upgrade system</button><br />
			</div>
		</div>
		<div class="col-md-8" align="center">
			<div class="head_content" id="main_info">
                    <h3 style="padding: 5px 5px 5px 5px !important;">Content header</h3>
                <p>
                    The Overview Must be as brief as possible
                </p>
            </div>
		</div>
		<div class="col-md-2" align="center">
			<div id="demo" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <p>
                    <img src="images/hps.jpg" width="165" height="380" style="border-radius: 10px;">
                  </p>
               </div>
               <div class="carousel-item">
                  <p>
                    <img src="images/crop1.jpg" width="165" height="380" style="border-radius: 10px;">
                    </p>
               </div>
               <div class="carousel-item">
                  <p>
                    <img src="images/crop2.jpg" width="165" height="380" style="border-radius: 10px;">
                  </p>
               </div>
               <div class="carousel-item">
                  <p>
                    <img src="images/hps.jpg" width="165" height="380" style="border-radius: 10px;">
                  </p>
               </div>
            </div>
         </div>
		</div>
	</div>
</div>


<!---overviewtab_js--->
<script>
    function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("main_info").innerHTML = this.responseText;
    }
  };
  xhttp.open("POST", "info/overview.html", true);
  xhttp.send();
}
</script>

<!---db_userstab_js--->
<script>
    function loaddbusers() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("main_info").innerHTML = this.responseText;
    }
  };
  xhttp.open("POST", "info/db_users.html", true);
  xhttp.send();
}
</script>

<!---db_system_js--->
<script>
    function loaddbsystem() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("main_info").innerHTML = this.responseText;
    }
  };
  xhttp.open("POST", "info/db_system.html", true);
  xhttp.send();
}
</script>

<!---servers_js--->
<script>
    function loadservers() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("main_info").innerHTML = this.responseText;
    }
  };
  xhttp.open("POST", "info/servers.html", true);
  xhttp.send();
}
</script>

<!---memberrecord_js--->
<script>
    function loadmemrec() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("main_info").innerHTML = this.responseText;
    }
  };
  xhttp.open("POST", "info/memrec.html", true);
  xhttp.send();
}
</script>

<!---addmember_js--->
<script>
    function loadaddmem() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("main_info").innerHTML = this.responseText;
    }
  };
  xhttp.open("POST", "info/add_mem.html", true);
  xhttp.send();
}
</script>

<!---adminRec_js--->
<script>
    function loadadmin_rec() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("main_info").innerHTML = this.responseText;
    }
  };
  xhttp.open("POST", "info/admin_rec.html", true);
  xhttp.send();
}
</script>

<!---add-Admin_js--->
<script>
    function loadadd_admin() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("main_info").innerHTML = this.responseText;
    }
  };
  xhttp.open("POST", "info/add_admin.html", true);
  xhttp.send();
}
</script>

<!---modify_code_js--->
<script>
    function loadmodifycode() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("main_info").innerHTML = this.responseText;
    }
  };
  xhttp.open("POST", "info/modifycode.html", true);
  xhttp.send();
}
</script>

<!---how_to_js--->
<script>
    function loadhowto() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("main_info").innerHTML = this.responseText;
    }
  };
  xhttp.open("POST", "info/how_to.html", true);
  xhttp.send();
}
</script>

<!---how_Upgrade_js--->
<script>
    function loadupgrade() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("main_info").innerHTML = this.responseText;
    }
  };
  xhttp.open("POST", "info/upgrade.html", true);
  xhttp.send();
}
</script>


<!--js files-->
      <script src="js/jquery-3.0.0.min.js"></script>
 	  <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/modal.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/plugin.js"></script>
      <script src="js/filter.js"></script>
</body>
</html>