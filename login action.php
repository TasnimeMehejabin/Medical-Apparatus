<?php
$sname=$_POST['name'];
$pass=$_POST['password'];
include("config.php");
$sql="select * from reg";
$result=mysql_query($sql);
$i=0;
while($db_field=mysql_fetch_assoc($result))
{

	
	if($sname==$db_field['aa'] && $pass==$db_field['ee'])
	{
		$i=1;
	}
}

if($i==0)
{
	
	echo "Login not Complete!!!";
}
else
{
	
	echo "Login Complete";
}

mysql_close($con);
?>