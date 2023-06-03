<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de cadastro</title>
    <link href="../CSS/login.css" rel="stylesheet">

</head>
<body>
    <div class="box">
        <span class="Borda"></span>
        <form action="index.php" method="post">
            

            <form action="exibirDados.php" method="post">
        <input type="text" placeholder="E-mail" name="TxEmail" />
        <input type="text" placeholder="Senha" name="TxSenha" />
        <input type="text" placeholder="Repita senha" name="TxRepitaSenha"/>
        <input type="submit" value="enviar dados" />
    </form>

    </div>
</body>
</html>