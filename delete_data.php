<?php
require_once("db_connect.php");
$sql = "DELETE FROM d_table WHERE id=". $_GET["id"]."";
mysqli_query($conn,$sql);
header("Location:data_list.php");
?>