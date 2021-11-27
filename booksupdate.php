<?php 
include('dbcon.php');
if(isset($_POST['submit'])){
    $id=$_POST['id'];
    $coursecode=$_POST['coursecode'];
    $title=$_POST['title'];
    $price=$_POST['price'];
    $stocks=$_POST['stocks'];



    $sql="UPDATE books set id='$id',coursecode='$coursecode',title='$title',price='$price',stocks='$stocks'"; 
    $result=mysqli_query($con,$sql);
    if ($result){
        // echo "Update Successfully";
     header ('location:bookslist.php' );
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

    <title>Books Update</title>
  </head>
  <body>
    <div class="container my-5">
    <form method="post">
    <div class="form-group">
    <label>Book ID</label>
    <input type="number" class="form-control" placeholder="Enter new  ID" name="number" autocomplete="off">
</div>  
  <div class="form-group">
    <label>Course Code</label>
    <input type="text" class="form-control" placeholder="Enter new  Course Code" name="name" autocomplete="off">
</div> 
<div class="form-group">
    <label>Descriptive Title </label>
    <input type="text" class="form-control" placeholder="Enter new Desciptive Title" name="name"  autocomplete="off">
    </div>
    <div class="form-group">
    <label>Price </label>
    <input type="text" class="form-control" placeholder="Enter new Price" name="number" autocomplete="off">
    </div>
    <div class="form-group">
    <label>Stocks </label>
    <input type="number" class="form-control" placeholder="Enter new Stocks" name="number" autocomplete="off">
    </div>
    
    <body>
    <div class="container">
    <button class="btn btn-primary my-5"name="submit"><a href ="booklist.php"
    class="text-light">Update</a>
    </button> 
   </div>
</form>
  </body>
</html>