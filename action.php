
<?php
$sname=$_POST['name'];
$aname=$_POST['address'];
$nname=$_POST['no'];
$gname=$_POST['gender'];
$pname=$_POST['password'];
$ename=$_POST['email'];
include("config.php");

$sql="insert into reg (aa,bb,cc,dd,ee,ff) values ('$sname','$aname','$nname','$gname','$pname','$ename')";
$result=mysql_query($sql);

if($result)
{
	
	 echo "Insertion Complete";
	
}
else
{
	
	echo "Insertion Not Complete";
}

mysql_close($con);
?>
