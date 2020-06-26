<?php 
session_start();
	if(isset($_POST['set2'])){
					$db=new mysqli('localhost','root','','bus_management_system') or die("Unable to Connect to Database");
			$e_id=$_POST['e_id'];
			$q="SELECT name, number, email, address, desig, e_id, status from e_login where e_id='$e_id';";
			$result=mysqli_query($db,$q);
			$row2=mysqli_fetch_row($result);
			$status=$row2['6'];
			$desig=$row2['4'];
			if($status=="deactive"){
					$_SESSION['deactivated']="Account already deactive!";
					header('location: e_delete.php');
				}
				else{
			if($desig=="Counter Employee"){
				$q="SELECT * from counter where e_id_fk='$e_id';";
				$result=mysqli_query($db,$q);
				if(mysqli_num_rows($result)==1){
					$_SESSION['deactivated']="This Employee has been assigned a Counter! Remove counter first from Swap Employee";
					header('location: e_delete.php');
				}
				else{
					$q="update e_login set status='deactive' where e_id='$e_id';";
					$result=mysqli_query($db,$q);
					$_SESSION['deactivated']="Account Deactivated!";
					header('location: e_delete.php');
				}
			}
			else{
					$_SESSION['deactivated']="Can't Deactivate Account of Designation:  $desig";
					header('location: e_delete.php');
				
			}
		}
		}
?>