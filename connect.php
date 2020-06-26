<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
<?php
	$username="";
	session_start();
	$db=new mysqli('localhost','root','','bus_management_system') or die("Unable to Connect to Database");
	if(isset($_SESSION['username'])){
	header('location: homepage.php');	
	}
else{
	if (isset($_POST['submit'])) {
		$username=$_POST['username'];
		$pass=md5($_POST['pass']);	
		$query=" SELECT * FROM customer2 where customer_id='$username'";
		$result=mysqli_query($db, $query);
		if(mysqli_num_rows($result)==1){
			$query=" SELECT * FROM customer2 where customer_id='$username' AND pass='$pass'";
			$result=mysqli_query($db, $query);
			if(mysqli_num_rows($result)==1){ 
				/*echo "Welcome $username !";*/ 
				$_SESSION['username']=$username;
				?>
				<div class="error"><p>Welcome $username !</p></div><br><br>
			<?php 	
				header('Location: homepage.php');
			}
			else{
				#echo "Password Incorrect!";?>
				<div class="error"><p>Password Incorrect!</p></div><br><br>
				<?php 
			}
		}	
		else{
			#echo "This username does not exist!"; ?>
			<div class="error"><p>This username does not exist!</p></div><br><br>
			<?php 
		}
	}
}
?>

</body>
</html>