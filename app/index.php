<?php


  echo "Teste KingHost";

  $banco = "teste";
  $usuario = "teste";
  $senha = "1234567";
  $hostname = "localhost:3306";
  $conn = mysqli_connect($hostname,$usuario,$senha); mysqli_select_db($banco) or die( "Não foi possível conectar ao banco MySQL");
  if (!$conn) {echo "Não foi possível conectar ao banco MySQL.
  "; exit;}
  else {echo "Parabéns!! A conexão ao banco de dados ocorreu normalmente!.
  ";}
  mysql_close(); 
  


?>

