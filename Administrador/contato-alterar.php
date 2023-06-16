<?php
    $NomeFilme = $_POST['txNomeFilme'];
    $Diretor = $_POST['txDiretor'];
    $OndeVer = $_POST['txOndeVer'];
    $Sinopse = $_POST['txSinopse'];
    $ImageInicio = $_POST['txImageInicio'];
    $ImagePrincipal = $_POST['txImageFinal'];
    $Tempo = $_POST['txTempo'];
    $Genero = $_POST['txGenero'];
    $id = $_POST['txIdContato'];

    include("conexao.php");

    $stmt = $pdo->prepare("
        UPDATE tbfilme SET
            NomeFilme = :nome,
            Diretor = :diretor,
            OndeVer = :ondever,
            Sinopse = :sinopse,
            ImageInicio = :imageInicio,
            ImagePrincipal =:imagePrincipal,
            Tempo = :tempo,
            Genero = :genero,
            WHERE idFilme = :id
    ");
    $stmt->bindParam(':nome', $NomeFilme);
    $stmt->bindParam(':diretor', $Diretor);
    $stmt->bindParam(':ondever', $OndeVer);
    $stmt->bindParam(':sinopse', $Sinopse);
    $stmt->bindParam(':imageInicio', $ImageInicio);
    $stmt->bindParam(':imagePrincipal', $ImagePrincipal);
    $stmt->bindParam(':tempo', $Tempo);
    $stmt->bindParam(':genero', $Genero);
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    header("Location: contato-lista.php");
    exit();

    
?>
