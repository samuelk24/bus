<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="e_insert_bus.css">
</head>
<body>
	<div class="header2">
		<div class="logo2">
			<img src="image/capture.png">
		</div>
		<ul>
			<li><a href="e_homepage.php">Home</a></li>
			<li><a href="e_manage.php">Manage</a></li>
			<li><a href="e_due.php">Payment Due</a></li>
			<li><a href="e_about.php">About Us</a></li>
			<li><a href="logout.php"> Log Out</a></li>
		</ul>
	</div>
	<div class="loginbox">

		<h1> Employee Registration</h1><br>
		<?php  
session_start();
if(isset($_SESSION['created'])){
	$_SESSION['created']=NULL;
	?>
		<div class="error"><p>Account Created!</p> </div><br>
	<?php
}
$db=new mysqli('localhost','root','','bus_management_system') or die("Unable to Connect to Database");
$username="";
$name="";
$number="";
$address="";
$email="";
if(isset($_POST['submit2'])){
$username=$_POST['username'];
$desig=$_POST['desig'];
$pass1=$_POST['pass1'];
$pass2=$_POST['pass2'];
$name=$_POST['name'];
$number=$_POST['number'];
$address=$_POST['address'];
$email=$_POST['email'];
$username_check=" SELECT * FROM e_login where e_id='$username'";
$result=mysqli_query($db, $username_check);
if($pass2==$pass1){
	$pass1=md5($pass2);
	if (mysqli_num_rows($result)==0) {
		$email_check=" SELECT * FROM e_login where email='$email'";
		$result=mysqli_query($db, $email_check);
		if(mysqli_num_rows($result)==0){
			$insert=" INSERT INTO e_login (name, number, address, e_id, email, pass, desig) VALUES ('$name',$number,'$address','$username','$email','$pass1', '$desig') ";
			mysqli_query($db,$insert);
			$_SESSION['created']="yes"; 
			$_POST['submit2']=Null;
			header('location: e_insert.php');
		}
		else{
			#array_push($errors, "This email has been used to create an account!");?>
			<div class="error"><p>This email has been used to create an account!</p> </div>
			<?php 
		}
	}
	else{
		#array_push($errors,"The Username Already Exists! Choose a different username"); ?>
		<div class="error"><p>The Username Already Exists! Choose a different username</p> </div>
		<?php 
	}
}
else{
	#array_push($errors,"The Passwords entered don't match"); ?>
	<div class="error"><p>The Passwords entered don't match</p> </div>
	<?php 
}
}
?>
<form action="#" method="POST">
	
	Name:<br> <input type="text" name="name" placeholder="Enter Name" required value="<?php echo $name; ?>" ><br>
	
	Mobile Number: <br><input type="tel" name="number" placeholder="Enter Number"  required value="<?php echo $number; ?>"><br>

	Address: <br><input type="text" name="address" placeholder="Enter Address" required value="<?php echo $address; ?>"><br>

	Choose Username: <br><input type="text" name="username" placeholder="Enter Username" required value="<?php echo $username; ?>"><br>
	
	Email: <br><input type="email" name="email" placeholder="Enter Email Address" required value="<?php echo $email; ?>"><br>

	Password: <br><input type="Password" name="pass1" placeholder="Enter Password" required><br> 

	Confirm Password: <br><input type="Password" name="pass2" placeholder="Enter Password Again" required><br>

	Designation: <br><select name="desig">
			<option>Manager</option>
			<option>Counter Employee</option>
		</select><br><br>
	
	<br><input type="submit" name="submit2" value="Register"><br><br>
</form>
</div>
</body>
</html>