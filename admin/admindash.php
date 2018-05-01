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
      <link href=../"vendors/fonts.css" rel="stylesheet">

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
                <div class="collection">
       			 <a href="../student/register.php" class="collection-item">Add Student</a>
                 <a href="../teacher/register.php" class="collection-item">Add Teacher</a>
        		 <a href="edit_student.php" class="collection-item ">Edit Student details</a>
       			 <a href="edit_teacher.php" class="collection-item">Edit Teacher details</a>
        	     <a href="viewstudent.php" class="collection-item">View Student details</a>
                 <a href="viewteacher.php" class="collection-item">View Teacher details</a>
                </div>
                </div>
           </div>
      </div>
    </div>
</div>
</body>
</html>
            