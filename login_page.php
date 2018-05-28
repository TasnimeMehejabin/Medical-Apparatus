<?php
 
if(isset($_POST['description'])&&isset($_POST['headline'])&&isset($_POST['submit'])){
	 $submitbutton= $_POST['submit'];
	$description=$_POST['description'];
	$headline=$_POST['headline'];

	 require_once("db_connect.php");
	   if ($submitbutton){
      if (!empty($headline) && !empty($description)) {

	$sql = "INSERT INTO d_table (headline,description ) VALUES ('$headline ',' $description')";
	mysqli_query($conn,$sql);
	$current_id = mysqli_insert_id($conn);
	if(!empty($current_id)) {
		$message = "inserted";
	}
      }
      else {
         $message = "error";
      }
   }
}


	

?>
<?php include ('server.php'); ?>
<?php if(isset($_SESSION['username'])): ?>
<html>
<head>
<link rel="stylesheet"href="login_page.css"type="text/css">
</head>
<body>
<div class="total">

<div id="sidebar">
<div class="toggle-btn" onclick="toggleSidebar()">
<script>
function toggleSidebar(){
document.getElementById("sidebar").classList.toggle('active');
}
</script>
<span></span>
<span></span>
<span></span>
</div>
<ul>

<p> <span style="color:white">Welcome <strong><?php echo $_SESSION['username']; ?></strong></span></p>


<li><a href="index.html">HOME</a></li>
<li><a href="about us.html">ABOUT</a></li>
<li><a href="register.php">Registration</a></li>
<p><a href="login_page.php?logout='1'" style="color:red;">Logout</a></p>

</ul>
</div>
<div class="doctor">
<a href="doc_form.php"><img src="images.jpg"></a>
<h4>Add Doctor Name  </h4>
</div>
<div class="medicine">
<a href="form.php"><img src="wallpaper-203147.jpg"></a>
<h4>Add Medicine Name  </h4>
</div>




</div>
</center>
</body>
</html>
<?php endif ?>