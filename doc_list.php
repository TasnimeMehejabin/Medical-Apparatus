<?php

if(isset($_POST['doc_submit'])){
$valuetosearch=$_POST['doc_valuetosearch'];
$query="select * from doctor_name where concat (doc_headline) like '%".$valuetosearch."%' ";
$result=filterTable($query);
}
else{
$query="SELECT * from doctor_name order by doc_headline";
$result=filterTable($query);
}
function filterTable($query)
{
require_once("db_connect.php");
$filter_result=mysqli_query($conn,$query);
return $filter_result;
}






?>



<html>
<head>

<title>
Medicine List
</title>
<link href="search.css" rel="stylesheet" type="text/css"/>
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
<li><a href="index.html">Home</a></li>
<li><a href="contact.php">Contact</a></li>


</ul>
</div>

<div id="myModal" class="modal">

 

</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

<div class="search">
<form name="usrform" method="post" action="doc_list.php">
  <input type="text" name="doc_valuetosearch" placeholder="Search.." >
  <input type="submit" name="doc_submit" value="GO" style="height:48px;width:48px">
  
<div style="width:70%">
<table border="1" cellpadding="10" cellspacing="1" width="100%" >
<tr class="tableheader" align="center">
<td width="20%"><font size="4">DOCTOR NAME</font></td>
<td width="28%"><font size="4">DETAILS</font></td>

</tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
if($i%2==0)
$classname="evenRow";
else
$classname="oddRow";
?>
<tr class="<?php if(isset($classname)) echo $classname;?>">
<td><font size="3"><?php echo $row["doc_headline"]; ?></font></td>
<td><font size="3"><?php echo $row["doc_description"]; ?><br><br></font></td>
</tr>
<?php
echo '<td><a href="comment_page.php?doc_id=' . $row['doc_id'] .  'doc_headline='.$row["doc_headline"].'">View Details</a></td>';
$i++;
}
?>
</table>
</form>
</div>
</div>

</body>
</html>


