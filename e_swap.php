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
				<th>Counter Name</th>
				<th>Counter Location</th>
				<th>Counter Id</th>
				<th>Counter Employee</th>
				<th>&nbsp;&nbsp;&nbsp;&nbsp;Swap&nbsp;&nbsp;&nbsp;&nbsp;</th>
				</tr><br>
			<?php  
		session_start();
		if(isset($_SESSION['username'])){
			$db=new mysqli('localhost','root','','bus_management_system') or die("Unable to Connect to Database");	
			$q="SELECT * from counter;";
			$result=mysqli_query($db,$q);
			if($result->num_rows > 0){
				while($row = $result->fetch_assoc()){
					?>
					<tr>
						<td><?php echo $row['name']; ?></td>
						<td><?php echo $row['location']; ?></td>
						<td><?php echo $row['c_id']; ?></td>
						<td><?php echo $row['e_id_fk']; ?></td>
						<td><form action="#" method="POST">
							<input type="hidden" name="c_id" value="<?php echo $row['c_id']; ?>">
							<input type="hidden" name="e_id" value="<?php echo $row['e_id_fk']; ?>">
							<input type="submit" name="submit2" value="Swap">
						</form></td></tr>
			<?php  }}}?>
</table>
		<?php
		if(isset($_POST['submit2'])){
			?>
			<br><br><h3>...............SWAP WITH...............</h3><br><br>
			<table class="table">
			<tr>
				<th>Employee Name</th>
				<th>Employee Address</th>
				<th>Employee Username</th>
				<th>Designation</th>
				<th>&nbsp;&nbsp;&nbsp;&nbsp;Swap&nbsp;&nbsp;&nbsp;&nbsp;</th>
				</tr><br>
				<?php 
			$c_id=$_POST['c_id'];
			$e_id=$_POST['e_id'];
			$q="SELECT * from e_login where desig='Counter Employee'";
			$result=mysqli_query($db,$q);
			if($result->num_rows > 0){
				while($row = $result->fetch_assoc()){
					if($row['status']=="active"){
					?>
				<tr>
						<td><?php echo $row['name']; ?></td>
						<td><?php echo $row['address']; ?></td>
						<td><?php echo $row['e_id']; ?></td>
						<td><?php echo $row['desig']; ?></td>
						<td><form action="ee_swap.php" method="POST">
							<input type="hidden" name="ne_id" value="<?php echo $e_id; ?>">
							<input type="hidden" name="c_id" value="<?php echo $c_id; ?>">
							<input type="hidden" name="e_id" value="<?php echo $row['e_id']; ?>">
							<input type="submit" name="submit3" value="Swap">
						</form></td></tr><?php 
		} }}}
		else{}
		?>
	</table>
</div>
</body>
</html>