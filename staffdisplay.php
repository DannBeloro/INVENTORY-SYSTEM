<?php
include('dbcon.php');
include('header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
   
<body>
    <div class="container">
    <button class="btn btn-primary my-5"><a href ="addstaff.php"
    class="text-light">ADD STAFF</a>
    </button> 

    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Password</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>

  <?php
 $sql="SELECT *FROM staffs";
 $result=mysqli_query($con,$sql);
 if ($result){
  while($row=mysqli_fetch_assoc($result)){
  $id=$row['id'];
  $name=$row['name'];
  $email=$row['email'];
  $mobile=$row['mobile'];
  $password=$row['password'];
  echo'<tr>
  <th scope="row">'.$id.'</th>
  <td>'.$name.'</td>
  <td>'.$email.'</td>
  <td>'.$mobile.'</td>
  <td>'.$password.'</td>
  <td>
  <button class="btn btn-primary"><a href="update.php"
  class="text-light">Update</a></button>
  <button class="btn btn-danger"><a href="delete.php?
  deleteid='.$id.'" class="text-light">Delete</a></button>
  </td>
</tr>'; 

 }
}
    
    ?>




  </tbody>
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