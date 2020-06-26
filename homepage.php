<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="homepage.css">
</head>
<body>
	<?php 
		session_start();
		if(isset($_SESSION['dontgo'])){
			$_SESSION['dontgo']=NULL;
		}
		if(isset($_SESSION['username'])){}
			else{
				header('location: login.php');
			}
	?>
	<div class="header">
		<div class="logo">
			<img src="image/capture.png">
		</div>
		<ul>
			<li><a href="book.php">Book Ticket</a></li>
			<li><a href="view_tickets.php">Booked Tickets</a></li>
			<li><a href="contact.php">Contact Us</a></li>
			<li><a href="about.php">About Us</a></li>
			<li><a href="logout.php"> Log Out</a></li>
		</ul>
	</div>
	<div class="hell">
		<h1>Welcome to BMS Transport</h1><br>
		<a  href="book.php">Book Ticket</a>
	</div>
</body>
</html>