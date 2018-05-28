<html>
	<head>
		<title>Sign Up</title>
		<style>
			#menu{background:#50B115;overflow:hidden;}
			#menu ul{margin:0;padding:0;list-style:none;}
			#menu ul li{float:left;}
			#menu ul li a{display: block;
				
				float: left;
				height:50px;
				margin: 0px;
				padding: 0px 40px 0px;
				line-height: 60px;
				letter-spacing: -1px;
				text-decoration: none;
				text-transform: lowercase;
				text-shadow: 2px 2px 2px #2E7C0E;
				font-family: 'Abel', sans-serif;	
				font-size: 24px;
				font-weight: normal;
				color: black;
				border: none;}
			#menu ul li a:hover{background: #276D05;
				text-decoration: none;
				text-shadow: 2px 2px 2px #1B5803;
				color: #FFFFFF;}
		</style>
	</head>
	<center>
	<body style="background:url(1.jpg);background-repeat:no-repeat;background-size:cover;">
			<h2>REGISTER HERE</h2>
			<div id="menu">
					<ul>
						<li><a href="index.html" class="current">Home</a></li>
						
						<li><a href="#" target="_parent">Registration</a></li>
						<li><a href="#" target="_parent">nnn</a></li>
						<li><a href="#" target="_parent">About</a></li>
						<li><a href="buy.php" target="_parent">Buy Apparatus</a></li>
					</ul>
			</div>
			<br>			
			<br>			
			<form action="registration.php" method="post">
				<table border="1" width="500" height="200">
					<tr>
						<td>Name:</td>
						<td><input type="text" name="name"></td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><input type="password" name="password"></td>
					</tr>
					<tr>
						<td>Email Id:</td>
						<td><input type="text" name="email"></td>
					</tr>
					<tr>
						
						<td colspan="5" align="center"><input type="submit" name="signup" value="signup"></td>
					</tr>
				</table>
			</form>
			
	</body>
	</center>
</html>

<?php
mysql_connect("localhost","root","")or die (mysql_error());
mysql_select_db("apparatus") or die (mysql_error());

if(isset($_post['signup']))
{
	$name=$_post['name'];	
	$password=$_post['password'];	
	$emailid=$_post['email'];

	$sql="insert into user(name,password,email) values ('$name','$password','$emailid')";
	if(mysql_query($sql))
	{
		echo"<h3>You have registered successfully!</h3>";
	}

}
?>
