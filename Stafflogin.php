<?php session_start(); ?>
<?php include('dbcon.php'); ?>
<html>
<head>
<title>STAFF</title>
<link rel="stylesheet" type="text/css" href="design.css">
</head>
<body>
<div class="UMlogo">
<img src="img/UMlogo.png" style="width:15%">

   <div class ="header1">
  <h1 class="h1staff">THE UNIVERSITY OF MANILA</h1>
    <h1 class="h2staff">Online Book Inventory with Tracking System</h1>
    
<div class="form-wrapper">
	
  
  <form action="#" method="post">
    <h3>STAFF</h3>
	
    <div class="form-item">
		<input type="text" name="user" required="required" placeholder="Username" autofocus required></input>
    </div>
    
    <div class="form-item">
		<input type="password" name="pass" required="required" placeholder="Password" required></input>
    </div>
    
    <div class="button-panel">
		<input type="submit" class="button" title="Log In" name="login" value="Login"></input>
    </div>
  </form>
  <?php
	if (isset($_POST['login']))
		{
			$username = mysqli_real_escape_string($con, $_POST['user']);
			$password = mysqli_real_escape_string($con, $_POST['pass']);		
			$query 		= mysqli_query($con, "SELECT * FROM staffs WHERE  password='$password' and username='$username'");
			$row		= mysqli_fetch_array($query);
			$num_row 	= mysqli_num_rows($query);
			
			if ($num_row > 0) 
				{			
					$_SESSION['user_id']=$row['user_id'];
					header('location:Books.php');
					
				}
			else
				{
					echo 'Invalid Username and Password Combination';
				}
		}
  ?>

  <div class="reminder">

    <p><a href="#">Forgot password?</a></p>
  </div>
  
</div>

</body>
</html>