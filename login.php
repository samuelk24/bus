<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
<div class="loginbox">
	<h1>Login</h1><br><br>
	<?php include 'connect.php'; ?>	
	<form action="login.php" method="POST">	
		Username:<br><input type="text" name="username"  placeholder="Enter Username" required value="<?php echo $username; ?>"><br>
		Password:<br><input type="Password" name="pass" placeholder="Enter Password"  required>
		<br><br>
		<input type="submit" name="submit" value="Login">
	</form><br>

	<a href="registration.php">Already a User? </a>
</div>
</body>
</html>