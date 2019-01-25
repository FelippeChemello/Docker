<?php

  echo "Teste KingHost";

  $servername = "mysql";
  $username = "teste";
  $password = "1234567";

  // Create connection
  $conn = mysqli_connect($servername, $username, $password);

  // Check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }
  echo "Connected successfully";

?>

