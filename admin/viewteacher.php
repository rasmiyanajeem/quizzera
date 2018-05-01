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
       <div class="col s12 m6 offset-m3" style="margin-top: 1%">
        <div class="card hoverable" id="view">
           <div class="card-content">
			<div class="row">
                    <form class="col s12" action="" method="post">
                        <div class="input-field col s10">
                            <input id="t_id" type="text" name="t_id" required>
                            <label for="t_id">Enter teacher ID</label>
                        </div>

                        <div class="input-field col s12">
                            <input class="btn col s12 c-gradient" type="submit"
                                   name="Submit" value="View">
                        </div>
                    </form>
               </div>
	 	    </div>
        </div>
      </div>
    </div>
 </div>
    <div class="row">
	 <?php
		if (isset($_POST['Submit'])) 
		{
			$t_id = $_POST['t_id'];
            $res_profile = mysqli_query($con, "SELECT * FROM  `teacher_details` WHERE  `tid` ='$t_id'");
            $teacher= mysqli_fetch_array($res_profile);
		
  
		if (mysqli_num_rows($res_profile ) > 0) {
            ?>
             <div class="col s12 m6 offset-m3" style="margin-top: 1%">
             <div class="card hoverable" id="view">
                <div class="card-content">
                        <span class="card-title center-align"><?php echo $teacher['tfname'] . " " .$teacher['tlname']; ?></span>

                        <div class="row">

                            <div class="col s12">
                                <p class="center"><b>Department</b></p>
                                <p class="center"><?php echo $teacher['dept']; ?></p>
                            </div>
                            <div class="col s12">
                                <p class="center"><b>E-mail</b></p>
                                <p class="center"><?php echo $teacher['email']; ?></p>
                            </div>
                            <div class="col s12">
                                <p class="center"><b>Phone</b></p>
                                <p class="center"><?php echo $teacher['phone']; ?></p>
                            </div>
                            <div class="col s12">
                                <p class="center"><b>Gender</b></p>
                                <p class="center"><?php echo $teacher['gender']; ?></p>
                            </div>
                            <div class="col s12">
                                <p class="center"><b>State</b></p>
                                <p class="center"><?php echo $teacher['state']; ?></p>
                            </div>
                            <div class="col s12">
                                <p class="center"><b>Country</b></p>
                                <p class="center"><?php echo $teacher['country']; ?></p>
                            </div>
                            <div class="col s12">
                                <p class="center"><b>Date of birth</b></p>
                                <p class="center"><?php echo $teacher['dob']; ?></p>
                            </div>
                          </div>

                    </div>
                </div>
		      </div>
              <?php
			  }
			  else
	            {
				echo "<script>alert('Check the id')</script>";
				}
			  }
			  ?>
        </div>
        </div>
        </body>
        </html>