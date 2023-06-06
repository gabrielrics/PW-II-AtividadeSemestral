<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/Administrador.css">
    <link rel="icon" href="../Images/icon.png">


    <title>Administrador</title>
    <?php include('cabecalho.php'); ?>
</head>
    <body>

        <section>

            <form action="contato-salvar.php" method="post">      
            <div>
                    <input type="hidden"  name="txIdContato" value="<?php echo @$_GET['idFilme']; ?>" />
                </div>	

                <div>
                    <input type="text" placeholder="Nome do filme" name="txNomeFilme" value="<?php echo @$_GET['NomeFilme']; ?>" />
                </div>		

                <div>
                    <input type="text" placeholder="Diretor" name="txDiretor" value="<?php echo @$_GET['Diretor']; ?>" />
                </div>		

                <div>
                    <input type="text" placeholder="Onde ver" name="txOndeVer" value="<?php echo @$_GET['Onde ver']; ?>" />
                </div>		

                <div>
                    <input type="text" placeholder="Tempo de filme" name="txTempo" value="<?php echo @$_GET['Onde ver']; ?>" />
                </div>		


                <div>
                    <textarea placeholder="Sinopse" name="txSinopse">
                    <?php echo @$_GET['Sinopse']; ?>"
                    </textarea>
                </div>

                <div>
                    <input type="submit" value="Salvar" />
                </div>
            </form>
            
        </section>
        
 
    </body>
</html>