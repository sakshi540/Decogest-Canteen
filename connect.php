<?php
	// Database connection
	$conn = new mysqli('localhost','root','','food_db');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(firstName, lastName, Novalues, email, pass, phoneNo) values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssissi", $firstName, $lastName, $Novalues, $email, $password, $phoneNo);
		$execval = $stmt->execute();
		echo $execval;
		echo "Your Table is booked...";
		$stmt->close();
		$conn->close();
	}
?>
