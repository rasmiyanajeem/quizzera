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
        <div class="col s12 m6 offset-m3" style="margin-top: 5%">
            <div class="card hoverable" id="edit">
                <div class="card-content">
                <div class="row">
                <?php
				$id = $_GET['id'];
				$query="SELECT * FROM teacher_details WHERE tid='$id'";
				$query1=mysqli_query($con,$query);
			
				$row=mysqli_fetch_array($query1);
				if(isset($_POST['submit']))
	  			{
	   				$fname=$_POST['f_name'];
	   				$lname=$_POST['l_name'];
	   				$gender=$_POST['Gender'];
	   				$dept=$_POST['dept'];
	   				$email=$_POST['email'];
	   				$phone=$_POST['phone'];
	   				$country=$_POST['country'];
	   				$state=$_POST['state'];
	   				$dob=$_POST['dob'];
	  			    $query="UPDATE `teacher_details` SET `tfname`='$fname',`tlname`='$lname',`dept`='$dept',`email`='$email',`phone`='$phone',`gender`='$gender',`state`='$state',`country`='$country',`dob`='$dob' WHERE tid='$id'";
					
	   				mysqli_query($con,$query);
	   				
					
	   				echo "<script>alert('Successfully updated!')</script>";
					header("Location:admindash.php");

	   			}
				?>
                <?php
				 if (mysqli_num_rows($query1) > 0) {
				?>
                <form class="col s12"  method="post">
                            
                            <div class="input-field col s12">
                                <input id="first_name" type="text" name="f_name" value="<?php echo $row['tfname']?>" >
                                <label for="first_name">First Name</label>
                            </div>
                            
                            <div class="input-field col s12">
                                <input id="last_name" type="text" name="l_name" value="<?php echo $row['tlname']?>">
                                <label for="last_name">Last Name</label>
                            </div>
                            
                         	 <div class="input-field col s12">
                                <input id="Gender" type="text" name="Gender" value="<?php echo $row['gender']?>">
                                <label for="Gender">Gender</label>
                            </div>
                           
                            
                           <div class="input-field col s12">
                                <input id="dept" type="text" name="dept" value="<?php echo $row['dept']?>" >
                                <label for="dept">Department</label>
                            </div>
                            <div class="input-field col s12">
                                <input id="email" type="email" name="email" value="<?php echo $row['email']?>" >
                                <label for="email" data-error="wrong" data-success="right">Email</label>
                            </div>
                           <div class="input-field col s12">
                                <input id="phone" type="number" name="phone" value="<?php echo $row['phone']?>">
                                <label for="phone">Phone</label>
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
                        
                                <input type="date" name="dob" id="dob" value="<?php echo $row['dob']?>">
                               
                            </div>
                             <div class="input-field col s12">
                                <input class="btn col s12 c-gradient" type="submit" name="submit" value="UPDATE">
                            </div>
                             </form>
                         <?php
						 }
						 ?>
                </div>
				</div>
             </div>
          </div>
      </div>
</div>
</body>
</html>