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
			$t=$_POST['t'];
				$query=" SELECT off_customer.name,off_customer.number,ticket.ticket_no,ticket.no_seats,ticket.seats,ticket.payment,all_together.date,all_together.time,all_together.coach,all_together.dest,ticket.employee,all_together.id,all_together.registration_fk from ticket,all_together,off_customer,e_login where all_together.id=ticket.all_together_id and off_customer.e_id_fk=e_login.e_id and ticket.employee=e_login.e_id and ticket.ticket_no='$ticket_no';";
						$result=mysqli_query($db,$query);
						$row2=mysqli_fetch_row($result);
						?>
						<span>Customer Name: </span><?php echo $row2[0] ;?><br><br>
						<span>Customer Number: </span><?php echo $row2[1] ;?><br><br>
						<span>Ticket No: </span><?php echo $row2[2] ;?><br><br>
						<span>Number of Seats: </span><?php echo $row2[3] ;?><br><br>
						<span>Seats Booked: </span><?php echo $row2[4] ;?><br><br>
						<span>Payment: </span><?php echo $row2[5] ;?><br><br>
						<span>Date of Travel: </span><?php echo $row2[6] ;?><br><br>
						<span>Departure Time: </span><?php echo $row2[7] ;?><br><br>
						<span>Coach Type: </span><?php echo $row2[8] ;?><br><br>
						<span>Destination: </span><?php echo $row2[9] ;?><br><br>
						<span>Booked By: </span><?php echo $row2[10] ;?><br><br>
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