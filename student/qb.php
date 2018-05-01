<?php
session_start();
include('../config.php');
 if(!isset($_SESSION['username']))
	  {
	   header("Location:login.php");
	  }

?>
<html>
    <head>
  <!--Import Google Icon Font-->
      <link href="../vendors/fonts.css" rel="stylesheet">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="../vendors/materialize.min.css">
          
 
    </head>

    <body background="../images/bg.png">
     
  <nav style="background:#990000">
    <div class="nav-wrapper c-gradient">
        <div class="container">
            <a href="studentdash.php" class="brand-logo">Student's Dashboard</a>
            <ul id="nav-mobile" class="right">
             <li><a href="../result.php">Result</a></li>
             <li><a href="qb.php">Question Bank</a></li>
             <li><a href="pass_edit.php">Account</a></li>
             <li><a href="../logout.php">Logout</a></li>
            </ul>

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
                        <th></th>
                        <?php
				$query1=mysqli_query($con,"SELECT * FROM test");
			   while( $xx = mysqli_fetch_array($query1))
			   {
			   		echo "<tr>";
					echo "<td>".$xx['testname']."</td>";
					echo "<td>".$xx['sub']."</td>";
					echo "<td><a href='qbview.php?id=".$xx['qid']."'>View</a></td></tr>";
					
			   }
			   
				
				?>
					</table>
                    </div>
                 </div>
             </div>
        </div>
  </div>
 </body>
 </html>