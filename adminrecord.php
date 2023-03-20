<?php 
require_once 'Auth/connect.php';
require_once 'Auth/session.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin records</title>
<!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/responsive.css">
	<link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="layout/styles/fontawesome-free/css/fontawesome-all.min.css">

</head>
<body style="background-image: url(images/LYAQpr.jpg);">
	<wbr>
<div class="col-md-12" align="center">
 <a href="Home.php"><button class="btn btn-primary"><i class="fas fa-users"></i></button></a>
 <a href="logout.php"><button class="btn btn-primary"><i class="fas fa-sign-out-alt"></i></button></a>
</div>
</div>

<div class="col-md-12" align="center">
	<h3 style="color: whitesmoke;"><i class="fas fa">Admin Record</i></h3>
</div>

<!--add/search filter-->
<div class="tbl_props">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<a href="addAdmin.php"><button class="btn btn-primary"><i class="fas fa-user-plus"> Create Admin</i></button></a>
				<input type="text" id="myInput" onkeyup="myFunction()" placeholder=" 🔍 Search for names.." style="float: right; border-radius: 10px;">
			</div>
<!--search js-->
<script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("mem_display");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
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

<table id="mem_display" align="center">
<?php
	$sql = "SELECT * FROM admin ORDER BY id DESC";

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
}

tr:hover {background-color:#f5f5f5;}

th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}
</style>
	<tr>
		<th>s/no</th>
		<th>User Name</th>
		<th>Password</th>
		<th>Action</th>
	</tr>
<?php 
$i=0;
while ($row = mysqli_fetch_array($result)) {
?>
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['username']; ?></td>
<td><?php echo $row['passwd']; ?></td>
<td>
	<a href="viewadmin.php?id=<?php echo $row['id']?>"><input id="view" type="button" name="view" value="view" class="btn btn-success" /></a>
	<a href="editadmin.php?id=<?php echo $row['id']?>"><input id="edit" type="button" name="edit" value="Edit" class="btn btn-success" /></a>
          <a href="deleteadmin.php?id=<?php echo $row['id']?>" onclick="return confirm('Are you sure to delete this record?')">  <input id="delete" type="submit" name="delete" value="Delete" class="btn btn-danger" /></a>  
</td>
</tr>
<?php 
$i++;
}
?>
</table>
<?php 
}else{
	echo "No result found";
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