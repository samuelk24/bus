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
			<li><a href="homepage.php">Home</a></li>
			<li><a href="book.php">Book Ticket</a></li>
			<li><a href="contact.php">Contact Us</a></li>
			<li><a href="about.php">About Us</a></li>
			<li><a href="logout.php"> Log Out</a></li>
		</ul>
	</div>
	<div class="box">
		<table class="table">
			<tr>
				<th>Name</th>
				<th>Number</th>
				<th>Username</th>
				<th>Ticket No.</th>
				<th>Number of Seats</th>
				<th>Seats Booked</th>
				<th>Payment</th>
				<th>Date of Travel</th>
				<th>Departure Time</th>
				<th>Destination</th>
				<th>Coach</th>
				<th>Bus Registration</th>
				<th>View Ticket</th>
				<th>Cancel Ticket</th>
			</tr><br>
		<?php  
		session_start();
		if(isset($_SESSION['username'])){
			date_default_timezone_set("Asia/Dhaka");
			$db=new mysqli('localhost','root','','bus_management_system') or die("Unable to Connect to Database");	
			$un=$_SESSION['username'];
			$query=" SELECT customer2.name,customer2.number,customer2.address,customer2.customer_id,ticket.ticket_no,ticket.no_seats,ticket.seats,ticket.payment,all_together.date,all_together.time,all_together.coach,all_together.dest,all_together.id,all_together.registration_fk from (customer2 INNER JOIN ticket on customer2.customer_id=ticket.customer_id_fk) INNER JOIN all_together on all_together.id=ticket.all_together_id where ticket.customer_id_fk='$un';";
			$result=mysqli_query($db,$query);
			if($result->num_rows > 0){
				while($row = $result->fetch_assoc()){
					?>
					<tr>
						<td><?php echo $row['name']; ?></td>
						<td><?php echo $row['number']; ?></td>
						<td><?php echo $row['customer_id']; ?></td>
						<td><?php echo $row['ticket_no']; ?></td>
						<td><?php echo $row['no_seats']; ?></td>
						<td><?php echo $row['seats']; ?></td>
						<td><?php echo $row['payment']; ?></td>
						<td><?php echo $row['date']; ?></td>
						<td><?php echo $row['time']; ?></td>
						<td><?php echo $row['dest']; ?></td>
						<td><?php echo $row['coach']; ?></td>
						<td><?php echo $row['registration_fk']; ?></td>
						<td><form action="print.php" method="POST">
							<input type="hidden" name="ticket_no" value="<?php echo $row['ticket_no'] ?>">
							<input type="submit" name="submit" value="View">
							</form>
						</td>
						<td><?php 	$date = $row['date'];
									$date = explode('-', $date);
									$month = $date[1];
									$day   = $date[2];
									$year  = $date[0];
									$today=date("Y-m-d");
									$today = explode('-', $today);
									$nmonth = $today[1];
									$nday   = $today[2];
									$nyear  = $today[0];
									$ntime=date("h:i:s:a");
									$time=$row['time'];
									$time=explode(":", $time);
									$min=explode(' ', $time[1]);
									$format=$min[1];
									$hour=$time[0];
									$ntime=explode(":",$ntime);
									$nhour=$ntime[0];
									$nformat=$ntime[3];
									if($format=="PM"){
										$hour=$hour+11;
									}
									if($nformat=="PM"){
										if($nhour==12){}
											else{$nhour=$nhour+11;}
									}
									if($nformat=="AM"){
										if($nhour==12){$nhour=0;}
											else{}
									}
									$diff=$hour-$nhour;
									if($year>$nyear){
									?>
									<form action="cancel.php" method="POST">
										<input type="hidden" name="id" value="<?php echo $row['id'] ?>">
										<input type="hidden" name="policy" value="yes">
							<input type="hidden" name="ticket_no" value="<?php echo $row['ticket_no'] ?>">
							<input type="submit" name="submit" value="Cancel">
						</form><?php }
						else{
							if($year==$nyear){
								if($month>$nmonth){ ?>
									<form action="cancel.php" method="POST">
										<input type="hidden" name="id" value="<?php echo $row['id'] ?>">
										<input type="hidden" name="policy" value="yes">
										<input type="hidden" name="ticket_no" value="<?php echo $row['ticket_no'] ?>">
										<input type="submit" name="submit" value="Cancel">
									</form>		<?php 
								}
								else{
									if($month==$nmonth){
										if ($day>$nday) {?>
											<form action="cancel.php" method="POST">
												<input type="hidden" name="id" value="<?php echo $row['id'] ?>">
												<input type="hidden" name="policy" value="yes">
												<input type="hidden" name="ticket_no" value="<?php echo $row['ticket_no'] ?>">
												<input type="submit" name="submit" value="Cancel">
											</form>			<?php 
										}
										else{
											if($day==$nday){
												if($diff>6){
													?>
											<form action="cancel.php" method="POST">
												<input type="hidden" name="id" value="<?php echo $row['id'] ?>">
												<input type="hidden" name="policy" value="yes">
												<input type="hidden" name="ticket_no" value="<?php echo $row['ticket_no'] ?>">
												<input type="submit" name="submit" value="Cancel">
											</form>			<?php
												}
												else{
													if($diff<6 && $diff>2){
														?>
											<form action="cancel.php" method="POST">
												<input type="hidden" name="id" value="<?php echo $row['id'] ?>">
												<input type="hidden" name="policy" value="no">
												<input type="hidden" name="ticket_no" value="<?php echo $row['ticket_no'] ?>">
												<input type="submit" name="submit" value="Cancel">
											</form>			<?php
													}
												}
											}
											else{}
										}
									}
								else{}
								}
							}
							else{}
					} ?></td>
					</tr>
					<?php
				}
			}

		}
		else{
			header('location: login.php');
		}
		?>
		
	</table>
	</div>
</body>
</html>