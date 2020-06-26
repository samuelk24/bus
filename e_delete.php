<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="cancel.css">
</head>
<body>
	<div>
	<div class="header">
		<div class="logo">
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
	<?php 
		session_start();
			if(isset($_SESSION['deactivated'])){
				echo $_SESSION['deactivated'];
				$_SESSION['deactivated']=NULL;
			}
			else{}
		?>
	<br><br><br><form action="#" method="POST">
		<input type="text" name="e_id"><br><br>
		<input type="submit" name="set" value="Search"><br><br><br><br>
	</form>
	</div>
	<?php

		if(isset($_POST['set'])){
			$db=new mysqli('localhost','root','','bus_management_system') or die("Unable to Connect to Database");
			$e_id=$_POST['e_id'];
			$q="SELECT name, number, email, address, desig, e_id, status from e_login where e_id='$e_id';";
			$result=mysqli_query($db,$q);
			$row2=mysqli_fetch_row($result);
			?>
			<div class="box">
			<table class="table">
				<tr>
					<th>Employee Name</th>
					<th>Number</th>
					<th>Email Address</th>
					<th>Address</th>
					<th>Employee Designation</th>
					<th>Employee Username</th>
					<th>Status of Account</th>
					<th>Deactivate Account</th>
				</tr><br>
				<tr>
					<td><?php echo $row2['0']; ?></td>
					<td><?php echo $row2['1']; ?></td>
					<td><?php echo $row2['2']; ?></td>
					<td><?php echo $row2['3']; ?></td>
					<td><?php echo $row2['4']; ?></td>
					<td><?php echo $row2['5']; ?></td>
					<td><?php echo $row2['6']; ?></td>
										
					<td><form action="deactivate.php" method="POST">
						<input type="hidden" name="e_id" value="<?php echo $row2['5']; ?>">
						<input type="submit" name="set2" value="Deactivate"><br><br><br><br>
						</form></td>


<?php  		
				}
				else{}
				
	?>
</body>
</html>