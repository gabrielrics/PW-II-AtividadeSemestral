<?php  
    $NomeFilme = $_POST['txNomeFilme'];
    $Diretor = $_POST['txDiretor'];
    $OndeVer = $_POST['txOndeVer'];
    $Sinopse = $_POST['txSinopse'];
    $Tempo = $_POST['txTempo'];
    
    include("conexao.php");

    $stmt = $pdo->prepare("insert into tbfilme
    values(null,'$NomeFilme','$Diretor','$OndeVer','$Sinopse','null', '$Tempo')");	    
	$stmt ->execute();    

    header("location:contato.php");    
    
?>