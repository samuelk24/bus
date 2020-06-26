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
			<li><a href="ce_homepage.php">Home</a></li>
			<li><a href="book.php">Book Ticket</a></li>
			<li><a href="e_about.php">About Us</a></li>
			<li><a href="logout.php"> Log Out</a></li>
		</ul>
	</div><br><br><br><br><br><br>
	<div>
	<form action="#" method="POST">
		<input type="text" name="ticket_no"><br><br>
		<input type="submit" name="set" value="Search">
	</form>
	</div><br><br><br><br>
	<?php 
	session_start();
		if(isset($_SESSION['username'])){
			date_default_timezone_set("Asia/Dhaka");
			$db=new mysqli('localhost','root','','bus_management_system') or die("Unable to Connect to Database");	
			$un=$_SESSION['username'];
			if(isset($_POST['set'])){
				$ticket_no=$_POST['ticket_no'];
				$quey="SELECT employee FROM ticket where ticket_no='$ticket_no';";
				$result=mysqli_query($db,$quey);
				$row2=mysqli_fetch_row($result);
				$employee=$row2[0];
				$delete="no";
				if($employee=="no"){
					$query=" SELECT customer2.name,customer2.number,customer2.address,customer2.customer_id,ticket.ticket_no,ticket.no_seats,ticket.seats,ticket.payment,all_together.date,all_together.time,all_together.coach,all_together.dest,all_together.id from (customer2 INNER JOIN ticket on customer2.customer_id=ticket.customer_id_fk) INNER JOIN all_together on all_together.id=ticket.all_together_id where ticket.ticket_no='$ticket_no';";
					$result=mysqli_query($db,$query);
					$row2=mysqli_fetch_row($result);
				}
				else{
					if($employee==$un){
						$delete="yes";
						$query=" SELECT off_customer.name,off_customer.number,ticket.ticket_no,ticket.no_seats,ticket.seats,ticket.payment,all_together.date,all_together.time,all_together.coach,all_together.dest,ticket.employee,all_together.id from (off_customer JOIN e_login on off_customer.e_id_fk=e_login.e_id) JOIN (ticket JOIN all_together on all_together.id=ticket.all_together_id) on ticket.employee=e_login.e_id where ticket.ticket_no='$ticket_no';";
						$result=mysqli_query($db,$query);
						$row2=mysqli_fetch_row($result);;
					}
					else{
						$delete="yesno";
						$query=" SELECT off_customer.name,off_customer.number,ticket.ticket_no,ticket.no_seats,ticket.seats,ticket.payment,all_together.date,all_together.time,all_together.coach,all_together.dest,ticket.employee,all_together.id from ticket,all_together,off_customer,e_login where all_together.id=ticket.all_together_id and off_customer.e_id_fk=e_login.e_id and ticket.employee=e_login.e_id and ticket.ticket_no='$ticket_no';";
						$result=mysqli_query($db,$query);
						$row2=mysqli_fetch_row($result);
					}
				}
				if($delete=="no"){
				?>
			<div class="box">
			<table class="table">
				<tr>
					<th>Name</th>
					<th>Number</th>
					<th>Address</th>
					<th>Username</th>
					<th>Ticket No.</th>
					<th>Number of Seats</th>
					<th>Seats Booked</th>
					<th>Payment</th>
					<th>Date of Travel</th>
					<th>Departure Time</th>
					<th>Coach</th>
					<th>Destination</th>					
					<th>View Ticket</th>
				</tr><br>
				<tr>
					<td><?php echo $row2['0']; ?></td>
					<td><?php echo $row2['1']; ?></td>
					<td><?php echo $row2['2']; ?></td>
					<td><?php echo $row2['3']; ?></td>
					<td><?php echo $row2['4']; ?></td>
					<td><?php echo $row2['5']; ?></td>
					<td><?php echo $row2['6']; ?></td>
					<td><?php echo $row2['7']; ?></td>
					<td><?php echo $row2['8']; ?></td>
					<td><?php echo $row2['9']; ?></td>
					<td><?php echo $row2['10']; ?></td>
					<td><?php echo $row2['11']; ?></td>					
					<td><form action="print.php" method="POST">
							<input type="hidden" name="ticket_no" value="<?php echo $row2['4'] ?>">
							<input type="submit" name="submit" value="View">
							</form>
						</td>
				</tr>
		<?php 
	}
		else{
			if($delete=="yesno"){
				?>
			<div class="box">
			<table class="table">
				<tr>
					<th>Name</th>
					<th>Number</th>
					<th>Ticket No.</th>
					<th>Number of Seats</th>
					<th>Seats Booked</th>
					<th>Payment</th>
					<th>Date of Travel</th>
					<th>Departure Time</th>
					<th>Coach</th>
					<th>Destination</th>
					<th>Booked By</th>					
					<th>View Ticket</th>
				</tr><br>
				<tr>
					<td><?php echo $row2['0']; ?></td>
					<td><?php echo $row2['1']; ?></td>
					<td><?php echo $row2['2']; ?></td>
					<td><?php echo $row2['3']; ?></td>
					<td><?php echo $row2['4']; ?></td>
					<td><?php echo $row2['5']; ?></td>
					<td><?php echo $row2['6']; ?></td>
					<td><?php echo $row2['7']; ?></td>
					<td><?php echo $row2['8']; ?></td>
					<td><?php echo $row2['9']; ?></td>
					<td><?php echo $row2['10']; ?></td>				
					<td><form action="e_print.php" method="POST">
						<input type="hidden" name="t" value="yesno">
							<input type="hidden" name="ticket_no" value="<?php echo $row2['2'] ?>">
							<input type="submit" name="submit" value="View">
							</form></td>
				</tr>
		<?php 
			}
			else{
				?>
			<div class="box">
			<table class="table">
				<tr>
					<th>Name</th>
					<th>Number</th>
					<th>Ticket No.</th>
					<th>Number of Seats</th>
					<th>Seats Booked</th>
					<th>Payment</th>
					<th>Date of Travel</th>
					<th>Departure Time</th>
					<th>Coach</th>
					<th>Destination</th>
					<th>Booked By</th>					
					<th>View Ticket</th>
					<th>Cancel Ticket</th>
				</tr><br>
				<tr>
					<td><?php echo $row2['0']; ?></td>
					<td><?php echo $row2['1']; ?></td>
					<td><?php echo $row2['2']; ?></td>
					<td><?php echo $row2['3']; ?></td>
					<td><?php echo $row2['4']; ?></td>
					<td><?php echo $row2['5']; ?></td>
					<td><?php echo $row2['6']; ?></td>
					<td><?php echo $row2['7']; ?></td>
					<td><?php echo $row2['8']; ?></td>
					<td><?php echo $row2['9']; ?></td>
					<td><?php echo $row2['10']; ?></td>				
					<td><form action="e_print.php" method="POST">
						<input type="hidden" name="t" value="no">
							<input type="hidden" name="ticket_no" value="<?php echo $row2['2'] ?>">
							<input type="submit" name="submit" value="View">
							</form></th>
					<td><?php 	$date = $row2['6'];
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
									$time=$row2['7'];
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
										<input type="hidden" name="id" value="<?php echo $row['11'] ?>">
										<input type="hidden" name="policy" value="yes">
							<input type="hidden" name="ticket_no" value="<?php echo $row['2'] ?>">
							<input type="submit" name="submit" value="Cancel">
						</form><?php }
						else{
							if($year==$nyear){
								if($month>$nmonth){ ?>
									<form action="cancel.php" method="POST">
										<input type="hidden" name="id" value="<?php echo $row2['11'] ?>">
										<input type="hidden" name="policy" value="yes">
										<input type="hidden" name="ticket_no" value="<?php echo $row2['2'] ?>">
										<input type="submit" name="submit" value="Cancel">
									</form>		<?php 
								}
								else{
									if($month==$nmonth){
										if ($day>$nday) {?>
											<form action="cancel.php" method="POST">
												<input type="hidden" name="id" value="<?php echo $row2['11'] ?>">
												<input type="hidden" name="policy" value="yes">
												<input type="hidden" name="ticket_no" value="<?php echo $row2['2'] ?>">
												<input type="submit" name="submit" value="Cancel">
											</form>			<?php 
										}
										else{
											if($day==$nday){
												if($diff>6){
													?>
											<form action="cancel.php" method="POST">
												<input type="hidden" name="id" value="<?php echo $row2['11'] ?>">
												<input type="hidden" name="policy" value="yes">
												<input type="hidden" name="ticket_no" value="<?php echo $row2['2'] ?>">
												<input type="submit" name="submit" value="Cancel">
											</form>			<?php
												}
												else{
													if($diff<6 && $diff>2){
														?>
											<form action="cancel.php" method="POST">
												<input type="hidden" name="id" value="<?php echo $row2['11'] ?>">
												<input type="hidden" name="policy" value="no">
												<input type="hidden" name="ticket_no" value="<?php echo $row2['2'] ?>">
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
			}
		else{
			header('location: login.php');
		}
		?>
		
	</table>
	</div>
</body>
</html>