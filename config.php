<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("data_table",$con);
if(!$con)
{
	
	die("Mysql Error".mysqli_error());
}

?>