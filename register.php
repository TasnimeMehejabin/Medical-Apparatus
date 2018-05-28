<html>
<head>
<title>Registration page</title>
<link rel="stylesheet" type="text/css" href="register.css" />
</head>
<?php include('server.php'); ?>

<body>
<div class="header">
<h2>Register</h2>
</div>

<form action="register.php" method="post">
<?php include('errors.php'); ?>
<div class="input-group">
<label>User Name</label>
<input type="text" name="username" value="<?php echo $username ;?>">
</div>
<div class="input-group">
<label>Email</label>
<input type="text" name="email" value="<?php echo $email ;?>">
</div>
<div class="input-group">
<label>Password</label>
<input type="password" name="password_1">
</div>
<div class="input-group">
<label>Confirm Password</label>
<input type="password" name="password_2">
</div>
<div class="input-group">
<button type="submit" name="register" class="btn" id="myBtn">Register </button>
</div>
<p>Already a member?<a href="login.php">Sign in</a></p>
</form>


</body>
</html>