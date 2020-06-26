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
	</div><br><br><br>
<div class="loginbox">
<br><br><br><br><br><br>
		<h1>Bus Entry</h1><br>
		<?php  
session_start();
if(isset($_SESSION['created'])){
	$_SESSION['created']=NULL;
	?>
		<div class="error"><p>Bus Entry Successful!</p> </div><br>
	<?php
}
$db=new mysqli('localhost','root','','bus_management_system') or die("Unable to Connect to Database");
$r_id="";
$color="";
$model="";
if(isset($_POST['submit2'])){
$r_id=$_POST['r_id'];
$coach=$_POST['coach'];
$color=$_POST['color'];
$model=$_POST['model'];
$username_check=" SELECT * FROM bus where registration='$r_id'";
$result=mysqli_query($db, $username_check);
	if (mysqli_num_rows($result)==0) {
			$insert=" INSERT INTO bus (registration, color, model,coach) VALUES ('$r_id','$color','$model','$coach') ";
			mysqli_query($db,$insert);
			$_SESSION['created']="yes"; 
			$_POST['submit2']=Null;
			header('location: e_insert_bus.php');
	}
	else{
		#array_push($errors,"The Username Already Exists! Choose a different username"); ?>
		<div class="error"><p>The Bus Already Exists!</p> </div><br><br><br>
		<?php 
	}
}
?>
<form action="#" method="POST">
	
	Bus Registration Number:<br> <input type="text" name="r_id" placeholder="Enter Bus Registration Number" required value="<?php echo $r_id; ?>" ><br>

	Color: <br><input type="text" name="color" placeholder="Enter Address" required value="<?php echo $color; ?>"><br>
	
	Model: <br><input type="text" name="model" placeholder="Enter Model" required value="<?php echo $model; ?>"><br>
	Choose Coach: <br>
		<select name="coach">
			<option>AC</option>
			<option>NON-AC</option>
		</select><br><br>
	<br><input type="submit" name="submit2" value="Register"><br><br>
</form>
</div>
</body>
</html>