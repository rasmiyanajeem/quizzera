<?php
session_start();
include('../config.php');
 if(!isset($_SESSION['username']))
	  {
	   header("Location:login.php");
	  }

?>

<html>
<body>
<div align="right">
       <div style="font-weight: bold" id="quiz-time-left">
       </div>
 </div>
 
<?php
$id = $_SESSION['testid'];
$query1= "SELECT * FROM test WHERE qid='$id'";
$query=" SELECT * FROM questions WHERE qid='$id' ORDER BY RAND()";

$result1=mysqli_query($con,$query1) ;
$result2=mysqli_query($con,$query) ;
$xx = mysqli_fetch_array($result1);
$tot=$xx['totquestions'];
$counter=0;
?>


<script type="text/javascript">
var max_time = <?php echo $xx['duration'] ?>;
var c_seconds  = 0;
var total_seconds =60*max_time;
max_time = parseInt(total_seconds/60);
c_seconds = parseInt(total_seconds%60);
document.getElementById("quiz-time-left").innerHTML='Time Left: ' + max_time + ' minutes ' + c_seconds + ' seconds';
function init(){
document.getElementById("quiz-time-left").innerHTML='Time Left: ' + max_time + ' minutes ' + c_seconds + ' seconds';
setTimeout("CheckTime()",999);
}
function CheckTime(){
document.getElementById("quiz-time-left").innerHTML='Time Left: ' + max_time + ' minutes ' + c_seconds + ' seconds' ;
if(total_seconds <=0){
setTimeout('document.quiz.submit()',1);
    
    } else
    {
total_seconds = total_seconds -1;
max_time = parseInt(total_seconds/60);
c_seconds = parseInt(total_seconds%60);
setTimeout("CheckTime()",999);
}

}
init();


</script>  
<script>
function preventBack()
{
 window.history.forward();
}
setTimeout("preventBack()",0);
window.onunload=function(){ null };
</script>

<!--<script type="text/javascript">

window.onbeforeunload= function() {
setTimeout('document.quiz.submit()',1);
}
</script>-->
<h3>
 INSTRUCTIONS:
 <?php $instruction=$xx['instruction'];
      echo $instruction;
  ?>
 </h3>
<form method="post" action="starttest.php" target="_top" name="quiz" id="quiz">
<?php 
while($row = mysqli_fetch_array($result2)) 
	{
		$counter=$counter+1
								
?>
				 
                 <div class="col s12">
                 <p><b>Question no:</b> <?php echo $counter ?></p>
                 </div>
                 <div class="col s12">
                 <p> <b>Question:</b><?php echo $row['question']?></p><br>
                 </div>
                 <div class="col s12">
                 <input type="radio" name="<?php echo $row['questionid'] ?>" value="<?php echo $row['op1']?>"> <?php echo $row['op1']?>
                 </div>
                 <div class="col s12">
                 <input type="radio" name="<?php echo $row['questionid'] ?>" value="<?php echo $row['op2']?>"> <?php echo $row['op2']?>
                 </div>
                 <div class="col s12">
                <input  type="radio" name="<?php echo $row['questionid'] ?>" value="<?php echo $row['op3']?>"> <?php echo $row['op3']?>
                 </div>
                 
                 <div class="col s12">
               <input   type="radio" name="<?php echo $row['questionid'] ?>" value="<?php echo $row['op4']?>"> <?php echo $row['op4']?><br><br>
                 </div>
              
                
                 <?php
				 
				 }
				 ?>
                  <input type="submit" name="testsubmit" value="SUBMIT ANSWERS"  style="height:25px; width:780px">
                 </form>
                   
 </script>
 </body>
  </html>
