<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
<?php
	$username="";
	session_start();
	$db=new mysqli('localhost','root','','bus_management_system') or die("Unable to Connect to Database");
	if(isset($_SESSION['username'])){
		$username=$_SESSION['username'];
		$query=" SELECT desig FROM e_login where e_id='$username'";
				$result=mysqli_query($db, $query);
				$row2=mysqli_fetch_row($result);
				$g=$row2[0];
				if($g=="Counter Employee"){
					header('Location: ce_homepage.php');	
				}
				else{
					if($g=="Manager"){
						header('Location: e_homepage.php');		
					}
				}
	}
else{
	if (isset($_POST['submit'])) {
		$username=$_POST['username'];
		$pass=md5($_POST['pass']);
		$query=" SELECT * FROM e_login where e_id='$username'";
		$result=mysqli_query($db, $query);
		if(mysqli_num_rows($result)==1){
			$query=" SELECT * FROM e_login where e_id='$username' AND pass='$pass'";
			$result=mysqli_query($db, $query);
			if(mysqli_num_rows($result)==1){ 
				$query=" SELECT status FROM e_login where e_id='$username'";
				$result=mysqli_query($db, $query);
				$row2=mysqli_fetch_row($result);
				$g=$row2[0];
				if($g=="active"){
				$_SESSION['username']=$username;
				$query=" SELECT desig FROM e_login where e_id='$username'";
				$result=mysqli_query($db, $query);
				$row2=mysqli_fetch_row($result);
				$g=$row2[0];
				if($g=="Counter Employee"){
					header('Location: ce_homepage.php');	
				}
				else{
					if($g=="Manager"){
						header('Location: e_homepage.php');		
					}
				}
				}
				else{
					?>
				<div class="error"><p>This Account has been Deactivated!</p></div><br><br>
				<?php 
				}
			}
			else{
				#echo "Password Incorrect!";?>
				<div class="error"><p>Password Incorrect!</p></div><br><br>
				<?php 
			}
		}	
		else{
			#echo "This username does not exist!"; ?>
			<div class="error"><p>This username does not exist!</p></div><br><br>
			<?php 
		}
	}
}
?>

</body>
</html>