
<!DOCTYPE html>
<html>
<head>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
	<?php 
		if(isset($_SESSION['username'])){
				$_SESSION['count']=NULL;
				$db=new mysqli('localhost','root','','bus_management_system') or die("Unable to Connect to Database");
				$username=$_SESSION['username'];
				date_default_timezone_set("Asia/Dhaka");	
				if(isset($_POST['check'])){
					$dest=$_POST['dest'];
					$time=$_POST['time'];
					$coach=$_POST['coach'];
					$date=$_POST['date'];
					
					$_SESSION['dest']=$dest;
					$_SESSION['time']=$time;
					$_SESSION['coach']=$coach;
					$_SESSION['date']=$date;
					$_SESSION['A1']=0;
					$_SESSION['A2']=0;
					$_SESSION['A3']=0;
					$_SESSION['A4']=0;
					$_SESSION['B1']=0;
					$_SESSION['B2']=0;
					$_SESSION['B3']=0;
					$_SESSION['B4']=0;
					$_SESSION['C1']=0;
					$_SESSION['C2']=0;
					$_SESSION['C3']=0;
					$_SESSION['C4']=0;
					$_SESSION['D1']=0;
					$_SESSION['D2']=0;
					$_SESSION['D3']=0;
					$_SESSION['D4']=0;
					$_SESSION['E1']=0;
					$_SESSION['E2']=0;
					$_SESSION['E3']=0;
					$_SESSION['E4']=0;
					$_SESSION['F1']=0;
					$_SESSION['F2']=0;
					$_SESSION['F3']=0;
					$_SESSION['F4']=0;
					$_SESSION['G1']=0;
					$_SESSION['G2']=0;
					$_SESSION['G3']=0;
					$_SESSION['G4']=0;
					$_SESSION['H1']=0;
					$_SESSION['H2']=0;
					$_SESSION['H3']=0;
					$_SESSION['H4']=0;

					$quey="SELECT * FROM all_together where date='$date' and time='$time' and coach='$coach' and dest='$dest';";
					$result=mysqli_query($db,$quey);
					error_reporting(E_ALL ^ E_NOTICE);
					if(mysqli_num_rows($result)==0){
						$dest_break=explode(' to ', $dest);
						$sql="SELECT * from bus where coach='$coach'; ";
		         		$result=mysqli_query($db,$sql);
		         		if($result->num_rows > 0){
						while($row = $result->fetch_assoc()){
							$route=explode('-', $row['route']);
							$z=$route[1];
							$ntime=explode('-', $row['time']);
							if($route[0]==$dest_break[0]){
								if($route[1]==$dest_break[1]){
									if($ntime[0]==$time){
										$r_id=$row['registration'];
									}
								}
								else{}
							}
							else{
								
								$y=$dest_break[0];
								if($z==$y){
									if($ntime[1]==$time){
										$r_id=$row['registration'];	
									}
								}
							}
						}
						}
						$_SESSION['r_id']=$r_id;
						$query=" INSERT INTO all_together (date,time,dest,coach,registration_fk)VALUES ('$date','$time','$dest','$coach','$r_id'); ";
						$result=mysqli_query($db,$query);
					}
					else{
					}
						?>
						
						<div class="row">
					<div>
				<table class="table" id="table" cellspacing="10">
					<tr>
						<th></th>
						<th></th>
						<th></th>
						<th></th>
						<th><img src="image/steerin.png" class="icon2"></th>
					</tr>
					<tr>
						<th><i <?php if(booked("A1")){ ?> class="icon fas fa-couch b" <?php } else{ ?>class="icon fas fa-couch" <?php } ?>data-id="A1"></i></th>
						<th><i  <?php if(booked("A2")){ ?> class="icon fas fa-couch b" <?php } else{ ?>class="icon fas fa-couch" <?php } ?> data-id="A2"></i></th>
						<th></th>
						<th><i  <?php if(booked("A3")){ ?> class="icon fas fa-couch b" <?php } else{ ?>class="icon fas fa-couch" <?php } ?> data-id="A3"></i></th>
						<th><i  <?php if(booked("A4")){ ?> class="icon fas fa-couch b" <?php } else{ ?>class="icon fas fa-couch" <?php } ?> data-id="A4"></i></th>
					</tr>
					<tr>
						<th><i <?php if(booked("B1")){ ?> class="icon fas fa-couch b" <?php } else{ ?>class="icon fas fa-couch" <?php } ?> data-id="B1"></i></th>
						<th><i <?php if(booked("B2")){ ?> class="icon fas fa-couch b" <?php } else{ ?>class="icon fas fa-couch" <?php } ?> data-id="B2"></i></th>
						<th></th>
						<th><i <?php if(booked("B3")){ ?> class="icon fas fa-couch b" <?php } else{ ?>class="icon fas fa-couch" <?php } ?> data-id="B3"></i></th>
						<th><i <?php if(booked("B4")){ ?> class="icon fas fa-couch b" <?php } else{ ?>class="icon fas fa-couch" <?php } ?> data-id="B4"></i></th>
					</tr>
					<tr>
						<th><i <?php if(booked("C1")){ ?> class="icon fas fa-couch b" <?php } else{ ?>class="icon fas fa-couch" <?php } ?> data-id="C1"></i></th>
						<th><i <?php if(booked("C2")){ ?> class="icon fas fa-couch b" <?php } else{ ?>class="icon fas fa-couch" <?php } ?> data-id="C2"></i></th>
						<th></th>
						<th><i <?php if(booked("C3")){ ?> class="icon fas fa-couch b" <?php } else{ ?>class="icon fas fa-couch" <?php } ?> data-id="C3"></i></th>
						<th><i <?php if(booked("C4")){ ?> class="icon fas fa-couch b" <?php } else{ ?>class="icon fas fa-couch" <?php } ?> data-id="C4"></i></th>
					</tr>
					<tr>
						<th><i <?php if(booked("D1")){ ?> class="icon fas fa-couch b" <?php } else{ ?>class="icon fas fa-couch" <?php } ?> data-id="D1"></i></th>
						<th><i <?php if(booked("D2")){ ?> class="icon fas fa-couch b" <?php } else{ ?>class="icon fas fa-couch" <?php } ?> data-id="D2"></i></th>
						<th></th>
						<th><i <?php if(booked("D3")){ ?> class="icon fas fa-couch b" <?php } else{ ?>class="icon fas fa-couch" <?php } ?> data-id="D3"></i></th>
						<th><i <?php if(booked("D4")){ ?> class="icon fas fa-couch b" <?php } else{ ?>class="icon fas fa-couch" <?php } ?> data-id="D4"></i></th>
					</tr>
					<tr>
						<th><i <?php if(booked("E1")){ ?> class="icon fas fa-couch b" <?php } else{ ?>class="icon fas fa-couch" <?php } ?> data-id="E1"></i></th>
						<th><i <?php if(booked("E2")){ ?> class="icon fas fa-couch b" <?php } else{ ?>class="icon fas fa-couch" <?php } ?> data-id="E2"></i></th>
						<th></th>
						<th><i <?php if(booked("E3")){ ?> class="icon fas fa-couch b" <?php } else{ ?>class="icon fas fa-couch" <?php } ?> data-id="E3"></i></th>
						<th><i <?php if(booked("E4")){ ?> class="icon fas fa-couch b" <?php } else{ ?>class="icon fas fa-couch" <?php } ?> data-id="E4"></i></th>
					</tr>
					<tr>
						<th><i <?php if(booked("F1")){ ?> class="icon fas fa-couch b" <?php } else{ ?>class="icon fas fa-couch" <?php } ?> data-id="F1"></i></th>
						<th><i <?php if(booked("F2")){ ?> class="icon fas fa-couch b" <?php } else{ ?>class="icon fas fa-couch" <?php } ?> data-id="F2"></i></th>
						<th></th>
						<th><i <?php if(booked("F3")){ ?> class="icon fas fa-couch b" <?php } else{ ?>class="icon fas fa-couch" <?php } ?> data-id="F3"></i></th>
						<th><i <?php if(booked("F4")){ ?> class="icon fas fa-couch b" <?php } else{ ?>class="icon fas fa-couch" <?php } ?> data-id="F4"></i></th>
					</tr>
					<tr>
						<th><i <?php if(booked("G1")){ ?> class="icon fas fa-couch b" <?php } else{ ?>class="icon fas fa-couch" <?php } ?> data-id="G1"></i></th>
						<th><i <?php if(booked("G2")){ ?> class="icon fas fa-couch b" <?php } else{ ?>class="icon fas fa-couch" <?php } ?> data-id="G2"></i></th>
						<th></th>
						<th><i <?php if(booked("G3")){ ?> class="icon fas fa-couch b" <?php } else{ ?>class="icon fas fa-couch" <?php } ?> data-id="G3"></i></th>
						<th><i <?php if(booked("G4")){ ?> class="icon fas fa-couch b" <?php } else{ ?>class="icon fas fa-couch" <?php } ?> data-id="G4"></i></th>
					</tr>
					<tr>
						<th><i <?php if(booked("H1")){ ?> class="icon fas fa-couch b" <?php } else{ ?>class="icon fas fa-couch" <?php } ?> data-id="H1"></i></th>
						<th><i <?php if(booked("H2")){ ?> class="icon fas fa-couch b" <?php } else{ ?>class="icon fas fa-couch" <?php } ?> data-id="H2"></i></th>
						<th></th>
						<th><i <?php if(booked("H3")){ ?> class="icon fas fa-couch b" <?php } else{ ?>class="icon fas fa-couch" <?php } ?> data-id="H3"></i></th>
						<th><i <?php if(booked("H4")){ ?> class="icon fas fa-couch b" <?php } else{ ?>class="icon fas fa-couch" <?php } ?> data-id="H4"></i></th>
					</tr>
				</table>
				</div><br><br>
				<h3 id="hell"></h3><br><br>
				<form action="confirm.php" method="POST">
					<input type="submit" name="confirm" value="Confirm Payment">
				</form>
				</div>
				<script src="book.js"></script>	
					<?php 
					}
				}
	else{
			header('location: login.php');	
		}
	function booked($id){
	$db=new mysqli('localhost','root','','bus_management_system') or die("Unable to Connect to Database");
	$un=$_SESSION['username'];
	$dest=$_SESSION['dest'];
	$time=$_SESSION['time'];
	$date=$_SESSION['date'];
	$coach=$_SESSION['coach'];
	$quey="SELECT * FROM all_together where date='$date' and time='$time' and coach='$coach' and dest='$dest' and $id='0';";
	$result=mysqli_query($db,$quey);
	if(mysqli_num_rows($result)==1){
		return true;
	}
	else {
		return false;
	}
	}
	?>
</body>
</html>