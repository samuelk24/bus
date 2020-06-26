<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="registration.css">
</head>
<body>

	<div class="loginbox">

		<h1>Registration</h1><br
		<?php include ('login_connection.php'); ?>
<form action="registration.php" method="POST">
	
	Name:<br> <input type="text" name="name" placeholder="Enter Name" required value="<?php echo $name; ?>" ><br>
	
	Mobile Number: <br><input type="tel" name="number" placeholder="Enter Number"  required value="<?php echo $number; ?>"><br>

	Address: <br><input type="text" name="address" placeholder="Enter Address" required value="<?php echo $address; ?>"><br>

	Choose Username: <br><input type="text" name="username" placeholder="Enter Username" required value="<?php echo $username; ?>"><br>
	
	Email: <br><input type="email" name="email" placeholder="Enter Email Address" required value="<?php echo $email; ?>"><br>

	Password: <br><input type="Password" name="pass1" placeholder="Enter Password" required><br> 

	Confirm Password: <br><input type="Password" name="pass2" placeholder="Enter Password Again" required><br>

	<br><input type="Submit" name="submit" value="Register"><br><br>
	<a href="login.php">Already have an account!</a>
</form>
</div>
</body>
</html>