
<?php 

if(isset($_POST['comment_submit'])&&isset($_POST['patient_name'])&&isset($_POST['doctor_name'])&&isset($_POST['c_description'])){
	$doctor_name=$_POST['doctor_name'];
	$patient_name=$_POST['patient_name'];
	$rating=$_POST['rating'];
	$c_description=$_POST['c_description'];
require_once("db_connect.php");
$query="INSERT INTO comment (patient_name,doctor_name,rating,c_description ) VALUES ('" . $patient_name . "','" . $doctor_name . "','" . $rating. "','" . $c_description. "')";
$result=mysqli_query($conn,$query);
}

require_once("db_connect.php");
$sql = "SELECT * FROM comment ORDER BY comment_id desc";
$c_result = mysqli_query($conn,$sql);


?>



<html>
<head>

<title>
COMMENT List
</title>
<link href="comment_page.css" rel="stylesheet" type="text/css"/>
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
<li><a href="contact.php">ABOUT</a></li>
<li><button id="myBtn">COMMENT BOX</button></li>
</ul>
</div>

<div id="myModal" class="modal">

 
  <div class="modal-content">
    <span class="close">&times;</span>
	<form action="" method="POST" id="usrform">
<div class="input-group">
<label>Patient Name: </label>
<input type="text" name="patient_name" >
</div>
<div class="input-group">
<label>Doctor Name: </label>
<input type="text" name="doctor_name" >
</div>
<div class="input-group">
<label>Doctor Rating (*)out of 5 star:</label>
<input type="password" name="rating">
</div>
<div class="input-group">
Message: 
<textarea rows="4" cols="50"  name="c_description" form="usrform">
Enter text here...</textarea>
</div>

<div class="input-group">
<button type="submit" name="comment_submit" value="Comment"class="btn" >Comment</button>
</div>
   </form>
  </div>

</div>

<script>

var modal = document.getElementById('myModal');


var btn = document.getElementById("myBtn");


var span = document.getElementsByClassName("close")[0];

 
btn.onclick = function() {
    modal.style.display = "block";
}


span.onclick = function() {
    modal.style.display = "none";
}


window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

<div class="total_box" style="width:40%">
<table border="1" cellpadding="10" cellspacing="1" width="100%" >

<?php
$i=0;
while($row = mysqli_fetch_array($c_result)) {

?>
<tr class="">
<td><font size="3">Patient Name:<?php echo $row["patient_name"]; ?></br>
Doctor Name:<?php echo $row["doctor_name"]; ?></br>
Doctor Rating (*)out of 5 star:<?php echo $row["rating"]; ?></br>
Message: <?php echo $row["c_description"]; ?>


</font></td>
</tr>
<?php

$i++;
}
?>
</table>
</form>
</div>



</body>
</html>


