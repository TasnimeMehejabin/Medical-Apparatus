<?php include ('server.php'); ?>
<html>
<head>
<title>Registration page</title>
<link rel="stylesheet" type="text/css" href="register.css" />
</head>
<body>
<div class="header">
<h2>Login</h2>
</div>

<form action="login.php" method="post">
<?php include('errors.php'); ?>
<div class="input-group">
<label>User Name</label>
<input type="text" name="username">
</div>

<div class="input-group">
<label>Password</label>
<input type="password" name="password">
</div>

<div class="input-group">
<button type="submit" name="login" class="btn">Login</button>
</div>
<p>Not yet a member?<a href="register.php">Sign up</a></p>
</form>

</body>
</html>