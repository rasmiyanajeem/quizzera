<?php

session_start();
include('config.php');
?>
<html>

<head>
     <!--Import Google Icon Font-->
      <link href="vendors/fonts.css" rel="stylesheet">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="vendors/materialize.min.css">
          

   
</head>

<body background="images/bg.png">
    
    <nav style="background:#990000">
        <div class="nav-wrapper c-gradient">
            <div class="container">
                <a href="index.php" class="brand-logo c-brand center"><i class="material-icons">question_answer</i>Quizzera</a>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col s12 m6 offset-m3" style="margin-top: 5%">
                <div class="card hoverable" id="index">
                    <div class="card-content">
                        <span class="card-title center-align">Which user are you?</span>

                        <div class="row">
                            <div class="col s2 offset-s3">
                                <img src="images/student.png" alt="" class="left circle responsive-img">
                            </div>
                            <div class="col s7 " style="margin-top: 3%">
                                <a href="student/login.php"> I'm a student. </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s2 offset-s3 ">
                                <img src="images/teacher.png" alt="" class="left circle responsive-img">
                            </div>
                            <div class="col s7 " style="margin-top: 3%">
                                <a href="teacher/login.php"> I'm a teacher. </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s2 offset-s3">
                                <img src="images/admin.png"alt="" class="left circle responsive-img">
                            </div>
                            <div class="col s7 " style="margin-top: 3%">
                                <a href="admin/login.php"> I'm an admin. </a>
                            </div>
                        </div>
                    </div>
                     <!-- Compiled and minified JavaScript -->
      
        <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
</body>

</html>