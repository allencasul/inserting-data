<?php

include "database.php";
$conn = database();

if(isset($_POST['submit'])){

	$userMessage = htmlentities(mysqli_real_escape_string($conn, $_POST['message']));

	if($userMessage == NULL){
		echo "<script>alert('Message Empty!, please try again.')</script>";
		echo "<script>window.open('index.html?=message=empty!','_self')</script>";
	}
	else{
		$sql = "INSERT INTO sample_container (user_message) VALUES ('$userMessage')";
		$conn->query($sql) or die ($conn->error);
		header("Location: index.html?=Successfully=Inserted!");
	}
}
?>