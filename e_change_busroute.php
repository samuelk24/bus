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
			<li><a href="e_homepage.php">Home</a></li>
			<li><a href="e_manage.php">Manage</a></li>
			<li><a href="e_due.php">Payment Due</a></li>
			<li><a href="e_about.php">About Us</a></li>
			<li><a href="logout.php"> Log Out</a></li>
		</ul>
	</div><br><br><br>
	<?php session_start();
		if(isset($_POST['submit'])){ 
			$r_id=$_POST['r_id'];
			$coach=$_POST['coach'];
		}?>
	<div class="box3">
		<form action="#" method="POST">
			<h3>Choose Destination:</h3><br>
			<select name="dest">
				<option>Dhaka-Sylhet</option>
				<option>Dhaka-Rajshahi</option>
				<option>Dhaka-Chittagong</option>
			</select><br><br><br>
			<h3>Choose Time:</h3><br>
		<select name="time">
			<option>12:01 AM-12:01 PM</option>
			<option>04:00 AM-04:00 PM</option>
			<option>08:00 AM-08:00 PM</option>
			<option>12:01 PM-12:01 AM</option>
			<option>04:00 PM-04:00 AM</option>
			<option>08:00 PM-08:00 AM</option>
		</select><br><br><br>
		<input type="hidden" name="coach" value="<?php echo $coach; ?>">
		<input type="hidden" name="r_id" value="<?php echo $r_id; ?>">
		<input type="submit" name="set" value="Change">	
		</form>
	
	<?php  
		date_default_timezone_set("Asia/Dhaka");
		if(isset($_POST['set'])){
			$r_id=$_POST['r_id'];
			$dest=$_POST['dest'];
			$time=$_POST['time'];
			$coach=$_POST['coach'];
			$db=new mysqli('localhost','root','','bus_management_system') or die("Unable to Connect to Database");
			$q="SELECT * from bus where route='$dest' and time='$time' and coach='$coach';";
			$result=mysqli_query($db,$q);
			if(mysqli_num_rows($result)==0){
				$q="UPDATE bus set route='$dest',time='$time' where registration='$r_id';";
				$result=mysqli_query($db,$q);
				?><p><?php echo "Route and Time Updated"; ?></p><?php  
			}
			else{
				$q="SELECT registration from bus where route='$dest' and time='$time' and coach='$coach';";
				$result=mysqli_query($db,$q);
				$row2=mysqli_fetch_row($result);
				$prev_id=$row2[0];
				$q="SELECT route, time from bus where registration='$r_id';";
				$result=mysqli_query($db,$q);
				$row2=mysqli_fetch_row($result);
				$q="UPDATE bus set route='$row2[0]',time='$row2[1]' where route='$dest' and time='$time' and coach='$coach';";
				$result=mysqli_query($db,$q);
				$q="UPDATE bus set route='$dest',time='$time' where registration='$r_id';";
				$result=mysqli_query($db,$q);
				$q="SELECT * from all_together where registration_fk='$r_id';";
				$result=mysqli_query($db,$q);
				if($result->num_rows > 0){
				while($row = $result->fetch_assoc()){
					$all_id=$row['id'];
					$date=$row['date'];
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
						$q="UPDATE all_together set registration_fk='$prev_id' where id='$all_id';";
						$result=mysqli_query($db,$q);
					}
					else{
						if($year==$nyear){
							if($month>$nmonth){
								$q="UPDATE all_together set registration_fk='$prev_id' where id='$all_id';";
								mysqli_query($db,$q);			
							}
							else{
								if($month==$nmonth){
									if($day>$nday){
										$q="UPDATE all_together set registration_fk='$prev_id' where id='$all_id';";
										mysqli_query($db,$q);
									}
									else{
										if($day==$nday){
											if($diff>0){
												$q="UPDATE all_together set registration_fk='$prev_id' where id='$all_id';";
												mysqli_query($db,$q);			
											}
										}
									}
								}
							}
						}
					}
				}
			}
				?>
				<br><br><p><?php echo "Route and Time Swapped"; ?></p><?php 
			}
		}
	?>
	</div>
</body>
</html>