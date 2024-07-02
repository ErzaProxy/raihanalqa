<?php
  $stars = $_POST['rate'];
  $namaRate = $_POST['namaRate'];
  $deskripsiRate = $_POST['deskripsiRate'];


  // Database connection
  $conn = new mysqli('localhost','root','','reviews');
  if($conn->connect_error){
	  echo "$conn->connect_error";
	  die("Connection Failed : ". $conn->connect_error);
  } else {
	  $stmt = $conn->prepare("insert into reviewdatabase(stars, name, deskripsi) values(?, ?, ?)");
	  $stmt->bind_param("sss", $stars, $namaRate, $deskripsiRate);
	  $execval = $stmt->execute();
	  echo "Thanks for your Reviews, Go Back to The Main";
	  $stmt->close();
	  $conn->close();
	  header('index.html');
	}
?>