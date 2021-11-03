<?php
include('dbcon.php');?>
<title>ADMIN Side</title>
<!DOCTYPE html>
    <head>
    <link rel="stylesheet" type="text/css" href="design.css">
</head>
<body>
<div class="UMlogo">
<img src="img/UMlogo.png" style="width:14%">
<br>
   <div class ="header2"><br>
  <h1 class="h1staff">THE UNIVERSITY OF MANILA</h1>
    <h1 class="h2staff">Online Book Inventory with Tracking System</h1>
</div>
</html>
<head>
    <meta charset="UTF-8" >
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
   
<body>
    <div class= "mama">
    <button class="btn btn-dark"" text-align ="right"><a href ="addstaff.php"
    class="text-white">ADD STAFF</a>
    </button> 
    <a href="logout.php" class="btn btn-dark">Logout</a>
</div>
    
      
  <thead>
    <div class = "papa">
    <tr>
    <table class="table">
      <th scope="col">#</th>
      <th scope="col">Fullname</th>
      <th scope="col">Email</th>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <body>  
     
  <?php
  
 $sql="SELECT *FROM staffs";
 $result=mysqli_query($con,$sql);
 if ($result){
  while($row=mysqli_fetch_assoc($result)){
  $id=$row['id'];
  $fullname=$row['name'];
  $email=$row['email'];
  $username=$row['username'];
  $password=$row['password'];
  echo'<tr>
  <th scope="row">'.$id.'</th>
  <td>'.$fullname.'</td>
  <td>'.$email.'</td>
  <td>'.$username.'</td>
  <td>'.$password.'</td> 
  <td>
  <button class="btn btn-primary"><a href="stafflistupdate.php?
  updateid='.$id.'" class="text-light">Update</a></button>
  
  <button class="btn btn-danger"><a href="staffdelete.php?
  deleteid='.$id.'" class="text-light">Delete</a></button>
  </td>
</tr>'; 

 }
}
    
    ?>

  </body>
</table>
</div>

     <!-- Bootstrap CSS -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
     integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" 
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
 integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
  crossorigin="anonymous"></script>
</body>
</html>