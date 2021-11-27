
<?php 
include('dbcon.php');
if(isset($_POST['submit'])){
    $id=$_POST['id'];
    $coursecode=$_POST['coursecode'];
    $title=$_POST['title'];
    $price=$_POST['price'];
    $stocks=$_POST['stocks'];
    
  $sql="INSERT INTO books (id,coursecode,title,price,stocks) values('$id','$coursecode','$title','$price','$stocks')";
    $result=mysqli_query($con,$sql);
    if ($result){
      header ('location:Books.php' );
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

    <title>Add Books</title>
  </head>
  <body>
    <div class="container my-5">
    <form method="post"> 
    <div class="form-group">
    <label>Book ID</label>
    <input type="number" class="form-control" placeholder="Enter Book ID " name="book id" autocomplete="off">
</div> 
  <div class="form-group">
    <label>Course code</label>
    <input type="text" class="form-control" placeholder="Enter course code" name="coursecode" autocomplete="off">
</div> 
<div class="form-group">
    <label>Descriptive Title </label>
    <input type="text" class="form-control" placeholder="Enter Book title" name="title"  autocomplete="off">
    </div>
    <div class="form-group">
    <label>Price </label>
    <input type="text" class="form-control" placeholder="Enter price" name="price" autocomplete="off">
    </div>
    <div class="form-group">
    <label>Stocks</label>
    <input type="text" class="form-control" placeholder="Enter stocks" name="stocks" autocomplete="off">
    </div>
    
    <body>
    <div class="container">
    <button class="btn btn-primary my-5"name="submit"><a href ="Books.php"
    class="text-light">ADD </a>
    </button> 
    </div>
   </form>
  </body>
 </html>
