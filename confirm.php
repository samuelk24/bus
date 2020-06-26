<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="confirm.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
	<div class="header">
		<div class="logo">
				<img src="image/capture.png">
		</div>
		<ul>
				<?php
				session_start();
				$un=$_SESSION['username'];
				$db=new mysqli('localhost','root','','bus_management_system') or die("Unable to Connect to Database");  
				$query=" SELECT * FROM customer2 where customer_id='$un'";
				$result=mysqli_query($db, $query);
				if(mysqli_num_rows($result)==1){
					?>
					<li><a href="homepage.php">Home</a></li>
					<li><a href="view_tickets.php">Booked Tickets</a></li>
					<li><a href="about.php">About Us</a></li>
					<li><a href="contact.php">Contact Us</a></li>
					<?php
				}
				else{
					?>
					<li><a href="ce_homepage.php">Home</a></li>
					<li><a href="e_view_tickets.php">Booked Tickets</a></li>
					<li><a href="e_about.php">About Us</a></li>
					<?php 
				}
				?>
				<li><a href="logout.php"> Log Out</a></li>
		</ul>
		<?php
		$db=new mysqli('localhost','root','','bus_management_system') or die("Unable to Connect to Database");
		$un=$_SESSION['username'];
		function check($un,$db){
			$query=" SELECT * FROM customer2 where customer_id='$un'";
			$result=mysqli_query($db, $query);
			if(mysqli_num_rows($result)==1){
				return true;
			}
			else{
				return false;
			}
		}
	if(isset($_SESSION['count'])){
			
			if(isset($_SESSION['dontgo'])){
				if(check($un,$db)==true){header('location: homepage.php');}
				else{header('location: ce_homepage.php');}
			}
			else{
				if(isset($_SESSION['username'])){
				$dest=$_SESSION['dest'];
				$time=$_SESSION['time'];
				$date=$_SESSION['date'];
				$coach=$_SESSION['coach'];
				$fare=$_SESSION['fare'];
				function update($id,$dest,$date,$time,$un,$coach,$db){
					$sql="Update all_together set $id='$un' where date='$date' and time='$time' and coach='$coach' and dest='$dest'; ";
         			mysqli_query($db,$sql);
         		
				}
				$A1=$_SESSION['A1'];
				$A2=$_SESSION['A2'];
				$A3=$_SESSION['A3'];
				$A4=$_SESSION['A4'];
				$B1=$_SESSION['B1'];
				$B2=$_SESSION['B2'];
				$B3=$_SESSION['B3'];
				$B4=$_SESSION['B4'];
				$C1=$_SESSION['C1'];
				$C2=$_SESSION['C2'];
				$C3=$_SESSION['C3'];
				$C4=$_SESSION['C4'];
				$D1=$_SESSION['D1'];
				$D2=$_SESSION['D2'];
				$D3=$_SESSION['D3'];
				$D4=$_SESSION['D4'];
				$E1=$_SESSION['E1'];
				$E2=$_SESSION['E2'];
				$E3=$_SESSION['E3'];
				$E4=$_SESSION['E4'];
				$F1=$_SESSION['F1'];
				$F2=$_SESSION['F2'];
				$F3=$_SESSION['F3'];
				$F4=$_SESSION['F4'];
				$G1=$_SESSION['G1'];
				$G2=$_SESSION['G2'];
				$G3=$_SESSION['G3'];
				$G4=$_SESSION['G4'];
				$H1=$_SESSION['H1'];
				$H2=$_SESSION['H2'];
				$H3=$_SESSION['H3'];
				$H4=$_SESSION['H4'];
				if($A1==1){
					update("A1",$dest,$date,$time,$un,$coach,$db);
				}
				if ($A2==1) {
					update("A2",$dest,$date,$time,$un,$coach,$db);	
				}
				if($A3==1){
					update("A3",$dest,$date,$time,$un,$coach,$db);
				}
				if ($A4==1) {
					update("A4",$dest,$date,$time,$un,$coach,$db);
				}
				if($B1==1){
					update("B1",$dest,$date,$time,$un,$coach,$db);
				}
				if ($B2==1) {
					update("B2",$dest,$date,$time,$un,$coach,$db);	
				}
				if($B3==1){
					update("B3",$dest,$date,$time,$un,$coach,$db);
				}
				if ($B4==1) {
					update("B4",$dest,$date,$time,$un,$coach,$db);	
				}
				if($C1==1){
					update("C1",$dest,$date,$time,$un,$coach,$db);
				}
				if ($C2==1) {
					update("C2",$dest,$date,$time,$un,$coach,$db);	
				}
				if($C3==1){
					update("C3",$dest,$date,$time,$un,$coach,$db);
				}
				if ($C4==1) {
					update("C4",$dest,$date,$time,$un,$coach,$db);	
				}
				if($D1==1){
					update("D1",$dest,$date,$time,$un,$coach,$db);
				}
				if ($D2==1) {
					update("D2",$dest,$date,$time,$un,$coach,$db);
				}
				if($D3==1){
					update("D3",$dest,$date,$time,$un,$coach,$db);
				}
				if ($D4==1) {
					update("D4",$dest,$date,$time,$un,$coach,$db);
				}
				if($E1==1){
					update("E1",$dest,$date,$time,$un,$coach,$db);
				}
				if ($E2==1) {
					update("E2",$dest,$date,$time,$un,$coach,$db);
				}
				if($E3==1){
					update("E3",$dest,$date,$time,$un,$coach,$db);
				}
				if ($E4==1) {
					update("E4",$dest,$date,$time,$un,$coach,$db);
				}
				if($F1==1){
					update("F1",$dest,$date,$time,$un,$coach,$db);
				}
				if ($F2==1) {
					update("F2",$dest,$date,$time,$un,$coach,$db);
				}
				if($F3==1){
					update("F3",$dest,$date,$time,$un,$coach,$db);
				}
				if ($F4==1) {
					update("F4",$dest,$date,$time,$un,$coach,$db);
				}
				if($G1==1){
					update("G1",$dest,$date,$time,$un,$coach,$db);
				}
				if ($G2==1) {
					update("G2",$dest,$date,$time,$un,$coach,$db);
				}
				if($G3==1){
					update("G3",$dest,$date,$time,$un,$coach,$db);
				}
				if ($G4==1) {
					update("G4",$dest,$date,$time,$un,$coach,$db);
				}
				if($H1==1){
					update("H1",$dest,$date,$time,$un,$coach,$db);
				}
				if ($H2==1) {
					update("H2",$dest,$date,$time,$un,$coach,$db);
				}
				if($H3==1){
					update("H3",$dest,$date,$time,$un,$coach,$db);
				}
				if ($H4==1) {
					update("H4",$dest,$date,$time,$un,$coach,$db);
				}
				
			}
			else{
				if(check($un,$db)==true){header('location: login.php');}
				else{header('location: e_login.php');}	
			}
		if(check($un,$db)==true){?>
		<script src="confirm.js"></script><?php }
				else{}
		}
}
	else{
			?>
			<script>alert("You must select a seat")</script>
			<?php 
			header('location: book.php');
		}
		?>
		<div class="box">
			<?php if(check($un,$db)==true){
				?>
				<h4>Please pay for your tickets through bKash to our Merchant Account Number given below within next 5 minutes and click Confirm Payment</h3><br><br><br>
				<h4 style="color:yellow;">	*don't close this page until payment is complete!</h4><br><br><br>
				<div>
			<table class="table">
				<tr>
					<th>Merchant No.</th>
					<th>Amount Due</th>
				</tr>
				<tr>
					<td>01821123451</td>
					<td><?php echo "$fare"; ?></td>
				</tr>
			</table><br><br><br>
			</div>
			<h4>Enter Your Personal Bkash No.</h4><br>
			<form action="ticket.php" method="POST">
				<input type="number" name="number" required>
				<input type="submit" name="submit" value="Confirm Payment">
			</form><?php
		}
				else{?>
					<form action="e_ticket.php" method="POST">
						<h3>Customer Name:</h3><br>
						<input type="text" name="name" required>
						<h3>Customer Number:</h3><br>
						<input type="text" name="number" required>
					<input type="submit" name="submit" value="Confirm Payment">
			</form><?php
		} ?>
			
		</div>
	</div>
	
</body>
</html>