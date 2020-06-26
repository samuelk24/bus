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
		<ul><?php
				session_start();
				if(isset($_POST['submit'])){
					$_SESSION['a']=$_POST['ticket_no'];
					$_SESSION['b']=$_POST['policy'];
					$_SESSION['c']=$_POST['id'];
				}
				$un=$_SESSION['username'];
				$db=new mysqli('localhost','root','','bus_management_system') or die("Unable to Connect to Database");  
				$query=" SELECT * FROM customer2 where customer_id='$un'";
				$result=mysqli_query($db, $query);
				$t=true;
				if(mysqli_num_rows($result)==1){
					?>
					<li><a href="homepage.php">Home</a></li>
					<li><a href="view_tickets.php">Booked Tickets</a></li>
					<li><a href="contact.php">Contact Us</a></li>
					<li><a href="about.php">About Us</a></li>
					<?php
				}
				else{
					$t=false;
					?>
					<li><a href="ce_homepage.php">Home</a></li>
					<li><a href="e_view_tickets.php">Booked Tickets</a></li>
					<li><a href="e_about.php">About Us</a></li>
					<?php 
				}?>
			
			
			<li><a href="logout.php"> Log Out</a></li>
		</ul>
	</div>
	<div class="box3"><br><br><br><br><br><br>
		<h3>Enter Personal Bkash No.</h3><br><br>
		<form action="#" method="POST">
			<input type="number" name="number" required><br><br><br>
			<input type="submit" name="set" value="Confirm"><br><br><br>
		</form>
	</div>
	<div>
	<?php 
	if (isset($_POST['set'])) {
		$number=$_POST['number'];
			$db=new mysqli('localhost','root','','bus_management_system') or die("Unable to Connect to Database");
	if(isset($_SESSION['username'])){
			$all_id=$_SESSION['c'];
			function check($id,$all_id,$ticket_no){
				$db=new mysqli('localhost','root','','bus_management_system') or die("Unable to Connect to Database");
				$quey="SELECT * FROM all_together where id='$all_id' and $id='$ticket_no';";
				$result=mysqli_query($db,$quey);
				if(mysqli_num_rows($result)==1){
					$sql="Update all_together set $id='0' where id='$all_id';";
    				mysqli_query($db,$sql);
				}
			}
			$ticket_no=$_SESSION['a'];
			$diff=$_SESSION['b'];
			$un=$_SESSION['username'];
			$query=" SELECT ticket.payment from (customer2 INNER JOIN ticket on customer2.customer_id=ticket.customer_id_fk) INNER JOIN all_together on all_together.id=ticket.all_together_id where ticket.ticket_no='$ticket_no';";
			$result=mysqli_query($db,$query);
			$row2=mysqli_fetch_row($result);
			$fare=$row2[0];
			if($diff=="yes"){
				if($t==true){$query=" INSERT INTO due (customer_id_fk, amount, status,number)VALUES ('$un','$fare', 'un-paid',$number); ";}
				else{}
				$result=mysqli_query($db,$query);?>
				<h1>"100% refund <?php echo $fare; ?>  Will be paid to back you!"</h1>
				<?php 
			}
			else{
				$fare=$fare*0.5;
				if($t==true){$query=" INSERT INTO due (customer_id_fk, amount, status,number)VALUES ('$un','$fare', 'un-paid',$number); ";}
				else{}
				$result=mysqli_query($db,$query);?>
				<h1>"50% refund <?php echo $fare; ?> Will be paid to back you!"</h1>
				<?php 
			}
			$query=" DELETE from ticket where ticket_no='$ticket_no'; ";
			$result=mysqli_query($db,$query);
			check("A1",$all_id,$ticket_no);
			check("A2",$all_id,$ticket_no);
			check("A3",$all_id,$ticket_no);
			check("A4",$all_id,$ticket_no);
			check("B1",$all_id,$ticket_no);
			check("B2",$all_id,$ticket_no);
			check("B3",$all_id,$ticket_no);
			check("B4",$all_id,$ticket_no);
			check("C1",$all_id,$ticket_no);
			check("C2",$all_id,$ticket_no);
			check("C3",$all_id,$ticket_no);
			check("C4",$all_id,$ticket_no);
			check("D1",$all_id,$ticket_no);
			check("D2",$all_id,$ticket_no);
			check("D3",$all_id,$ticket_no);
			check("D4",$all_id,$ticket_no);
			check("E1",$all_id,$ticket_no);
			check("E2",$all_id,$ticket_no);
			check("E3",$all_id,$ticket_no);
			check("E4",$all_id,$ticket_no);
			check("F1",$all_id,$ticket_no);
			check("F2",$all_id,$ticket_no);
			check("F3",$all_id,$ticket_no);
			check("F4",$all_id,$ticket_no);
			check("G1",$all_id,$ticket_no);
			check("G2",$all_id,$ticket_no);
			check("G3",$all_id,$ticket_no);
			check("G4",$all_id,$ticket_no);
			check("H1",$all_id,$ticket_no);
			check("H2",$all_id,$ticket_no);
			check("H3",$all_id,$ticket_no);
			check("H4",$all_id,$ticket_no);
		}
	else{
		header('location: login.php');
	}
}
	?>
	</div>
</body>
</html>