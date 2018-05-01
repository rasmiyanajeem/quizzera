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
           <a href="studentdash.php" class="brand-logo">Student's Dashboard</a>      </div>
    </div>
</nav>
<div class="container">
<div class="row" style="margin-top: 1%;">
	 <?php
		
			$s_id = $_SESSION['userid'];
            $res_profile = mysqli_query($con, "SELECT * FROM  `student_details` WHERE  `sid` ='$s_id'");
            $student= mysqli_fetch_array($res_profile);
		
  
		if (mysqli_num_rows($res_profile ) > 0)
		 {
            ?>
             <div class="col s12 m6" style="margin-top: 5%">
             <div class="card hoverable" id="view">
                <div class="card-content">
                        <span class="card-title center-align"><?php echo $student['sfname'] . " " .$student['slname']; ?></span>

                        <div class="row">

                            <div class="col s12">
                                <p class="center"><b>Course</b></p>
                                <p class="center"><?php echo $student['course']; ?></p>
                            </div>
                            <div class="col s12">
                                <p class="center"><b>Gender</b></p>
                                <p class="center"><?php echo $student['gender']; ?></p>
                            </div>
                            <div class="col s12">
                                <p class="center"><b>State</b></p>
                                <p class="center"><?php echo $student['state']; ?></p>
                            </div>
                            <div class="col s12">
                                <p class="center"><b>Country</b></p>
                                <p class="center"><?php echo $student['country']; ?></p>
                            </div>
                            <div class="col s12">
                                <p class="center"><b>Date of birth</b></p>
                                <p class="center"><?php echo $student['dob']; ?></p>
                            </div>
                            <div class="col s12">
                                <p class="center"><b>E-mail</b></p>
                                <p class="center"><?php echo $student['email']; ?></p>
                            </div>
                            <div class="col s12">
                                <p class="center"><b>Phone</b></p>
                                <p class="center"><?php echo $student['phone']; ?></p>
                            </div>
                          </div>

                    </div>
                </div>
		      </div>
              <?php
			  }
			
			  
			  ?>
       

          <div class="col s12 m6" style="margin-top: 5%">
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
	  $query1="SELECT * FROM reg_users WHERE sid='$id'";
	  $result=mysqli_query($con,$query1);
	  $row=mysqli_fetch_array($result);
	  $o_pass=$row['password'];
	  if(($o_pass==$old_pass)&&($new_pass==$con_pass))
	  {
	  	$query = "UPDATE `reg_users` SET  `password` =  '$new_pass' WHERE  `reg_users`.`sid` ='$id'";
	  	echo $query;
      	$pass_edit = mysqli_query($con, $query);
	  	header('Location:studentdash.php');
	    echo "<script>alert('Successful!')</script>";
	  }
	  else
	  {
	    echo "<script>alert('check you data')</script>";
	  }
	 }
	?>