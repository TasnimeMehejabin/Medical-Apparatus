<?php

if(isset($_POST['doc_description'])&&isset($_POST['doc_headline'])&&isset($_POST['doc_submit'])){
	 $doc_submitbutton= $_POST['doc_submit'];
	$doc_description=$_POST['doc_description'];
	$doc_headline=$_POST['doc_headline'];

	 require_once("db_connect.php");
	   if ($doc_submitbutton){
      if (!empty($doc_headline) && !empty($doc_description)) {

	$sql = "INSERT INTO doctor_name (doc_headline,doc_description ) VALUES ('$doc_headline ',' $doc_description')";
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

<html>
<head>
<link rel="stylesheet"href="form.css"type="text/css">
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
<li><a href="index.html">HOME</a></li>
<li><a href="about us.html">ABOUT</a></li>
<li><a href="register.php">Registration</a></li>
<li><a href="home.php?logout='1'" style="color:red;">Logout</a></li>

</ul>
</div>


<div class="list" align="right" style="padding-bottom:5px;">
<a href="doc_data_list.php" >
<img alt='List' title='List' src='list.png' width='40px' height='40px'/>
</a>
</div>
<div class="message"><?php if(isset($message)) { echo $message; } ?></div>
<div class="head">
<h3 style="font-family: 'Georgia';font-size: 25px;">ADD DOCTOR INFO</h3>
</div>
<div class="main">
<table border="0"  width="750" align="center" >
<tr>
<textarea rows="2" cols="50"  name="doc_headline" form="usrform">
Enter headline here...</textarea>
</tr>
<tr>
<textarea rows="4" cols="50"  name="doc_description" form="usrform">
Enter text here...</textarea>
</tr>

</table>
<div>
<form action="doc_form.php" method="POST" id="usrform">


<input type="submit" name="doc_submit" value="doc_submit" class="button">

</form>

</div>

</div>

</div>

</center>
</body>
</html>