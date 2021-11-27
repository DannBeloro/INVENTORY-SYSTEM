<?php

include('dbcon.php');
session_start();
if (isset($_POST['add'])) {

	$id = $_POST['id'];
	$code = $_POST['code'];
	$title = $_POST['title'];
	$price = $_POST['price'];
	$stocks = $_POST['stocks'];
	$addnumber = $_POST['addnumber'];

		$newstocks = $stocks + $addnumber;

		$sql = "UPDATE books SET stocks ='$newstocks' , coursecode ='$code' , title ='$title' ,  price ='$price' WHERE id ='$id'";
		mysqli_query($con, $sql);

		header("Location: books.php?search=$code");
		exit();

	


}else{

	header("Location: books.php?search=$code");

}