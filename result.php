<?php
session_start();
include('config.php');
 if(!isset($_SESSION['username']))
	  {
	   header("Location:login.php");
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
        <a href="student/studentdash.php" class="brand-logo">Results</a>
        </div>
    </div>
</nav>

<div class="container">
	<div class="row">
        <div class="col s12 m12 " style="margin-top: 5%">
            <div class="card hoverable" id="login">
                <div class="card-content">
                <table class="striped highlight">
						
						<th>TEST NAME</th>
						<th>SUBJECT</th>
                        <th>TEST DATE</th>
                        <th>TOTAL MARK</th>
                        <th>OBTAINED</th>
                       
                  <?php
				$id=$_SESSION['userid'];
				//$query=mysqli_query($con,"SELECT * FROM student_details WHERE sid='$id'");
				$query1=mysqli_query($con,"SELECT * FROM test,result WHERE sid='$id' AND test.qid=result.qid ");
				//$query2=mysqli_query($con,"SELECT * FROM result WHERE sid='$id'");
			   while( ($test = mysqli_fetch_array($query1)))
			   {
			   		echo "<tr><td>".$test['testname']."</td>";
					echo "<td>".$test['sub']."</td>";
					echo "<td>".$test['date']."</td>";
					echo "<td>".$test['total']."</td>";
					echo "<td>".$test['obtained']."</td></tr>";
					
					
			   }
			   
				
				?>
					</table>
                
					
                </div>
            </div>
        </div>
     </div>
</div>