<?php
	$idNum = $_POST['idNum'];
	$fullName = $_POST['fullName'];
	$role = $_POST['role'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$number = $_POST['number'];

	$conn = new mysqli('localhost','root','','login');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into account(userID, fullName, email, number, password, role) values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssi", $idNum, $fullName, $email, $number, $password, $role);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>