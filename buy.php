<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Home</title>
		<meta name="keywords" content="Medical" />
		<meta name="description" content="Medical Apparatus" />
		<link href="templatemo_style.css" rel="stylesheet" type="text/css" />

		<script language="javascript" type="text/javascript">
		function clearText(field)
		{
			if (field.defaultValue == field.value) field.value = '';
			else if (field.value == '') field.value = field.defaultValue;
		}
		</script>
<style>
		
body{
	background-image: url("images/2.jpg");
	background-repeat:no-repeat;background-size:cover;
	
}

h3 { font-size: 22px; margin: 0 0 15px; padding: 0;  color: white }
		
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

.form {
    background-color: #f6f6f6;
    background-image: -webkit-gradient(linear, left top, left bottom, from(#f6f6f6), to(#eae8e8));
    background-image: -webkit-linear-gradient(top, #f6f6f6, #eae8e8);
    background-image: -moz-linear-gradient(top, #f6f6f6, #eae8e8);
    background-image: -ms-linear-gradient(top, #f6f6f6, #eae8e8);
    background-image: -o-linear-gradient(top, #f6f6f6, #eae8e8);
    background-image: linear-gradient(top, #f6f6f6, #eae8e8);
    border-color: #dedede #bababa #aaa #bababa;
    border-style: solid;
    border-width: 1px;
    -webkit-border-radius: 10px;
    -moz-border-radius: 10px;
    border-radius: 10px;
    -webkit-box-shadow: 0 3px 3px rgba(255,255,255,.1), 0 3px 0 #bbb, 0 4px 0 #aaa, 0 5px 5px #444;
    -moz-box-shadow: 0 3px 3px rgba(255,255,255,.1), 0 3px 0 #bbb, 0 4px 0 #aaa, 0 5px 5px #444;
    box-shadow: 0 3px 3px rgba(255,255,255,.1), 0 3px 0 #bbb, 0 4px 0 #aaa, 0 5px 5px #444;
    margin: 100px auto;
    overflow: hidden;
    padding: 8px;
    width: 450px;
}

.form #submit::-moz-focus-inner {
    border: 0;
}
.bar{
    padding-top: 2px;
   
    margin-left: 20px;
}

p {
	color: darkred;
    font-size: 25px;
}
.date{
   font-size: 21px;
   color: white;
}

img {
	height: 200px;
	width: 300px;
}

.form #search {
    border: 1px solid #CCC;
    -webkit-box-shadow: 0 1px 1px #ddd inset, 0 1px 0 #FFF;
    -moz-box-shadow: 0 1px 1px #ddd inset, 0 1px 0 #FFF;
    box-shadow: 0 1px 1px #ddd inset, 0 1px 0 #FFF;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    color: black;
    
    font: 16px Lucida Sans, Trebuchet MS, Tahoma, sans-serif;
    height: 70px;
    padding: 05px;
    width: 450px;
    margin-bottom: 10px;
}

.form #search:focus {
    border-color: #aaa;
    -webkit-box-shadow: 0 1px 1px #bbb inset;
    -moz-box-shadow: 0 1px 1px #bbb inset;
    box-shadow: 0 1px 1px #bbb inset;
    outline: 0;
}

.form #search:-moz-placeholder,
.form #search:-ms-input-placeholder,
.form #search::-webkit-input-placeholder {
    color: #999;
    font-weight: normal;
}

.form #submit {
    background-color: #0483a0;
    background-image: -webkit-gradient(linear, left top, left bottom, from(#31b2c3), to(#0483a0));
    background-image: -webkit-linear-gradient(top, #31b2c3, #0483a0);
    background-image: -moz-linear-gradient(top, #31b2c3, #0483a0);
    background-image: -ms-linear-gradient(top, #31b2c3, #0483a0);
    background-image: -o-linear-gradient(top, #31b2c3, #0483a0);
    background-image: linear-gradient(top, #31b2c3, #0483a0);
    border: 1px solid #00748f;
    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
    border-radius: 3px;
    -webkit-box-shadow: 0 1px 0 rgba(255, 255, 255, 0.3) inset, 0 1px 0 #FFF;
    -moz-box-shadow: 0 1px 0 rgba(255, 255, 255, 0.3) inset, 0 1px 0 #FFF;
    box-shadow: 0 1px 0 rgba(255, 255, 255, 0.3) inset, 0 1px 0 #FFF;
    color: #fafafa;
    cursor: pointer;
    height: 28px;
    float: right;
    font: 15px Arial, Helvetica;
    padding: 0;
    text-transform: uppercase;
    text-shadow: 0 1px 0 rgba(0, 0 ,0, .3);
    width: 90px;
}
.form #usnm {
    border: 1px solid #CCC;
    -webkit-box-shadow: 0 1px 1px #ddd inset, 0 1px 0 #FFF;
    -moz-box-shadow: 0 1px 1px #ddd inset, 0 1px 0 #FFF;
    box-shadow: 0 1px 1px #ddd inset, 0 1px 0 #FFF;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
  color: black;
    font: 16px Lucida Sans, Trebuchet MS, Tahoma, sans-serif;
    height: 45px;
    padding: 10px;
    width: 250px;
    margin-bottom: 10px;
}

.form #submit:hover,
.form #submit:focus {
    background-color: #31b2c3;
    background-image: -webkit-gradient(linear, left top, left bottom, from(#0483a0), to(#31b2c3));
    background-image: -webkit-linear-gradient(top, #0483a0, #31b2c3);
    background-image: -moz-linear-gradient(top, #0483a0, #31b2c3);
    background-image: -ms-linear-gradient(top, #0483a0, #31b2c3);
    background-image: -o-linear-gradient(top, #0483a0, #31b2c3);
    background-image: linear-gradient(top, #0483a0, #31b2c3);
}

.form #submit:active {
    -webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.5) inset;
    -moz-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.5) inset;
    box-shadow: 0 1px 4px rgba(0, 0, 0, 0.5) inset;
    outline: 0;
}


.form #submit::-moz-focus-inner {
    border: 0;
}
.bar{
    padding-top: 2px;
}

.wrapper {
  margin: 0 auto;
  padding: 40px;
  max-width: 800px;
  font-family: "Helvetica Neue", Helvetica, Arial;
  font-size: 14px;
  line-height: 20px;
  float: left;
  font-weight: 400;
  color: #3b3b3b;
  -webkit-font-smoothing: antialiased;
  font-smoothing: antialiased;

}

.table {
  margin: 0 0 40px 0;
  width: 900px;
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.2);
  display: table;
}
@media screen and (max-width: 580px) {
  .table {
    display: block;
  }
}

.row {
  display: table-row;
  background: #f6f6f6;
}
.row:nth-of-type(odd) {
  background: #e9e9e9;
}
.row.header {
  font-weight: 600;
  color: #ffffff;
  background: #ea6153;
  font-size: 30px;
}
.cellcm{
    width: 300px;
    margin-left: 20px;
    text-align: center;
}
.cellhus{
    width: 150px;
    text-align: center;
    height: 30px;
}
.row.green {
  background: #27ae60;
}
.row.blue {
  background: #2980b9;
}
@media screen and (max-width: 580px) {
  .row {
    padding: 8px 0;
    display: block;
  }
}

.cell {
  padding: 6px 12px;
  display: table-cell;
  margin-left: 5px;
}
@media screen and (max-width: 580px) {
  .cell {
    padding: 2px 12px;
    display: block;
  }
}
.cellname{
      padding: 6px 12px;
  display: table-cell;
  margin-left: 5px;
  color: blue;
  font-weight: bold;
}
.pcmn{
    font-size: 30px;
    margin-bottom: 0px;
    color: black;
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
				
				
				
				
				
				
				
<marquee class="date" behavior="alternate"><b>
				
</div>
				
</div>
<?php
$date = date('d-m-y');
$time = date('H:i:s');
$day = date('l');
$now = time();
date_default_timezone_set('Asia/Dhaka');
$localtime_assoc = localtime($now,true);
$now_hr = sprintf('%02u',$localtime_assoc['tm_hour']);
$now_mn = sprintf('%02u',$localtime_assoc['tm_min']);
$now_sc = sprintf('%02u',$localtime_assoc['tm_sec']);
$now_tm = $now_hr.":".$now_mn.":".$now_sc;
echo ' '.$date.' '.$day.' '.$now_tm;
?></b></marquee>
				
				
<div id="main">

			<table width="100" border="1" cellpadding="5">

<tr>

<td align="center" valign="center">
<img src="appts/thermo.jpg" alt="description here" />
<h3>Thermometer</h3>
<p>BDT 100</p>
<br>
<a href="1.php" class="button">Buy</a>
</td>

<td align="center" valign="center">
<img src="appts/2.jpg"  />
<h3>Sphygmomanometer</h3>
<p>BDT 3100</p>
<br>
<a href="2.php" class="button">Buy</a>
</td>

<td align="center" valign="center">
<img src="appts/3.jpg"/>
<h3>Stethoscope</h3>
<p>BDT 1200</p>
<br>
<a href="3.php" class="button">Buy</a>
</td>
</tr>

<td align="center" valign="center">
<img src="appts/4.jpg" />
<h3>Blood Glucose Monitor</h3>
<p>BDT 1700</p>
<br>
<a href="4.php" class="button">Buy</a>
</td>

<td align="center" valign="center">
<img src="appts/5.jpg" />
<h3>First Aid Kit</h3>
<p>BDT 350</p>
<br>
<a href="5.php" class="button">Buy</a>
</td>

<td align="center" valign="center">
<img src="appts/6.jpg" />
<h3>Electronic Weighing Machiner</h3>
<p>BDT 3100</p>
<br>
<a href="6.php" class="button">Buy</a>
</td>


</table>	
			
		<div class="cleaner"></div>
	</div>

	           
	
<?php
if (isset($_REQUEST['ok'])) {
 $xml = new DOMDocument("1.0","UTF-8");
 $xml->load("stay.xml");
 
 $rootTag = $xml->getElementsByTagName("document")->item(0);
 
 $dataTag = $xml->createElement("data");
 
 $aTag = $xml->createElement("a",$_REQUEST['a']);
 $bTag = $xml->createElement("b",$_REQUEST['b']);
 
 $dataTag->appendChild($aTag);
 $dataTag->appendChild($bTag);
 
 $rootTag->appendChild($dataTag);
 
 $xml->save("stay.xml");
}

?>
<br>
<div class="bar">
<form class="form" action="buy.php" method="POST">
 <input type="text" name="a" id="usnm" placeholder="Enter Username">
 <input type="text" name="b" id="search" placeholder="Type Comment">
 <input type="submit" id="submit" name="ok" value="comment">
</form>
</div>
<script type="text/javascript">
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.open("POST","stay.xml",false);
xmlhttp.send();
xmlDoc=xmlhttp.responseXML;

document.write("<div class='wrapper'><table class='table'> <caption class='pcmn'>View Previous Comments</caption><tr class='row header'><td class='cellhus'>Username</td><td class='cellcm'>Comment</td></tr>");
var x=xmlDoc.getElementsByTagName("data");
for (i=0;i<x.length;i++)
  {
  document.write("<tr class='row'><td class='cellname'>");
  document.write(x[i].getElementsByTagName("a")[0].childNodes[0].nodeValue);
  document.write("</td><td class='cell'>");
  document.write(x[i].getElementsByTagName("b")[0].childNodes[0].nodeValue);
  document.write("</td></tr>");
  }
document.write("</table></div>");
</script>

	
	
	<br><br><br><br><br><br><br>
	<div>
	<br><br>
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
	
	
	
	
	 </div>
				
				
				</div>
	

</html>