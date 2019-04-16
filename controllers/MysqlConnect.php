<?php


function myConnect(){
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db="usc-library";

	static $conn;
	$conn = mysqli_connect($servername, $username, $password,$db);

	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}else{
		//echo "Connected successfully";	
	}
	return $conn;
}



?>