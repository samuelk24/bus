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
			<li><a href="e_due.php">Payment Due</a></li>
			<li><a href="e_about.php">About Us</a></li>
			<li><a href="logout.php"> Log Out</a></li>
		</ul>
	</div>
	<div class="box2"><br><br>
	<form action="e_swap.php" method="POST">
		<h3>Swap Employees:</h3><br>
		<input type="submit" name="submit" value="Enter">
		<br><br><br><br>
	</form>
	<form action="e_insert.php" method="POST">
		<h3>Enter Employee:</h3><br>
		<input type="submit" name="submit" value="Enter"><br><br><br><br>
	</form>
	<form action="e_delete.php" method="POST">
		<h3>Delete Employee:</h3><br>
		<input type="submit" name="submit" value="Enter"><br><br><br><br>
	</form>
	<form action="e_insert_bus.php" method="POST">
		<h3>Enter New Bus:</h3><br>
		<input type="submit" name="submit" value="Enter"><br><br><br><br>
	</form>
	<form action="e_swap_bus.php" method="POST">
		<h3>Manage Bus:</h3><br>
		<input type="submit" name="submit" value="Enter"><br><br><br><br>
	</form>
	<form action="e_delete_bus.php" method="POST">
		<h3>Delete Bus:</h3><br>
		<input type="submit" name="submit" value="Enter"><br><br><br><br>
	</form>
	</div>
</body>
</html>