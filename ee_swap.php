<?php 
session_start();
		if(isset($_POST['submit3'])){
			$db=new mysqli('localhost','root','','bus_management_system') or die("Unable to Connect to Database");
			$ne_id=$_POST['ne_id'];
			$e_id=$_POST['e_id'];
			$c_id=$_POST['c_id'];
			$q="SELECT * from counter where e_id_fk='$e_id';";
			$result=mysqli_query($db,$q);
			if(mysqli_num_rows($result)==0){
				$q="Update counter set e_id_fk='$e_id' where c_id=$c_id;";
				mysqli_query($db,$q);
				
			}
			else{
				$q="SELECT c_id from counter where e_id_fk='$e_id';";
				$result=mysqli_query($db,$q);
				$row2=mysqli_fetch_row($result);
				$nc_id=$row2[0];
				$q="Update counter set e_id_fk='$ne_id' where c_id=$nc_id;";
				mysqli_query($db,$q);
				$q="Update counter set e_id_fk='$e_id' where c_id=$c_id;";
				mysqli_query($db,$q);
			}
			header('location: e_swap.php');	
		}
	?>