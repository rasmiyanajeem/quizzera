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
        <a href="admindash.php" class="brand-logo">Admin Dashboard</a>
            <ul id="nav-mobile" class="right">
            <li><a href="pass_edit.php">Change password</a></li>
            <li><a href="../logout.php">Logout</a></li>
           </ul>
	  </div>
    </div>
</nav>
<div class="container">
<div class="row" style="margin-top: 1%;">
<div class="col s12 m6 offset-m3" style="margin-top: 5%">
                <div class="card hoverable" id="login">
                    <div class="card-content">
                        <span class="card-title center-align">Set new password</span>

                       <div class="row">
                            <form class="col s12" action="" method="post">
                                <div class="input-field col s12">
                                    <input id="new_pass" type="password" name="old_pass" required>
                                    <label for="new_pass">Old Password</label>
                                </div>
                                <div class="input-field col s12">
                                    <input id="new_pass" type="password" name="new_pass" required>
                                    <label for="new_pass">New Password</label>
                                </div>
                                <div class="input-field col s12">
                                    <input id="new_pass" type="password" name="con_pass" required>
                                    <label for="new_pass">Confirm Password</label>
                                </div>
                                <div class="input-field col s6">
                                    <input class="btn col s12 c-gradient" type="submit"
                                           name="Submit" value="Update">
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

	<?php
	if(isset($_POST['Submit']))
	{
	   
	  $id=$_SESSION['userid'];
	  $old_pass=$_POST['old_pass'];
	  $new_pass=$_POST['new_pass'];
	  $con_pass=$_POST['con_pass'];
	  $query1="SELECT * FROM reg_users WHERE aid='$id'";
	  $result=mysqli_query($con,$query1);
	  $row=mysqli_fetch_array($result);
	  $o_pass=$row['password'];
	  if(($o_pass==$old_pass)&&($new_pass==$con_pass))
	  {
	  	$query = "UPDATE `reg_users` SET  `password` =  '$new_pass' WHERE  `reg_users`.`aid` ='$id'";
	  	echo $query;
      	$pass_edit = mysqli_query($con, $query);
	  	header('Location:admindash.php');
	    echo "<script>alert('Successful!')</script>";
	  }
	  else
	  {
	    echo "<script>alert('check you data')</script>";
	  }
	 }
	?>