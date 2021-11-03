<?php
include('dbcon.php');?>
<title>Book List</title>
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
<div>   
    <div class= "header3">
    <button class="btn btn-dark"name="submit"><a href ="addbooks.php" class="text-light">ADD </a> </button> 
    <button class="btn btn-dark"name="submit"><a href ="booklist.php" class="text-light">BOOKLIST </a></button>
    <button class="btn btn-dark"name="submit"><a href ="staffprofile.php" class="text-light">PROFILE </a></button> 

</div>
      
  <thead>
    <div class = "papa">
    <tr>
    <table class="table">
      <th scope="col">Book ID</th>
      <th scope="col">Course code</th>
      <th scope="col">Descriptive title</th>
      <th scope="col">Price</th>
      <th scope="col">Stocks</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <body>  
     
  <?php
  
 $sql="SELECT *FROM books";
 $result=mysqli_query($con,$sql);
 if ($result){
  while($row=mysqli_fetch_assoc($result)){
  $id=$row['id'];
  $coursecode=$row['coursecode'];
  $title=$row['title'];
  $price=$row['price'];
  $stocks=$row['stocks'];
  echo'<tr>
  <th>'.$id.'</th>
  <td>'.$coursecode.'</td>
  <td>'.$title.'</td>
  <td>'.$price.'</td>
  <td>'.$stocks.'</td> 
  <td>
  <button class="btn btn-primary"><a href="booklistupdate.php?
  updateid='.$id.'" class="text-light">Update</a></button>
  
  <button class="btn btn-danger"><a href="booksdelete.php?
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