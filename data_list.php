<?php

require_once("db_connect.php");

$sql = "SELECT * FROM d_table ORDER BY id desc";
$result = mysqli_query($conn,$sql);

?>
<html>
<head>
<title>Data List</title>
<link rel="stylesheet" type="text/css" href="tablerow.css" />
</head>
<body>
<form name="usrform" method="post" action="">
<div style="width:100%">
<div class="message"><?php if(isset($message)) { echo $message; } ?></div>
<div align="right" style="padding-bottom:5px;"><a href="form.php" ><img alt='Add' title='Add' src='add.png' width='24px' height='24px'/><font size="4"> Add new data</font></a></div>
<table border="1" cellpadding="20" cellspacing="1" width="100%" >
<tr class="tableheader" align="center">
<td width="20%"><font size="4">MEDICINE NAME</font></td>
<td width="28%"><font size="4">DETAILS</font></td>
<td width="10%"><font size="4">OPERATION</font></td>
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
<td><font size="3"><?php echo $row["headline"]; ?></font></td>
<td><font size="3"><?php echo $row["description"]; ?><br><br></font></td>
<td align="center"><a onclick="return  confirm('sure!want to delete this data')" href="delete_data.php ?id=<?php echo $row["id"]; ?>" >

<img alt='Delete' title='Delete' src='delete.png' width='30px' height='30px'hspace='5' /></a></td>
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