<html>
<head>
<style>
.main{width:500px;height:300px;background-color:#6ED2F4;font-size:20px;margin:70px auto;}
.main a{text-decoration: none;}
</style>
</head>
<center>
<body style="background:url(images/background2.jpg);background-repeat:no-repeat;background-size:cover;">
<div class="main">
<?php
session_start();
$nname=$_SESSION['no'];
if($nname)
{
	if(isset($_POST['submit']))
	{
		$oldpassword=$_POST['oldpassword'];
		$newpassword=$_POST['newpassword'];
		$repeatnewpassword=$_POST['repeatnewpassword'];
		//echo "$oldpassword/<br>$newpassword/<br>$repeatnewpassword/<br>";
		
		$connect=mysqli_connect("localhost","root","");
		mysqli_select_db($connect,"data_table") or die();
		$queryget=mysqli_query($connect,"SELECT ee FROM reg WHERE cc='$nname'") or ("Query didn't work");
		
		$row=mysqli_fetch_assoc($queryget);
		$oldpassworddb=$row['ee'];
		
			if($oldpassword==$oldpassworddb)
			{
				if($newpassword==$repeatnewpassword)
				{
					$querychange=mysqli_query($connect,"UPDATE reg SET ee='$newpassword' WHERE cc='$nname'")
					or("Query didn't work");
					session_destroy();
					die("your password has been changed.<br>
					
					<a href='logout.php'>Log Out</a>to the main page
					
					");
				}
				else
				{
					die("New password don't match");
				}
			}
			else
				die("old password doesn't match!");
		
		
	}
	else
	{
		echo"
		<form action='passchange.php' method='POST'>
		<br>
		old password:<br> <input type='text' name='oldpassword'><p>
		new password:<br> <input type='password' name='newpassword'><br>
		repeat new password:<br> <input type='password' name='repeatnewpassword'><p>
		<input type='submit' name='submit' value='changepassword'>
		</form>
		";
	}
}
else
{
	die("you must be logged in to change your password");
}
?>
</div>
</body>
</center>
</html>