<?php
session_start();
include('../config.php');
 if(!isset($_SESSION['username']))
	  {
	   header("Location:login.php");
	  }

?>
<?php
	if(isset($_POST['Submit']))
	{
	  $testid = $_POST['testid'];
	  $sid=$_SESSION['userid'];
	  $query="SELECT * FROM result WHERE qid='$testid' AND sid='$sid'";
	  $result= mysqli_query($con,$query);
	  $query1="SELECT * FROM questions WHERE qid='$testid'";
	  $result1= mysqli_query($con,$query1);
	  if(mysqli_num_rows($result1)>0)
	  {
	  	if(mysqli_num_rows($result)>0)
	  	{
	  		echo "<script>alert('Test already attended!')</script>";
	  	}
	
   		 else
	 	{
	  		header('Location:taketest.php?testid='.$testid);
	   
	 	}
	 }
	 else
	  {echo "<script>alert('Check the test id')</script>";}
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
            <a href="studentdash.php" class="brand-logo">Student's Dashboard</a>
            <ul id="nav-mobile" class="right">
             
             <li><a href="../logout.php">Logout</a></li>
            </ul>

        </div>
    </div>
</nav>
<div class="container">
	<div class="row">
        <div class="col s12 m6 offset-m3 " style="margin-top: 5%">
            <div class="card hoverable" id="test">
                <div class="card-content">
                 <span class="card-title center-align">Enter Test ID</span>
                  <div class="row">
                   <form class="col s12" action="" method="post">
                                <div class="input-field col s12">
                                    <input id="testid" type="text" name="testid" required>
                                   
                                </div>
                                <div class="input-field col s12">
                                    <input class="btn col s12 c-gradient" type="submit"
                                           name="Submit" value="Take test">
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

	