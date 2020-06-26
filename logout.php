<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		session_start();
		session_destroy();
		$db=new mysqli('localhost','root','','bus_management_system') or die("Unable to Connect to Database");
		$un=$_SESSION['username'];
		$query=" SELECT * FROM customer2 where customer_id='$un'";
				$result=mysqli_query($db, $query);
				if(mysqli_num_rows($result)==1){
					header('location: login.php');
				}
				else{
					header('location: e_login.php');
				}		
	?>
</body>
</html>