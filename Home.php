<?php 
require_once 'Auth/connect.php';
require_once 'Auth/session.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>member records</title>
<!-- Tweaks for older IEs-->
  <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/responsive.css">
	<link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="layout/styles/fontawesome-free/css/fontawesome-all.min.css">

</head>
<style>
	body{
		background-color: black;
		background-image: url(images/forestbridge.jpg);
		background-size: cover;
		background-repeat: no-repeat;
		background-attachment: fixed;
	}
</style>
<body>
	<!--- User Guide--->
<div class="info" align="center" style="margin-top:0%; margin-bottom: 0.5%;">
     <i class="fas fa" style="font-size: 26px; float: left;" title="Enlarge_ScreenSize"><button style="border-radius: 10px;">press F11</button></i>
     <a href="help.php" title="How_To_Use" style="float: right;"><button type="btn" class="btn btn-standard"><i class="fas fa-info-circle" style="color: yellow; font-size: 30px;"></i></button></a>
   </div>
	<wbr>
<!--main-->
<div class="container" style="margin-top: 1.6%;">
	<div class="row">
			<div class="col-md-2" align="center" style="background-color:#a31aff; border-radius:50px; box-shadow:3px 3px 5px;">
				<h2><i class="fas fa-users" style="color: whitesmoke;"></i></h2>
			</div>
			<div class="col-md-2" align="center" style="background-color: #33cccc; border-radius:50px; box-shadow:3px 3px 5px;">
				<!--anchor Tag here to envelope the button--><h2><i class="fas fa-user-shield" style="color: black;">#</i></h2>
			</div>
			<div class="col-md-2" align="center" style="background-color:#33cccc; border-radius:50px; box-shadow:3px 3px 5px;">
				<!--anchor Tag here to envelope the button--><h2><i class="fas fa-object-group">#</i></h2>
			</div>
			<div class="col-md-2" align="center" style="background-color:#33cccc; border-radius:50px; box-shadow:3px 3px 5px;">
				<!--anchor Tag here to envelope the button--><h2><i class="fas fa-child">#</i></h2>
			</div>
			<div class="col-md-2" align="center" style="background-color:#33cccc; border-radius:50px; box-shadow:3px 3px 5px;">
				<!--anchor Tag here to envelope the button--><h2><i class="fas fa-hashtag"></i></h2>
			</div>
			<div class="col-md-2" align="center" style="background-color:#33cccc; border-radius:50px; box-shadow:3px 3px 5px;">
				<h2><i class="fas fa-hashtag"></i></h2>
			</div>
	</div>
</div>
<br>

<div class="col-md-12" align="center">
 <a href="adminrecord.php" title="Admin-Section"><button class="btn btn-primary"><i class="fas fa-user-shield"></i></button></a>
 <a href="logout.php" title="LogOut"><button class="btn btn-primary"><i class="fas fa-sign-out-alt"></i></button></a>
</div>
</div>

<div class="col-md-12" align="center">
	<h3><i class="fas fa" style="color: whitesmoke;">Member Records</i></h3>
</div>

<!--add/search filter-->
<div class="tbl_props">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<a href="addmem.php"><button class="btn btn-primary"><i class="fas fa-user-plus"> add Member Rrecord</i></button></a>
				<input type="text" id="myInput" size="40" onkeyup="myFunction()" placeholder=" 🔍 Search for names.." style="float: right; border-radius: 10px; border: none; height: 37px;">
			</div>
			<div class="user_id" style="color: whitesmoke;" align="center">
				<h3><?php echo htmlspecialchars($_SESSION['username']);?></h3>
			</div>
<!--search js-->
<script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase(input);
  table = document.getElementById("mem_display");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>

<table id="mem_display" class="tb_scroll"; align="center">
<?php
	$sql = "SELECT * FROM member ORDER BY id DESC";

	$result = $dbcon->query($sql);

	if ($row = mysqli_num_rows($result) > 0 ) {
?>
<!--table styles-->
<style>
table {
    border-collapse: collapse;
    width: 100%;
    border-radius: 10px;
    background-color: lightyellow;}

tr:hover {background-color:#f5f5f5;}

th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

/* Scroll-bar styles */

#mem_display::-webkit-scrollbar {
width: 1em;
}

#mem_display::-webkit-scrollbar-track {
-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
}

#mem_display::-webkit-scrollbar-thumb {
background-color: dodgerblue;
outline: 1px solid #333333;
}


</style>
	<tr>
		<th align="center">s/no</th>
		<th align="center">Full Name</th>
		<th align="center">Image</th>
		<th align="center">Email</th>
		<th align="center">Occupation</th>
		<th align="center">Address</th>
		<th align="center">Action</th>
	</tr>
<?php 
$i=0;
while ($row = mysqli_fetch_array($result)) {
?>
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['fname']; ?></td>
<td width="15"><img src="profileImage/<?php echo $row['image']; ?>" style="height: 113%; width: 113%; border-radius: 50%;"></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['occupation']; ?></td>
<td><?php echo $row['address']; ?></td>
<td>
	<a href="viewmem.php?id=<?php echo $row['id']?>"><input id="view" type="button" name="view" title="View_picture" value="👨‍👨‍👧‍👧" class="btn btn-success" /></a>
	<!--<a href="viewmem.php?id=<?php echo $row['id']?>"><input id="view" type="button" name="view" value="👁" class="btn btn-success" /></a>-->
	<a href="editmem.php?id=<?php echo $row['id']?>"><input id="edit" type="button" name="edit" title="Edit_Record" value="✏" class="btn btn-success" /></a>
          <a href="deletemem.php?id=<?php echo $row['id']?>" onclick="return confirm('Are you sure to delete this record?')">  <input id="delete" type="submit" name="delete" title="Delete_Record" value="🗑" class="btn btn-danger" /></a>  
</td>
</tr>
<?php 
$i++;
}
?>
</table>
<?php 
}else{
	?>
	
		<div class="result_error" >
			<h5 style="color: yellow;">No results found</h5>
		</div>

	<?php
}

?>
			</div>
	  </div>
</div>

<!--main end-->
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

<?php 
$dbcon->close();
exit();
?>