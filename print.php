<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="cancel.css">
</head>
<body>
	<?php 
	session_start();
	if(isset($_SESSION['username'])){
		if(isset($_POST['submit'])){
			$db=new mysqli('localhost','root','','bus_management_system') or die("Unable to Connect to Database");	
			$un=$_SESSION['username'];
			$ticket_no=$_POST['ticket_no'];
			$query=" SELECT customer2.name,customer2.number,customer2.address,customer2.customer_id,ticket.ticket_no,ticket.no_seats,ticket.seats,ticket.payment,all_together.date,all_together.time,all_together.coach,all_together.dest, all_together.registration_fk from (customer2 INNER JOIN ticket on customer2.customer_id=ticket.customer_id_fk) INNER JOIN all_together on all_together.id=ticket.all_together_id where ticket_no='$ticket_no';";
			$res=mysqli_query($db,$query);
			$row2=mysqli_fetch_row($res);?>
			<span>Customer Name: </span><?php echo $row2[0] ;?><br><br>
			<span>Customer Number: </span><?php echo $row2[1] ;?><br><br>
			<span>Customer Address: </span><?php echo $row2[2] ;?><br><br>
			<span>Customer Username: </span><?php echo $row2[3] ;?><br><br>
			<span>Ticket No: </span><?php echo $row2[4] ;?><br><br>
			<span>Number of Seats: </span><?php echo $row2[5] ;?><br><br>
			<span>Seats: </span><?php echo $row2[6] ;?><br><br>
			<span>Payment: </span><?php echo $row2[7] ;?><br><br>
			<span>Date of Travel: </span><?php echo $row2[8] ;?><br><br>
			<span>Departure Time: </span><?php echo $row2[9] ;?><br><br>
			<span>Coach Type: </span><?php echo $row2[10] ;?><br><br>
			<span>Destination: </span><?php echo $row2[11] ;?> <br><br>
			<span>Bus Registration No.: </span><?php echo $row2[12] ;?><?php
		}
		else{
			header('location: view_tickets.php');	
		}
	}
	else{
		header('location: login.php');
	}
	
	 ?>
</body>
</html>