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
        <a href="#" class="brand-logo">Admin Dashboard</a>
            <ul id="nav-mobile" class="right">
            <li><a href="pass_edit.php">Change password</a></li>
            <li><a href="../logout.php">Logout</a></li>
           </ul>
	  </div>
    </div>
</nav>
