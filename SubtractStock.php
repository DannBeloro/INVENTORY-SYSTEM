<?php

include('dbcon.php');
session_start();
if (isset($_POST['subtract'])) {

	$id = $_POST['id'];
	$code = $_POST['code'];
	$title = $_POST['title'];
	$price = $_POST['price'];
	$stocks = $_POST['stocks'];
	$subtractnumber = $_POST['subtractnumber'];

	if ($subtractnumber > $stocks) {

		
		header("Location: books.php?search=$title");
		$_SESSION['error'] = "danger";

	}else{

		$newstocks = $stocks - $subtractnumber;

		$sql = "UPDATE books SET stocks ='$newstocks' WHERE id ='$id'";
		mysqli_query($con, $sql);

		header("Location: books.php?search=$code");
		exit();

	}


}else{

	header("Location: books.php?search=$code");

}