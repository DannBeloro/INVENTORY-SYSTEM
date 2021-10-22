<?php session_start(); ?>
<?php include('dbcon.php'); ?>
<html>
<head>
<title>ADMIN</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="umlogo">
  <img src="img/umlogo.png" alt="UM LOGO" width="200" height="150">
   
	  
  <div class = "title">
  <h1>THE UNIVERSITY OF MANILA</h1>
        <h1>BOOK INVENTORY</h1>
    
    
<div class="form-wrapper">
	
  
  <form action="#" method="post">
    <h3>ADMIN</h3>
	
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
			
			$query 		= mysqli_query($con, "SELECT * FROM users WHERE  password='$password' and username='$username'");
			$row		= mysqli_fetch_array($query);
			$num_row 	= mysqli_num_rows($query);
			
			if ($num_row > 0) 
				{			
					$_SESSION['user_id']=$row['user_id'];
					header('location:staffdisplay.php');
					
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