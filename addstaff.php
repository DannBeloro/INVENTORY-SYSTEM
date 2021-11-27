<?php 
include('dbcon.php');
include('session.php'); 
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    
  $sql="INSERT INTO staffs (name,email,username,password) values('$name','$email','$username','$password')";
    $result=mysqli_query($con,$sql);
    if ($result){
      header ('location:staffdisplay.php' );
        }else {
        die(mysqli_error ($con));
    }
    
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Staffs</title>
  </head>
  <body>
    <div class="container my-5">
    <form method="post"> 
  <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" placeholder="Enter name" name="name" autocomplete="off">
</div> 
<div class="form-group">
    <label>Email </label>
    <input type="email" class="form-control" placeholder="Enter email" name="email"  autocomplete="off">
    </div>
    <div class="form-group">
    <label>Username </label>
    <input type="text" class="form-control" placeholder="Enter username" name="username" autocomplete="off">
    </div>
    <div class="form-group">
    <label>Password </label>
    <input type="password" class="form-control" placeholder="Enter password" name="password" autocomplete="off">
    </div>
    
    <body>
    <div class="container">
    <button class="btn btn-primary my-5"name="submit"><a href ="staffdisplay.php"
    class="text-light">ADD</a>
    </button> 
</div>
</form>
  </body>
</html>