<?php 
	session_start();
	$db=new mysqli('localhost','root','','bus_management_system') or die("Unable to Connect to Database");
	if(isset($_POST['set2'])){
		$r_id=$_POST['r_id'];
		$q="SELECT route from bus where registration='$r_id';";
		$result=mysqli_query($db, $q);
		$row2=mysqli_fetch_row($result);
		$g=$row2[0];
		if($g==""){
			$q="DELETE from bus where registration='$r_id';";
			$result=mysqli_query($db, $q);
			$_SESSION['deactivated']="Bus Deleted!";
			header('location: e_delete_bus.php');
		}
		else{
			$_SESSION['deactivated']="Route still set! Remove route first from Manage bus!";
			header('location: e_delete_bus.php');
		}
		}
	else{
		header('Location: e_delete_bus.php');
	}
?>