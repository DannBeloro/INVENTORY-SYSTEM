<?php
	include 'dbcon.php';
  if(isset($_GET['deleteid'])){
       $id=$_GET['deleteid'];

  $sql = "DELETE FROM books WHERE id=$id";
  $result=mysqli_query($con,$sql);
  if($result) { 
      // echo "deleted successfully";
    header('location:booklist.php');
}else{
 die (mysqli_error($coon)); 
}
  }
   ?>