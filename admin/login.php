<!--ADMIN LOGIN-->
<?php
session_start();
include('../config.php');

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
            <a href="../index.php" class="brand-logo c-brand center" ><i class="material-icons">question_answer</i>Quizzera</a>        </div>
    </div>
</nav>
 <?php 
  if(isset($_POST['Submit']) && isset($_POST['username']) && isset($_POST['password']))
  {
  	$username=$_POST['username'];
  	$password=$_POST['password'];
    $designation=$_POST['designation'];
  	$query= mysqli_query($con,"SELECT * FROM reg_users where username= '$username' and password='$password' ");
  	$xx = mysqli_fetch_array($query);
	$id=$xx['aid'];
  	$user = $xx['username'];
  	$pass=$xx['password'];
    $desig=$xx['designation'];
  	if($username==$user && $password==$pass && $desig==$designation){
  		$_SESSION['valid'] = true;
        $_SESSION['timeout'] = time();
		$_SESSION['userid']=$id;
        $_SESSION['username'] = $username;
        $_SESSION['designation'] = $desig;
          header("Location:admindash.php");
  	}
  	else{
     
  		echo "<script>alert('username or password is incorrect!')</script>";
    	}
  	
  }
  ?>
<div class="container">

    <div class="row">
        <div class="col s12 m6 offset-m3" style="margin-top: 5%">
            <div class="card hoverable" id="login">
                <div class="card-content">
                    <span class="card-title center-align">Login</span>

                    <div class="row">
                        <form class="col s12" action="login.php" method="post">
                            <div class="input-field col s12">
                                <input id="username" type="text" name="username" required>
                                <label for="username">Username</label>
                            </div>
                            <div class="input-field col s12">
                                <input id="password" type="password" name="password" required>
                                <label for="password">Password</label>
                            </div>
						 <div class="input-field col s6">
      					  <input name="designation" type="checkbox" id="test1" value="admin" required checked/>
        						<label for="test1">Admin</label>
     					 </div>
                            <div class="input-field col s12">
                                <input class="btn col s12 c-gradient" type="submit"
                                       name="Submit" value="Login">
                            </div>
                        </form>
                    </div>
                    
                  </div>
			</div>
            </div>
            </div>
            </div>
      
        
  </body>
  </html>