<?php include("conexao.php"); ?>

<?php

  $id = $_GET['x'];

  $stmt = $pdo->prepare("select * from tbfilme where idFilme='$id'");	
  $stmt ->execute();
  
  $row = $stmt ->fetch(PDO::FETCH_BOTH);

  return $row;
   
?>