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
        <a href="#" class="brand-logo">Teachers Dashboard</a>
            <ul id="nav-mobile" class="right">
          
            <li><a href="pass_edit.php">Account</a></li>
             <li><a href="../logout.php">Logout</a></li>
           </ul>
		</div>
    </div>
	
</nav>
 <div class="container">
        <div class="row">
            <div class="col s12 m4" style="margin-top: 5%">
                <div class="card hoverable orange accent-4" id="testcreation">
                    <div class="card-content">
                    <a href="../createtest.php"> 
                     <div class="row">
                            <div class="col s12 ">
                                <img src="../images/qp.png" alt="" class="left circle responsive-img">
                            </div>
                     </div>
                     <div class="row">
                     		<div class="col s6 offset-s3 ">
                      		<span class="white-text text-darken-4"><h5 align="center"  >Create test</h5></span>
                            </div>
                     </div>
                     </a>
                    </div>
                </div>
            </div>
       
                    <div class="col s12 m4" style="margin-top: 5%">
                <div class="card hoverable  cyan accent-4" id="Result">
                    <div class="card-content">
                    <a href="../resultteach.php">
                     <div class="row">
                            <div class="col s12 ">
                                <img src="../images/result.png" alt="" class="left circle responsive-img">
                            </div>
                     </div>
                     <div class="row">
                     		<div class="col s6 offset-s3 ">
                      		 <span class="white-text text-darken-4"><h5 align="center"  > View Result</h5></span>
                            </div>
                     </div>
                     </a>
                    </div>
                </div>
            </div>
       
               
            <div class="col s12 m4" style="margin-top: 5%">
                <div class="card hoverable lime darken-4" id="questionbank">
                    <div class="card-content">
                    <a href="attendtest.php">
                     <div class="row">
                            <div class="col s12 ">
                                <img src="../images/qbank.png" alt="" class="left circle responsive-img">
                            </div>
                     </div>
                     <div class="row">
                     		<div class="col s6 offset-s3 ">
                      		 <span class="white-text text-darken-4"><h5 align="center"  >Question Bank</h5></span>
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