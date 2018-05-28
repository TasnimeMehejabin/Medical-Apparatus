<html>
	<head>
		<style>
		body{background:url(images/4.jpg);
		
		background-repeat:no-repeat;
		background-size:cover;
		font-size:20px;
		
		
		}
		.main{width:960px;height:960px;margin:0px auto;overflow:hidden;}
		</style>
	</head>
	<body>
		
		<div class="main">
			<div class="form" style="float:left;overflow:hidden;border:10px;">
				<form method="post" action="actioninfo.php">
				
					<h1 style="color:blue;"><b>Patient Details...</b></h1>
					<br>
					Name:<br>
					<input type="text" name="name" required><br><br>
					Contact No: <br>
					<input type="digit" name="no"required><br><br>
					Blood group: <br>
					<input type="text" name="blood"required><br><br>
					Age: <br>
					<input type="number" name="age"required><br><br>
					Weight(kg): <br>
					<input type="number" name="weight"required><br><br>
					Blood Pressure: <br>
					High:
					<input type="digit" name="high">
					Low:
					<input type="digit" name="low"><br><br>
					Diabetes:<br>
					<input type="radio" name="diabetes" value="yes">Yes
					<input type="radio" name="diabetes" value="no">No
					<br><br>
					Besides this:<br>
					<textarea name="comment" placeholder="If you want to give more information write here" style="width:200px;height:300px;" ></textarea>
					
					<input type="submit" name="submit" value="Submit">
					
				</form>
			</div>	
		</div>
			
	</body>
</html>