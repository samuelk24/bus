<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="cancel.css">
</head>
<body>
<div class="header">
		<div class="logo">
			<img src="image/capture.png">
		</div>
		<ul>
			<li><a href="e_homepage.php">Home</a></li>
			<li><a href="e_manage.php">Manage</a></li>
			<li><a href="e_about.php">About Us</a></li>
			<li><a href="logout.php"> Log Out</a></li>
		</ul>
	</div>
	<?php
	session_start();
		 	if(isset($_POST['set'])){
		 		$db=new mysqli('localhost','root','','bus_management_system') or die("Unable to Connect to Database");
		 		$due_id=$_POST['due_id'];
		 		$q="UPDATE due set status='paid' where due_id=$due_id;";
		 		mysqli_query($db,$q);
		 	}
		?>
	<div class="box"><br><br>
		<table class="table">
			<tr>
				<th>Username</th>
				<th>Bkash Number</th>
				<th>Amount</th>
				<th>Status</th>
				<th>Clear Payment</th>
			</tr><br>
			<?php  
		if(isset($_SESSION['username'])){
			date_default_timezone_set("Asia/Dhaka");
			$db=new mysqli('localhost','root','','bus_management_system') or die("Unable to Connect to Database");	
			$un=$_SESSION['username'];
			$query=" SELECT * from due;";
			$result=mysqli_query($db,$query);
			if($result->num_rows > 0){
				while($row = $result->fetch_assoc()){
					?>
					<tr>
						<td><?php echo $row['customer_id_fk']; ?></td>
						<td><?php echo $row['number']; ?></td>
						<td><?php echo $row['Amount']; ?></td>
						<td><?php echo $row['status'] ?></td>
						<?php if($row['status']=="paid"){}
							else{
						?>
						<td><form action="#" method="POST">
							<input type="hidden" name="due_id" value="<?php echo $row['due_id'] ?>">
							<input type="submit" name="set" value="Pay">
							</form>
						</td><?php } ?>
					</tr>
					<?php
				}
			}

		}
		else{
			header('location: login.php');
		}
		?>
</body>
</html>