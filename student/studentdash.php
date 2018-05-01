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
             
             <li><a href="pass_edit.php">Account</a></li>
             <li><a href="../logout.php">Logout</a></li>
            </ul>

        </div>
    </div>
</nav>
 <div class="container">
        <div class="row">
            <div class="col s12 m4 offset-m4" style="margin-top: 5%">
                <div class="card hoverable  cyan accent-4" id="index">
                    <div class="card-content">
                    <a href="begintest.php">
                     <div class="row">
                            <div class="col s12 ">
                                <img src="../images/result.png" alt="" class="left circle responsive-img">
                            </div>
                     </div>
                     <div class="row">
                     		<div class="col s6 offset-s3 ">
                      		 <span class="white-text text-darken-4"><h5 align="center"  > Take test!</h5></span>
                            </div>
                     </div>
                     </a>
                    </div>
                </div>
            </div>
       </div>
 </div>
 </body>
 </html>