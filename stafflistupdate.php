<?php 
include('dbcon.php');
$id=$_GET['updateid'];
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    
  $sql="UPDATE staffs set id=$id,name='$name',email='$email',username='$username',password='$password'"; 
    $result=mysqli_query($con,$sql);
    if ($result){
        // echo "Update Successfully";
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
    <input type="text" class="form-control" placeholder="Enter new Name" name="name" autocomplete="off">
</div> 
<div class="form-group">
    <label>Email </label>
    <input type="email" class="form-control" placeholder="Enter new Email" name="email"  autocomplete="off">
    </div>
    <div class="form-group">
    <label>Username </label>
    <input type="text" class="form-control" placeholder="Enter new Username" name="username" autocomplete="off">
    </div>
    <div class="form-group">
    <label>Password </label>
    <input type="password" class="form-control" placeholder="Enter new Password" name="password" autocomplete="off">
    </div>
    
    <body>
    <div class="container">
    <button class="btn btn-primary my-5"name="submit"><a href ="staffdisplay.php"
    class="text-light">Update</a>
    </button> 
</div>
</form>
  </body>
</html>