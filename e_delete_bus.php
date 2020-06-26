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
		<input type="text" name="r_id"><br><br>
		<input type="submit" name="set" value="Search"><br><br><br><br>
	</form>
	<?php

		if(isset($_POST['set'])){
			$db=new mysqli('localhost','root','','bus_management_system') or die("Unable to Connect to Database");
			$r_id=$_POST['r_id'];
			$q="SELECT registration,color,model,coach,route,time from bus where registration='$r_id';";
			$result=mysqli_query($db,$q);
			$row2=mysqli_fetch_row($result);
			?>
			<div class="box">
			<table class="table">
				<tr>
					<th>Bus Registration No.</th>
					<th>Color of Bus</th>
					<th>Model of Bus</th>
					<th>Coach</th>
					<th>Route</th>
					<th>Time of Travel</th>
					<th>Delete Bus</th>
				</tr><br>
				<tr>
					<td><?php echo $row2['0']; ?></td>
					<td><?php echo $row2['1']; ?></td>
					<td><?php echo $row2['2']; ?></td>
					<td><?php echo $row2['3']; ?></td>
					<td><?php echo $row2['4']; ?></td>
					<td><?php echo $row2['5']; ?></td>
										
					<td><form action="e_deactivate_bus.php" method="POST">
						<input type="hidden" name="r_id" value="<?php echo $row2['0']; ?>">
						<input type="submit" name="set2" value="Delete"><br><br><br><br>
						</form></td></tr></table></div>


<?php  		
				}
				else{}
				
	?>
	</div>
</body>
</html>