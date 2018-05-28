<?php session_start();
if( isset($_SESSION['id']) )  unset($_SESSION['id']);
$link_id = mysql_connect("localhost","root",""); $dbname = "data_table"; $st="";

if(!mysql_select_db($dbname,$link_id)) die(mysql_error());
?>
<!DOCTYPE HTML> 
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Home</title>
		<meta name="keywords" content="Medical" />
		<meta name="description" content="Medical Apparatus" />
		<link href="templatemo_style1.css" rel="stylesheet" type="text/css" />
<style>
.button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
p {
	color: darkred;
    font-size: 25px;
}
img {
	height: 200px;
	width: 300px;
}
body {
	color: #fff;
}

</style>
	</head>
	<body>

	<div id="top_wrapper">
		<div id="top">
			<div id="header">
				
				<div id="site_title"><h1><center>Medical Apparatus</center></h1></div>
				
			</div>
			<div id="middle">
				<div id="menu">
					<ul>
						<li><a href="index.html" class="current">Home</a></li>
						<li><a href="login.html" class="current">Patient login</a></li>
						
						<li><a href="Search.php" target="_parent">Search Medicine</a></li>
						<li><a href="doc_list.php" target="_parent">Doctor info</a></li>
						<li><a href="buy.php" target="_parent">Buy Apparatus</a></li>
						<li><a href="contact.php" target="_parent">Contact</a></li>
					</ul>
					
				</div>
				<div id="main">

			<div class="wrapper">

<div align="left">
<form action="1.php" method="post">
				<table width="500" height="200">
					<tr>
					<td align="center" valign="center">
					<img src="appts/thermo.jpg" />
					<h3>Thermometer</h3>
					<p>BDT 100</p>
					<br> </td>
					</tr>
					<tr>
						<td>Name:</td>
						<td><input type="text" name="name"></td>
					</tr>
					<tr>
						<td>Phone No.</td>
						<td><input type="text" name="phone"></td>
					</tr>
					<tr>
						<td>Email:</td>
						<td><input type="text" name="email"></td>
					</tr>
					<tr>
						<td>Address:</td>
						<td><input type="text" name="address"></td>
					</tr>
					<tr>
						<td>Courier Service:</td>
						<td><select name="courier">
						    <option value="Sundarban Courier">Sundarban Courier</option>
						    <option value="S.A Paribahan">S.A Paribahan</option>
						    <option value="Kortowa">Kortowa</option>
						  </select></td>
					</tr>
					<tr>
						<td></td>
						<td>
						   <button type="submit" class="button" name="submit">Submit</button>
					</td>
					</tr>
				</table>
</form>
			
		<div class="cleaner"></div>
	</div>

	<div id="footer_wrapper_01">
		<div id="footer_wrapper_02">
			<div id="templatemo_footer">
				
				<div class="col_w225">
					<h5>Contact</h5>
					<div class="col_w225_content">
						Tel: 010-020-088<br />
						Fax: 020-010-0660<br />
						Email: medical_apparatus@gmail.com
					</div>
				</div>
				
				<div class="col_w225">
					<h5>Privacy Policy</h5>
					<div class="col_w225_content"> All data are resurved confidentially.</div>
				</div>
			  
				<div class="col_w225">
					<h5>Admin</h5>
					<div class="col_w225_content">
						<ul class="tmo_footer_list">
							<li><a href="">Tasnime Mehejabin</a></li>
							<li><a href="">Faria Rahman</a></li>
							<li><a href="">Urmi Akter</a></li>
							
						</ul>
					</div>
				</div>
				
				<div class="col_w225 col_last">
					<h5>Copyright</h5>
					<div class="col_w225_content">
					  <div>All rights are reserved by Medical Apparatus and any activity of this website is our responsibility.<br />
					</div>
					</div>
				</div>
				
				
				
				<div align="center">
					Copyright © 2018 <a href="#">C.S.E - 3.2</a> | 
					<a href="" target="_parent">Medical Apparatus</a> by 
					<a href="" target="_parent">CSE - 3.2</a>
				</div>
			</div>
		</div>
	</div>

</html>
<?php
if( isset($_POST['submit']) )
{
	$name=$_POST['name'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$address=$_POST['address'];
	$courier=$_POST['courier'];
	$product="Thermometer";

	
$query="INSERT INTO buy(product,name,phone,email,address,courier) VALUES ('$product', '$name', '$phone', '$email', '$address', '$courier')";
	$result = mysql_query($query);
	if($result == TRUE)
	{
		echo"<h3>We've got your request,you'll get your product soon!</h3>";
	}

}
?>