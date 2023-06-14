<?php
    $NomeFilme = $_POST['txNomeFilme'];
    $Diretor = $_POST['txDiretor'];
    $OndeVer = $_POST['txOndeVer'];
    $Sinopse = $_POST['txSinopse'];
    $Tempo = $_POST['txTempo'];
    $Image = $_POST['txImage'];
    $id = $_POST['txIdContato'];

    include("conexao.php");

    $stmt = $pdo->prepare("
        UPDATE tbfilme SET
            NomeFilme = :nome,
            Diretor = :diretor,
            OndeVer = :ondever,
            Sinopse = :sinopse,
            Tempo = :tempo,
            Image = :image,
            WHERE idFilme = :id
    ");
    $stmt->bindParam(':nome', $NomeFilme);
    $stmt->bindParam(':diretor', $Diretor);
    $stmt->bindParam(':ondever', $OndeVer);
    $stmt->bindParam(':sinopse', $Sinopse);
    $stmt->bindParam(':tempo', $Tempo);
    $stmt->bindParam(':image', $Image);
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    header("Location: contato-lista.php");
    exit();

    
?>
