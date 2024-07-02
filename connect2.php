<?php
	$Name = $_POST['Name'];
	$Telephone = $_POST['Telephone'];
	$jenisReservasi = $_POST['jenisReservasi'];
	$waktu = $_POST['waktu'];

	$conn = new mysqli('localhost','root','','reservation');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into reservers(Name, Telephone, jenisReservasi, waktu) values(?, ?, ?, ?)");
		$stmt->bind_param("siss", $Name, $Telephone, $jenisReservasi, $waktu);
		$execval = $stmt->execute();
		echo "Reservation Complete";
		$stmt->close();
		$conn->close();
        header('Location: index.html');
	}
?>