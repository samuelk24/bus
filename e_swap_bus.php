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
			<li><a href="e_due.php">Payment Due</a></li>
			<li><a href="e_about.php">About Us</a></li>
			<li><a href="logout.php"> Log Out</a></li>
		</ul>
	</div><br><br><br>
	<div class="box">
		<table class="table">
			<tr>
				<th>Bus Registration No.</th>
				<th>Color</th>
				<th>Bus Model</th>
				<th>Route Travelled</th>
				<th>Time of Travel</th>
				<th>Coach Type</th>
				<th>Change Route</th>
			</tr><br>
			<?php  
		session_start();
		if(isset($_SESSION['username'])){
			date_default_timezone_set("Asia/Dhaka");
			$db=new mysqli('localhost','root','','bus_management_system') or die("Unable to Connect to Database");	
			$q="SELECT * from bus;";
			$result=mysqli_query($db,$q);
			if($result->num_rows > 0){
				while($row = $result->fetch_assoc()){
					?>
					<tr>
						<td><?php echo $row['registration']; ?></td>
						<td><?php echo $row['color']; ?></td>
						<td><?php echo $row['model']; ?></td>
						<td><?php echo $row['route']; ?></td>
						<td><?php echo $row['time']; ?></td>
						<td><?php echo $row['coach']; ?></td>
						<td><form action="e_change_busroute.php" method="POST">
							<input type="hidden" name="coach" value="<?php echo $row['coach']; ?>">
							<input type="hidden" name="r_id" value="<?php echo $row['registration']; ?>">
							<input type="submit" name="submit" value="Change">
						</form></td></tr>
			<?php  }}}?>
</table>
</div>
</body>
</html>