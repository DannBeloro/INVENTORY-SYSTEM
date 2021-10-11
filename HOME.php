<?php

$user = "root";
$password = "";
$database = "books";

 

$db = new mysqli ('localhost', $user, $password, $database);


if($db == false){
    echo "not connected";
}else{
    echo "tanginamo em";
}

?>