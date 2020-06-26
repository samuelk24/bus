<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="registration.css">
</head>
<body>
<?php  
session_start();
$db=new mysqli('localhost','root','','bus_management_system') or die("Unable to Connect to Database");
$username="";
$name="";
$number="";
$address="";
$email="";
if(isset($_POST['submit'])){
$username=$_POST['username'];
$pass1=$_POST['pass1'];
$pass2=$_POST['pass2'];
$name=$_POST['name'];
$number=$_POST['number'];
$address=$_POST['address'];
$email=$_POST['email'];
$username_check=" SELECT * FROM customer2 where customer_id='$username'";
$result=mysqli_query($db, $username_check);
if($pass2==$pass1){
	$pass1=md5($pass2);
	if (mysqli_num_rows($result)==0) {
		$email_check=" SELECT * FROM customer2 where email='$email'";
		$result=mysqli_query($db, $email_check);
		if(mysqli_num_rows($result)==0){
			$insert=" INSERT INTO customer2(name,number,address,customer_id,email,pass) VALUES ('$name',$number,'$address','$username','$email','$pass1'); ";
			$result=mysqli_query($db,$insert);
			echo "Congratulations! Your account has been created!";
			$_SESSION['username']=$username;
			header('location: homepage.php');
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
</body>
</html>

