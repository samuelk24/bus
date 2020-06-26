<!DOCTYPE html>
<html>
<head>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<?php
session_start();
if(isset($_SESSION['done'])){
	header('location: book.php'); 
}
else{
	if(isset($_SESSION['reload'])){
		header('location: book.php');
}
else{
	$_SESSION['reload']="yes";
$_SESSION['dontgo']="yes";
if(isset($_SESSION['username'])){
				$db=new mysqli('localhost','root','','bus_management_system') or die("Unable to Connect to Database");	
				$un=$_SESSION['username'];
				$dest=$_SESSION['dest'];
				$time=$_SESSION['time'];
				$date=$_SESSION['date'];
				$coach=$_SESSION['coach'];
				$fare=$_SESSION['fare'];
				$count=$_SESSION['count'];
				$t="";
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
					$t .= " A1 ";
				}
				if ($A2==1) {
					$t .= " A2 ";	
				}
				if($A3==1){
					$t .= " A3 ";
				}
				if ($A4==1) {
					$t .= " A4 ";
				}
				if($B1==1){
					$t .= " B1 ";
				}
				if ($B2==1) {
					$t .= " B2 ";	
				}
				if($B3==1){
					$t .= " B3 ";
				}
				if ($B4==1) {
					$t .= " B4 ";	
				}
				if($C1==1){
					$t .= " C1 ";
				}
				if ($C2==1) {
					$t .= " C2 ";	
				}
				if($C3==1){
					$t .= " C3 ";
				}
				if ($C4==1) {
					$t .= " C4 ";	
				}
				if($D1==1){
					$t .= " D1 ";
				}
				if ($D2==1) {
					$t .= " D2 ";
				}
				if($D3==1){
					$t .= " D3 ";
				}
				if ($D4==1) {
					$t .= " D4 ";
				}
				if($E1==1){
					$t .= " E1 ";
				}
				if ($E2==1) {
					$t .= " E2 ";
				}
				if($E3==1){
					$t .= " E3 ";
				}
				if ($E4==1) {
					$t .= " E4 ";
				}
				if($F1==1){
					$t .= " F1 ";
				}
				if ($F2==1) {
					$t .= " F2 ";
				}
				if($F3==1){
					$t .= " F3 ";
				}
				if ($F4==1) {
					$t .= " F4 ";
				}
				if($G1==1){
					$t .= " G1 ";
				}
				if ($G2==1) {
					$t .= " G2 ";
				}
				if($G3==1){
					$t .= " G3 ";
				}
				if ($G4==1) {
					$t .= " G4 ";
				}
				if($H1==1){
					$t .= " H1 ";
				}
				if ($H2==1) {
					$t .= " H2 ";
				}
				if($H3==1){
					$t .= " H3 ";
				}
				if ($H4==1) {
					$t .= " H4 ";
				}
				$quey="SELECT * FROM all_together where date='$date' and time='$time' and coach='$coach' and dest='$dest';";
				$result=mysqli_query($db,$quey);
				$row=mysqli_fetch_row($result);
				$id=$row[0];
				$query=" INSERT INTO ticket (customer_id_fk, no_seats, seats,payment,all_together_id)VALUES ('$un','$count','$t','$fare', '$id'); ";
				$result=mysqli_query($db,$query);
				$query=" SELECT customer2.name,customer2.number,customer2.address,customer2.customer_id,ticket.ticket_no,ticket.no_seats,ticket.seats,ticket.payment,all_together.date,all_together.time,all_together.coach,all_together.dest,all_together.registration_fk from (customer2 INNER JOIN ticket on customer2.customer_id=ticket.customer_id_fk) INNER JOIN all_together on all_together.id=ticket.all_together_id where customer_id_fk='$un' and no_seats='$count' and seats='$t' and payment='$fare' and all_together_id=$id;";
				$res=mysqli_query($db,$query);
				$row2=mysqli_fetch_row($res);
}
}
}
?>
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
<span>Destination: </span><?php echo $row2[11] ;?><br><br>
<span>Bus Registration No.: </span><?php echo $row2[12] ;?>
<?php 
	$query=" SELECT ticket.ticket_no from (customer2 INNER JOIN ticket on customer2.customer_id=ticket.customer_id_fk) INNER JOIN all_together on all_together.id=ticket.all_together_id where customer_id_fk='$un' and no_seats='$count' and seats='$t' and payment='$fare' and all_together_id=$id;";
	$res=mysqli_query($db,$query);
	$row2=mysqli_fetch_row($res);
	$un=$row2[0];
	function update($id,$dest,$date,$time,$un,$coach,$db){
		$sql="Update all_together set $id='$un' where date='$date' and time='$time' and coach='$coach' and dest='$dest'; ";
    	mysqli_query($db,$sql);
    }
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
?>
</body>
</html>
