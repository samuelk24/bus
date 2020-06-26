<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="book.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://kit.fontawesome.com/54d373ce9a.js" crossorigin="anonymous"></script>
</head>
<body >
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
					<li><a href="contact.php">Contact Us</a></li>
					<li><a href="about.php">About Us</a></li>
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
	</div>
	<div class="box">
		<form action="book.php" method="POST">
		<div class="row">
			<div class="center">
		<h3>Choose Coach:</h3>
		<select name="coach">
			<option>express</option>
			<option>NON-express</option>
		</select><br><br>
		<h3>Choose Destination:</h3>
		<select name="dest">
			<option>Somewher to somewhere</option>
			<option>nairobi to Bungomat</option>
			<option>Dhaka to Rajshahi</option>
			<option>Dhaka to Chittagong</option>
			<option>Sylhet to Dhaka</option>
			<option>Rajshahi to Dhaka</option>
			<option>Chittagong to Dhaka</option>
		</select><br><br>
		<h3>Choose Date of Travel</h3>
		<input type="date" name="date" id="demo"/><br><br>
		<script>
		document.getElementById("demo").innerHTML = function();
		</script>
		<script>
		$(function(){
		    var dtToday = new Date();
		    var month = dtToday.getMonth() + 1;
		    var day = dtToday.getDate();
		    var year = dtToday.getFullYear();
		    if(month < 10)
		        month = '0' + month.toString();
		    if(day < 10)
		        day = '0' + day.toString();    
		    var maxDate = year + '-' + month + '-' + day;
		    $('#demo').attr('min', maxDate);
		});
		</script>
		<h3>Choose Time</h3>
		<select name="time" value=" <?php echo $_SESSION['time']; ?>">
			<option>12:01 AM</option>
			<option>04:00 AM</option>
			<option>08:00 AM</option>
			<option>12:01 PM</option>
			<option>04:00 PM</option>
			<option>08:00 PM</option>
		</select><br><br>
		<input type="submit" name="check" value="Check Seats">
		</div>
		</div>
	</form>
	<?php 
	
	$_SESSION['dontgo']=NULL;
	$_SESSION['reload']=NULL;
	if(isset($_SESSION['done'])){
		$_SESSION['done']=NULL;
		?>
		<script>
		alert("Seat reservation expired");
	</script><?php 
	}
		
	include 'book_connect.php' ?>
		
	</div>
</body>
</html>