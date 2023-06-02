<?php  
    $NomeFilme = $_POST['txNomeFilme'];
    $Diretor = $_POST['txDiretor'];
    $OndeVer = $_POST['txOndeVer'];
    $Sinopse = $_POST['txSinopse'];
    
    include("conexao.php");

    $stmt = $pdo->prepare("
    uptade tbfilme set
    NomeFilmeFilme='$NomeFilme',
    DiretorFilme='$Diretor',
    OndeVerFilme='$Diretor',
    SinopseFilme='$Sinopse',
    where idFilme='$id';
");
	$stmt ->execute();    

    header("location:contato-lista.php");    
    
?>