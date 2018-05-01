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
     <script type = "text/javascript" src = "../vendors/jquery-2.1.1.min.js"></script>
      <script src = "../vendors/materialize.min.js">
      </script> 
      <script src='../vendors/jquery.min.js'>
        </script>
 
    </head>

<body background="../images/bg.png">
 

  <nav style="background:#990000">
 
    <div class="nav-wrapper c-gradient">
       <div class="container">
        <a href="teacherdash.php" class="brand-logo">Teacher's Dashboard</a>
            <ul id="nav-mobile" class="right">
            
            <li><a href="pass_edit.php">Change password</a></li>
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
						<th>TEST ID</th>
						<th>TEST NO:</th>
						<th>TEST NAME</th>
						<th>SUBJECT</th>
                        <th>TOTAL MARK</th>
                        <th>TOTAL QUESTIONS</th>
                        <th>TEST DATE</th>
                        <th></th>
                        <th></th>
                        <?php
				$query1=mysqli_query($con,"SELECT * FROM test");
			   while( $xx = mysqli_fetch_array($query1)){
			   		echo "<tr><td>".$xx['qid']."</td>";
					echo "<td>".$xx['testno']."</td>";
					echo "<td>".$xx['testname']."</td>";
					echo "<td>".$xx['sub']."</td>";
					echo "<td>".$xx['totalmark']."</td>";
					echo "<td>".$xx['totquestions']."</td>";
					echo "<td>".$xx['testdate']."</td>";
					echo "<td><a href='view.php?id=".$xx['qid']."'>View</a></td>";
					echo "<td><a href='delete.php?id=".$xx['qid']."'>Delete</a></td></tr>";
			   }
			   
				
				?>
					</table>
                </div>
            </div>
        </div>
     </div>
</div>