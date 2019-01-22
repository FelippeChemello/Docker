<?php


  echo "Teste KingHost";

  $servername = "192.168.0.33:3306";
  $database = "teste";
  $username = "teste";
  $password = "1234567";
  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $database);
  // Check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }
  echo "Connected successfully";
  mysqli_close($conn);


?>

