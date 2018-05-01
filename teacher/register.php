<?php
session_start();
 include('../config.php');
	  
	  if(isset($_POST['submit']))
	  {
	   $fname=$_POST['f_name'];
	   $lname=$_POST['l_name'];
	   $email=$_POST['email'];
	   $username=$_POST['username'];
	   $password1=$_POST['password1'];
	   $password2=$_POST['password2'];
	   $gender=$_POST['Gender'];
	   $phone=$_POST['phone'];
	   $designation=$_POST['designation'];
	   $country=$_POST['country'];
	   $state=$_POST['state'];
	   $dept=$_POST['dept'];
	   $dob=$_POST['dob'];
	   $query = mysqli_query($con,"SELECT username from reg_users where username='$username'");
		if(mysqli_num_rows($query)!=0)
		{
 				 echo "<script>alert('username already exit!')</script>";
		}
		else
		{
				if($password1!=$password2)
				{
  				echo "<script>alert('password does not matched!')</script>";
				}
				else
				{ 
					$query1="INSERT INTO teacher_details(tid, tfname, tlname,dept,email, phone, gender, state, country,dob) VALUES	('$username','$fname','$lname','$dept','$email','$phone','$gender','$state','$country','$dob')";
					

					mysqli_query($con,$query1) or die(mysqli_error($con));
  					$query2="INSERT INTO reg_users(`tid`, `username`, `password`, `designation`) VALUES('$username','$username','$password1','$designation')";
					
					mysqli_query($con,$query2) or die(mysqli_error($con));
					
					echo "<script>alert('successful')</script>";
  					header("Location:../admin/admindash.php");
			
				}
		}
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
        <a href="../admin/admindash.php" class="brand-logo">Admin Dashboard</a>
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
            <div class="card hoverable" id="register">
                <div class="card-content">
                    <span class="card-title center-align">Teacher Registration</span>


                    <div class="row">
                        <form class="col s12"  action="register.php" method="post">
                            
                            <div class="input-field col s12">
                                <input id="first_name" type="text" name="f_name" pattern='[A-Za-z\\s]*' required>
                                <label for="first_name">First Name</label>
                            </div>
                            
                            <div class="input-field col s12">
                                <input id="last_name" type="text" name="l_name" required>
                                <label for="last_name">Last Name</label>
                            </div>
                            <div class="input-field col s12">
                                <input id="regno" type="text" name="username" required>
                                <label for="regno">Register Number:</label>
                            </div>
                         	<div class="col s12">
                            <label for="Gender" style="font-size:16px"> Gender</label>
                            </div>
                           
                             <div class = "col s12">
                  				
							<select class="browser-default" name="Gender" select="selected">
                            <option value="male"> Male</option>
							<option value="female">Female</option>
                            <option value="other">Other</option>
							</select>
                 
              			    </div>
                            <div class="col s12">
                            <label for="designation" style="font-size:16px"> Designation</label>
                            </div>
                            <div class="col s12">
							<select class="browser-default" name="designation" select="selected" >
                            <option value="student"> Student </option>
							<option value="teacher" selected>Teacher</option>
							</select>
							</div>
                            
                           <div class="input-field col s12">
                                <input id="dept" type="text" name="dept" required>
                                <label for="dept">Department</label>
                            </div>
                            <div class="input-field col s12">
                                <input id="email" type="email" name="email" required>
                                <label for="email" data-error="wrong" data-success="right">Email</label>
                            </div>
                           <div class="input-field col s12">
                                <input id="phone" type="text" name="phone" maxlength="10" required>
                                <label for="phone">Phone</label>
                            </div>
                            <div class="input-field col s12">
                                <input id="password1" type="password" name="password1" required>
                                <label for="password1">Password</label>
                            </div>
							<div class="input-field col s12">
                                <input id="password2" type="password" name="password2" required>
                                <label for="password2">Confirm Password</label>
                            </div>
                             <div class="col s12">
                            <label for="state" style="font-size:16px"> State</label>
                            </div>
                             <div class="col s12">
							<select class="browser-default" name="state">
                             <option value="Andra Pradesh"> Andra Pradesh </option>
							<option value="Arunachal Pradesh"> Arunachal Pradesh </option>
                           <option value=" Assam">  Assam </option> 
                            <option value=" Bihar">  Bihar </option>
                            <option value=" Chhattisgarh">  Chhattisgarh</option>
                           <option value=" Goa"> Goa </option> 
                            <option value=" Gujarat">  Gujarat </option>
                           <option value=" Haryana"> Haryana </option> 
                            <option value=" Himachal Pradesh">  Himachal Pradesh </option>
                            <option value=" Jammu and Kashmir">  Jammu and Kashmir </option>
                            <option value=" Jharkhand">  Jharkhand </option>
                            <option value=" Karnataka">  Karnataka </option>
                            <option value=" Kerala" selected>  Kerala </option>
                           <option value=" Madya Pradesh">  Madya Pradesh </option> 
                            <option value=" Maharashtra">  Maharashtra </option>
                            <option value=" Manipur">  Manipur</option>
                            <option value=" Meghalaya">  Meghalaya </option>
                            <option value="Mizoram">  Mizoram </option>
                           <option value=" Nagaland">  Nagaland </option> 
                            <option value=" Orissa">  Orissa </option>
                            <option value=" Punjab">  Punjab </option>
                            <option value=" Rajasthan">  Rajasthan </option>
                            <option value=" Sikkim">  Sikkim </option>
                            <option value=" Tamil Nadu">  Tamil Nadu </option>
                            <option value=" Tripura">  Tripura </option>
                            <option value=" Uttaranchal">  Uttaranchal </option>
                            <option value=" Uttar Pradesh">  Uttar Pradesh </option>
                            <option value=" West Bengal"> West Bengal</option>
                            </select>
							</div>
                             <div class="col s12">
                            <label for="country" style="font-size:16px"> Country</label>
                            </div>
                             <div class="col s12">
							<select class="browser-default" name="country">
                            <option value="India" selected > India</option>
                            </select>
							</div>
                              <div class="input-field col s12 ">
                                
                                <label for="dob">DOB</label>
                              </div>
                            <div class="input-field col s12 ">
                                <input type="date" name="dob" id="dob">
                               
                            </div>
                             <div class="input-field col s12">
                                <input class="btn col s12 c-gradient" type="submit" name="submit" value="Register">
                            </div>
                             </form>
                    </div>
                </div>
             
               
            </div>
      
    </body>
  </html>     