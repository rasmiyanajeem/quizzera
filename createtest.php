<?php
session_start();
 include('config.php');
 $id=$_SESSION['userid'];
  if(isset($_POST['Submit']))
	  {
	  $testno=$_POST['testno'];
	   $testname=$_POST['testname'];
	   $testdate=$_POST['date'];
	   $subject=$_POST['subject'];
	   $instruction=$_POST['instruction'];
	   $duration=$_POST['duration'];
	   $pqmark=$_POST['pqmark'];
	   $totmark=$_POST['totmark'];
	   $totques=$_POST['totques'];
	   $query1="INSERT INTO test(`tid`,`testno`, `totalmark`, `quesmark`, `instruction`, `testdate`, `testname`, `sub`, `duration`,`totquestions`) VALUES('$id','$testno','$totmark','$pqmark','$instruction','$testdate','$testname','$subject','$duration','$totques')";
	   mysqli_query($con,$query1) or die (mysqli_error($con));
	   header("Location:add.php");
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
                    <form class="col s12"  action="createtest.php" method="post">
                    <div class="row">
                    <div class="input-field col s6">
                                <input id="testno" type="text" name="testno" required>
                                <label for="testno">Test no</label>
                     </div>
                     <div class="input-field col s6">
                                <input id="testname" type="text" name="testname" required>
                                <label for="testname">Test name</label>
                     </div>
                     </div>
                     <div class="row">
                     <div class="input-field col s6">
                                <input id="date" type="date" name="date" required>
                                <label for="date"></label>
                      </div>
                      <div class="input-field col s6">
                                <input id="subject" type="text" name="subject" required>
                                <label for="subject">Subject</label>
                     </div>
                     </div>
                     <div class="row">
                      <div class="input-field col s12">
                       			<textarea id="instruction" class="materialize-textarea" name="instruction"></textarea>
                        		<label for="instruction"> Instruction</label>     
                       </div>       
                       </div>
                       <div class="row">
                      <div class="input-field col s6">
                                <input id="duration" type="text" name="duration" required>
                                <label for="duration">Duration(minutes)</label>
                     </div>
                     </div>
                     <div class="row">
                      <div class="input-field col s6">
                                <input id="totques" type="text" name="totques" required>
                                <label for="totques">Total no: of questions</label>
                     </div>
                     </div>
                      <div class="row">
                      <div class="input-field col s6">
                                <input id="totmark" type="text" name="totmark" required>
                                <label for="totmark">Total Mark</label>
                     </div>
                     </div>
                     <div class="row">
                      <div class="input-field col s6">
                                <input id="pqmark" type="text" name="pqmark" required>
                                <label for="pqmark">Per question mark</label>
                     </div>
                     </div>
                     <div class="row">
                     <div class="input-field col s12">
                                <input class="btn col s12 c-gradient" type="submit"
                                       name="Submit" value="NEXT" id="Submit">
                            </div>
                      </div>
                      
                    </form>
                    </div>
       				</div>
        		</div>
        	</div>
        </div>
    </div>
   
                   
                    
                     
                     
      </div>
      </div>
       </div>
       </div>
       </div>
   </p>
   </body>
  </html>               