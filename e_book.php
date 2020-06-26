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
				<li><a href="homepage.php">Home</a></li>
				<li><a href="view_tickets.php">Cancel Ticket</a></li>
				<li><a href="#">Have an Issue</a></li>
				<li><a href="#">Contact Us</a></li>
				<li><a href="#">About Us</a></li>
				<li><a href="logout.php"> Log Out</a></li>
		</ul>
	</div>
	<div class="box">
		<form action="book.php" method="POST">
		<div class="row">
			<div class="center">
		<h3>Choose Coach:</h3>
		<select name="coach">
			<option>AC</option>
			<option>NON-AC</option>
		</select><br><br>
		<h3>Choose Destination:</h3>
		<select name="dest">
			<option>Dhaka to Sylhet</option>
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
	session_start();
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