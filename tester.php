<!DOCTYPE html>
<html>
<head>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
	<?php 
		session_start();
		$db=new mysqli('localhost','root','','bus_management_system') or die("Unable to Connect to Database");
		$un=$_SESSION['username'];
		$dest=$_SESSION['dest'];
		$time=$_SESSION['time'];
		$date=$_SESSION['date'];
		$coach=$_SESSION['coach'];
		$action=$_POST['action'];
		$id=$_POST['id'];
		$_SESSION['count']=$_POST['count'];
		$fare=0;
		$count=$_POST['count'];
		if(isset($_POST['action'])){
			switch ($action) {
  			case 'book':
         		$_SESSION["$id"]=1;
         		break;
  			case 'unbook':
          		$_SESSION["$id"]=0;
         		break;
         		default:
         		break;
			}
			switch ($dest) {
				case 'Dhaka to Sylhet':
					$fare=500;
					break;
				case 'Dhaka to Rajshahi':
					$fare=700;
					break;
				case 'Dhaka to Chittagong':
					$fare=800;
					break;
				case 'Sylhet to Dhaka':
					$fare=500;
					break;
				case 'Rajshahi to Dhaka':
					$fare=700;
					break;
				case 'Chittagong to Dhaka':
					$fare=800;
					break;
				default:
					break;
			}
			switch ($coach) {
				case 'AC':
					$fare=$fare+200;
					break;
				case 'NON-AC':
					break;
				default:
					break;
			}
			$total=$count*$fare;
			$_SESSION['count']=$count;
			$_SESSION['fare']=$total;
		echo "$total";		
		}
	?>
</body>
</html>