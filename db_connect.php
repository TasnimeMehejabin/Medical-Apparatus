<?php 
    
mysql_query('SET CHARACTER SET utf8');
mysql_query("SET SESSION collation_connection ='utf8_general_ci'");
$conn = mysqli_connect("localhost","root","","data_table");
?>