<?php
session_start();
include('../config.php');
 if(!isset($_SESSION['username']))
	  {
	   header("Location:login.php");
	  }

?>
<?php
	$id = $_GET['id'];
    $query1="DELETE FROM `reg_users` WHERE tid='$id'";
	mysqli_query($con,$query1);
	$query="DELETE FROM `teacher_details` WHERE tid='$id'";
	mysqli_query($con,$query);
	
	header("Location:admindash.php");
	echo "<script>alert('Successfully deleted!')</script>";
?>
			