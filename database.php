<?php

function database(){
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "sample_db";

	$conn = new mysqli($host, $user, $pass, $db);

	if($conn->error){
		echo $conn->error;
	}
	else{
		return $conn;
	}
}
?>