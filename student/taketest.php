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

    <body background="../images/bg.png" >

  <nav style="background:#990000">
    <div class="nav-wrapper c-gradient">
        <div class="container">
            <a href="studentdash.php" class="brand-logo">Student's Dashboard</a>
            <ul id="nav-mobile" class="right">
             
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
                <div class="row">
                <?php
			$testid=$_GET['testid'];
			$_SESSION['testid']=$testid;
			echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			echo "<iframe src='test.php' border='0' height='10000' width='800'>"
				?>
                 </div>
                 </div>
                </div>
            </div>
        </div>
</div>
</body>
</html>