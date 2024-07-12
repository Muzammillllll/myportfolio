<?php
	$host = 'localhost';
	$dbname = 'portfolio';
	$id = isset($_POST['id']); 
	$name = isset($_POST['name']);
	$email = isset($_POST['email']);
	$message = isset($_POST['message']);
	

	// Database connection
	$conn = new mysqli('localhost','root','','portfolio');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into contactme(id, name, email, message) 
		 values(?, ?, ?, ?)");
		$stmt->bind_param("isss", $id, $name, $email, $message);
		$stmt->execute();
		echo "Message Sent";
		$stmt->close();
		$conn->close();
	}
?>