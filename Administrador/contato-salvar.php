<?php  
    $NomeFilme = $_POST['txNomeFilme'];
    $Diretor = $_POST['txDiretor'];
    $OndeVer = $_POST['txOndeVer'];
    $Sinopse = $_POST['txSinopse'];
    $ImageInicio = $_POST['txImageInicio'];
    $ImagePrincipal = $_POST['txImageFinal'];
    $Genero = $_POST['txGenero'];
    $Tempo = $_POST['txTempo'];
    
    include("conexao.php");

    $stmt = $pdo->prepare("insert into tbfilme
    values(null,'$NomeFilme','$Diretor','$OndeVer','$Sinopse', '$Tempo', '$ImageInicio', '$ImagePrincipal', 'null')");	    
	$stmt ->execute();    

    header("location:contato.php");    
    
?>

