<?php
require_once("db_connect.php");
$sql = "DELETE FROM doctor_name WHERE doc_id=". $_GET["doc_id"]."";
mysqli_query($conn,$sql);
header("Location:doc_data_list.php");
?>