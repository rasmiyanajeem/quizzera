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
	$query2="DELETE FROM `result` WHERE qid='$id'";
	mysqli_query($con,$query2);
	$query1="DELETE FROM `questions` WHERE qid='$id'";
	mysqli_query($con,$query1);
	$query="DELETE FROM `test` WHERE qid='$id'";
	mysqli_query($con,$query);
	
	
	header("Refresh:0;attendtest.php");
	echo "<script>alert('Successfully deleted!')</script>";
?>
			