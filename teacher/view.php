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
        <a href="teacherdash.php" class="brand-logo">Teachers Dashboard</a>
            <ul id="nav-mobile" class="right">
          
            <li><a href="pass_edit.php">Change password</a></li>
             <li><a href="../logout.php">Logout</a></li>
           </ul>
		</div>
    </div>
	
</nav>
<?php
$id = $_GET['id'];
$query1= "SELECT * FROM test WHERE qid='$id'";
$query=" SELECT * FROM questions WHERE qid='$id'";
$result1=mysqli_query($con,$query1) ;
$result2=mysqli_query($con,$query) ;
$xx = mysqli_fetch_array($result1);

$tot=$xx['totquestions'];
?>
<div class="container">
	<div class="row">
        <div class="col s12 m12 " style="margin-top: 5%">
            <div class="card hoverable" id="login">
                <div class="card-content">
                <div class="row">
                
				<?php 
				 
				 
						 while($row = mysqli_fetch_array($result2)) 
							 {
					?>
				 
                 <div class="col s12">
                 <p><b>Question no:</b> <?php echo $row['qno']?></p><br>
                 </div>
                 <div class="col s12">
                 <p> <b>Question:</b><br><?php echo $row['question']?></p><br>
                 </div>
                 <div class="col s12">
                 <p> <b>Option 1:</b><?php echo $row['op1']?></p>
                 </div>
                 <div class="col s12">
                 <p><b> Option 2:</b><?php echo $row['op2']?></p>
                 </div>
                 <div class="col s12">
                 <p> <b>Option 3:</b>b<?php echo $row['op3']?></p>
                 </div>
                 <div class="col s12">
                 <p><b> Option 4:</b><?php echo $row['op4']?></p><br>
                 </div>
                 <div class="col s12">
                 <p> <b>Correct Answer:</b><?php echo $row['rans']?></p><br><hr>
                 </div>
                
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
