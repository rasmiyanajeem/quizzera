<?php
  	
	 include('config.php');
	  
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
					$query1=mysqli_query($con,"INSERT INTO `admin_details`(`aid`, `fname`, `lname`, `email`, `phone`, `gender`, `dob`, `state`, `country`) 		VALUES 	('$regno','$fname','$lname','$email','$phone,'$gender','$dob','$state','$country')");
  					$query2=mysqli_query($con," INSERT INTO `reg_users`(`aid`, `username`, `password`, `designation`) VALUES('regno','$username','$email', '$password')");
		             echo $query1;
					 echo $query2;
  					header("Location:login.php");
			
				}
		}
	}
?>