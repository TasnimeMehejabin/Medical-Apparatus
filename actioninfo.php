<html>
<head>
<style>
	.main{background-image:url(images/3.jpeg);width:800px;height:830px;background-repeat:no-repeat;background-size:cover;font-size:20px;}
	.main a{text-decoration: none;}
</style>
</head>
<center>
<body>
<div class="main">

<?php
SESSION_START();
$sname=$_POST['name'];
$nname=$_POST['no'];
$bname=$_POST['blood'];
$aname=$_POST['age'];
$wname=$_POST['weight'];
$hname=$_POST['high'];
$lname=$_POST['low'];
$dname=$_POST['diabetes'];
$cname=$_POST['comment'];
include("config.php");
$sql="insert into info(aa,bb,cc,dd,ee,ff,gg,hh,ii) values ('$sname','$nname','$bname','$aname','$wname','$hname','$lname','$dname','$cname')";
$result=mysql_query($sql);


if($result)
	
{
	
	echo"<br><br>";
	echo"<br><br>";
	echo"<br><br>";
	echo"<h2>Patient Details...</h2>";
	
	
	echo"Name:		";
	echo $sname;
	echo"<br><br>";
	echo"Contact No:		";
	echo $nname;
	echo"<br><br>";
	echo"Blood Group:		";
	echo $bname;
	echo"<br><br>";
	echo"Age:		";
	echo $aname;
	echo"<br><br>";
	echo"Weight:		";
	echo $wname;
	echo"<br><br>";
	echo"Pressure:";
	echo"<br>";
	echo"High: ";
	echo $hname;
	echo" Low: ";
	echo $lname;
	echo"<br><br>";
	echo"Diabetes:		";
	echo $dname;
	echo"<br><br>";
	echo"Comment:		";
	echo $cname;
	echo"<br>";
	echo"<a href='logout.php'>Logout</a>";
	SESSION_DESTROY();
	
	
	
}
else
{
	echo"insertion not complete";
}
mysql_close($con);

?>

</div>
</body>
</center>
</html>





