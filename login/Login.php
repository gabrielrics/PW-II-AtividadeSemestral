<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../CSS/Login.css">

</head>

<body>
    <div class="box">
        <span class="Borda"></span>
        <form action="locacao.php" method="post">
            

            <h2>Login</h2>
            <div class="inputbox">
                <input type="texto" required="Obrigatório"  name="TxUsuario">
                <span>Usuário</span>
                <i></i>

            </div>
            <div class="inputbox">
                <input type="Senha" required="Obrigatório" name="TxSenha">
                <span>Senha</span>
                <i></i>
            </div>
            <div class="Links">

                <a href="cadastro.php">Realizar cadastro</a>
                

            </div>

            <div class="Button">
                <input type="submit" value="Login">
            </div>

        </form>

    </div>
</body>

</html>