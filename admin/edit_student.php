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
        <a href="admindash.php" class="brand-logo">Admin Dashboard</a>
            <ul id="nav-mobile" class="right">
            <li><a href="pass_edit.php">Change password</a></li>
            <li><a href="../logout.php">Logout</a></li>
           </ul>
	  </div>
    </div>
</nav>
<div class="container">

    <div class="row">
        <div class="col s12 m6 offset-m3" style="margin-top: 5%">
            <div class="card hoverable" id="login">
                <div class="card-content">
                <table>
						<th>First name</th>
						<th>Last name</th>
						<th>Department</th>
						<th></th>
                        <th></th>
                <?php
				$query1=mysqli_query($con,"SELECT * FROM student_details ORDER BY sid");
			   while( $xx = mysqli_fetch_array($query1)){
			   		echo "<tr><td>".$xx['sfname']."</td>";
					echo "<td>".$xx['slname']."</td>";
					echo "<td>".$xx['course']."</td>";
					echo "<td><a href='sedit.php?id=".$xx['sid']."'> Edit </a></td>";
					echo "<td><a href='sdelete.php?id=".$xx['sid']."'> Delete </a></td></tr>";
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