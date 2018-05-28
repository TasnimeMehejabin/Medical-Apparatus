<?php

if(isset($_POST['submit'])){
$valuetosearch=$_POST['valuetosearch'];
$query="select * from d_table where concat (headline,description) like '%".$valuetosearch."%' ";
$result=filterTable($query);
}
else{
$query="SELECT * from d_table order by headline";
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

<div class="search">
<form name="usrform" method="post" action="search.php">
  <input type="text" name="valuetosearch" placeholder="Search.." >
  <input type="submit" name="submit" value="GO" style="height:48px;width:48px">
  
<div style="width:80%">
<table border="1" cellpadding="10" cellspacing="1" width="80%" >
<tr class="tableheader" align="center">
<td width="20%"><font size="4">MEDICINE NAME</font></td>
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
<td><font size="3"><?php  echo $row["headline"]; ?></font></a></td>
<td><font size="3"><?php echo $row["description"]; ?><br><br></font></td>


</tr>
<?php

$i++;
}
?>
</table>
</form>
</div>
</div>

</body>
</html>

