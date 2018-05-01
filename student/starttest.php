<?php
session_start();
include('../config.php');
 if(!isset($_SESSION['username']))
	  {
	   header("Location:login.php");
	  }

?>
<?php
  $sid=$_SESSION['userid'];
 
   $id = $_SESSION['testid'];
   $query=" SELECT * FROM questions WHERE qid='$id'";
   $query1= "SELECT * FROM test WHERE qid='$id'";
   $query2="SELECT * FROM student_details WHERE sid='$sid'";
  
   $result=mysqli_query($con,$query) ;
   $result1=mysqli_query($con,$query1) ;
   $result2=mysqli_query($con,$query2) or die(mysqli_error($con));
   $xx = mysqli_fetch_array($result1);
   $xx2= mysqli_fetch_array($result2);
   $course=$xx2['course'];
   $total=0;
	while($row = mysqli_fetch_array($result)) 
	{			
				
				
				$rans=$row['rans'];
				$mark=$xx['quesmark'];
				$totmark=$xx['totalmark'];
				$testdate=$xx['testdate'];
				$sub=$xx['sub'];
				
				$quesid=$xx['qid'];
				if(isset($_POST[$row['questionid']]))
				{
  				$ans=$_POST[$row['questionid']];
				
				if($ans==$rans)
				{
					$total=$total+$mark;
				}
			}
				
    }
	$insresult="INSERT INTO `result`(`qid`, `sid`, `date`, `total`, `obtained`, `sub`, `course`) VALUES ('$quesid','$sid','$testdate','$totmark','$total','$sub','$course')";
			

			mysqli_query($con,$insresult) or die(mysqli_error($con));
			header("Location:studentdash.php");
	
?>