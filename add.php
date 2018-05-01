<?php
session_start();
 include('config.php');
$userid= $_SESSION['userid'];
$query1=mysqli_query($con,"SELECT * FROM test ORDER BY qid DESC LIMIT 1");
$xx = mysqli_fetch_array($query1);
$tot=$xx['totquestions'];
if(isset($_POST['createfinish']))
	  {
	    for($counter = 1;$counter<=$tot;$counter++)
		{
		$num= $counter;
	 	$qno=$_POST['qno'.$num.''];
		$question=$_POST['question'.$num.''];
		$option1=$_POST['option1'.$num.''];
		$option2=$_POST['option2'.$num.''];
		$option3=$_POST['option3'.$num.''];
		$option4=$_POST['option4'.$num.''];
		$rans=$_POST['rans'.$num.''];
		
	    $query2=mysqli_query($con,"SELECT * FROM test ORDER BY qid DESC LIMIT 1");
		$xx = mysqli_fetch_array($query2);
	   
		$qid=$xx['qid'];
	    $userid= $_SESSION['userid'];
	    $query3="INSERT INTO questions(`qid`, `tid`, `qno`, `question`, `op1`, `op2`, `op3`, `op4`, `rans`)VALUES ('$qid','$userid','$qno','$question','$option1','$option2','$option3','$option4','$rans')";
	  
	    mysqli_query($con,$query3) or die (mysqli_error($con));
		}
	    echo "<script>alert('test created!')</script>";
		header("Location:teacher/teacherdash.php");
	  }
	  
?>
<html>
    <head>
   <!--Import Google Icon Font-->
      <link href="vendors/fonts.css" rel="stylesheet">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="vendors/materialize.min.css">
     <script type = "text/javascript" src = "vendors/jquery-2.1.1.min.js"></script>
      <script src = "vendors/materialize.min.js">
      </script> 
      <script src='vendors/jquery.min.js'>
        </script>
 
    </head>

<body background="images/bg.png">
 

  <nav style="background:#990000">

  
    <div class="nav-wrapper c-gradient">
      <div class="container">
        <a href="teacher/teacherdash.php" class="brand-logo">Teachers Dashboard</a>
            <ul id="nav-mobile" class="right">
          
            <li><a href="pass_edit.php">Change password</a></li>
             <li><a href="../logout.php">Logout</a></li>
           </ul>
		</div>
    </div>
	
</nav>
  
    <div class="container">
   
     	<div class="row">
    		 <div class="col s12 m8 offset-m2" style="margin-top: 5%">
      			<div class="card hoverable" id="createtest">
      				<div class="card-content">
                    <span class="card-title center-align">Create Test</span>
                    <div class="row">
			 <?php
			 		echo '<form class="col s12" method="post">';
					$query1=mysqli_query($con,"SELECT * FROM test ORDER BY qid DESC LIMIT 1");
					$xx = mysqli_fetch_array($query1);
					$tot=$xx['totquestions'];
					for($counter = 1;$counter<=$tot;$counter++)
					{
					$num= $counter;
                       echo '<div class="row">      
                      	<div class="input-field col s6">
                                <input id="qno" type="text" name="qno'.$num.'" value='.$num.' >
                                <label for="qno">Question no: </label>
                   	    </div>
                       </div>
                      	<div class="row">
                            <div class="input-field col s12">
                                <input id="question" type="text" name="question'.$num.'" >
                                <label for="question">Question</label>
                     	    </div>
                       </div>
                     <div class="row">
                   				<div class="input-field col s6">
                                <input id="option1" type="text" name="option1'.$num.'" >
                                <label for="option1">Option 1</label>
                   			    </div>
                    			 <div class="input-field col s6">
                                <input id="option2" type="text" name="option2'.$num.'" >
                                 <label for="option2">Option 2</label>
                   			  </div>
                     </div>
                     <div class="row">
                    			 <div class="input-field col s6">
                                <input id="option3" type="text" name="option3'.$num.'">
                                <label for="option3">Option 3</label>
                     			 </div>
                     			 <div class="input-field col s6">
                                <input id="option4" type="text" name="option4'.$num.'" >
                                <label for="option4">Option 4</label>
                    			 </div>
                     </div>
					 <div class="row">
					  <div class="input-field col s6">
                                <input id="rans" type="text" name="rans'.$num.'" >
                                <label for="rans">Correct answer</label>
                    			 </div>
					</div>';
					
				} 
				echo'<div class="input-field col s12">
                                <input class="btn col s12 c-gradient" type="submit"
                                       name="createfinish" value="FINISH" id="createfinish">
                            </div>
                    </form>';?>
                    
					
					
                    </div>
                  </div>
                 </div>
                </div>
               </div>
              
             </div>
          </body>
          </html>
                