<html>
<head>
<style>
	.main{width:500px;height:500px;background-color:powderblue;margin:60px auto;font-size:20px;}
	.main a{text-decoration: none;}
</style>
</head>

<center>
<body style="background:url(images/background1.jpg);background-repeat:no-repeat;background-size:cover;">
	<div class="main">
	
			<?php
			session_start();
			$nname=$_POST['no'];

			$pname=$_POST['password'];
			


			if($nname&&$pname)
			{
				$connect=mysqli_connect("localhost","root","") or die("couldn't connect");
				mysqli_select_db($connect,"data_table") or die("couldn't find DB");
				
				$query=mysqli_query($connect,"SELECT * FROM reg WHERE cc='$nname'");
				$numrows=mysqli_num_rows($query);
				
				if($numrows!=0)
				{
					while($row=mysqli_fetch_assoc($query))
					{
						$dbno=$row['cc'];
						$dbpassword=$row['ee'];
						
					}
					if($pname==$dbpassword && $nname==$dbno)
					{
						echo"
						<br><br><br>
						<big><b>you are successfully logged in!</b></big>
						<br><br><br>
						
						<b>Catagories:</b><br><br>
						
						<a href='passchange.php'>1. Change Password</a><br><br>
						<a href='info.php'>2. Give Patient Information</a><br><br>
						<a href='logout.php'>3. Logout</a>
						";
						$_SESSION['no']=$nname;
						
						
					}
					else
					{
						echo"incorrect password";
					}	
				}
				else
				{
					die("This user doesn't exist");
				}
			}
			else
			{
				die("please enter username and password");
			}

			?>
	</div>		
</body>
</center>
</html>
