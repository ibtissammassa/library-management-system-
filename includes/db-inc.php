<?php 
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "library_db";

	$conn = mysqli_connect($host, $user, $pass, $db);
    if(!$conn){
        echo"check your database connection";
    }
?>