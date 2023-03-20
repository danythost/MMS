<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Delete</title>
	<link rel="stylesheet" href="layout/styles/fontawesome-free/css/fontawesome-all.min.css">
</head>
<body>
	<p>
		<a href="adminrecord.php"><button type="btn" class="btn btn-standard"><i class="fas fa-chevron-circle-left"></i></button></a>
	</p>
<div class="header" align="center">
	<h2>Delete admin Record</h2>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-12" align="center">
			<p>
				<strong style="font-size: 20px;">OOPs !!!</strong> Only SuperAdmins have the previledge to Delete Other Admins
			</p>
			<p>
				If You Must delete, then contact your <a href="#" title="click_button">
					<button type="button" class="btn" onclick="loadDoc()">superAdmin</button></a> Or Contact Developers for Support !!
			</p>
			<div class="super_dev" id="more_info" style="background-color: black; color: whitesmoke; width: 50%; border-radius: 12px;" align="left ">
			</div>
		</div>
	</div>
</div>


<script>
    function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("more_info").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "contact.php", true);
  xhttp.send();
}
</script>
</body>
</html>