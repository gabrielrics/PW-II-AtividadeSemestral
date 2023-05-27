<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/Administrador.css">

    <title>Administrador</title>
    <?php include('cabecalho.php'); ?>
</head>
    <body>

        <section>

            <form action="contato-alterar.php" method="post">      
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
                    <textarea placeholder="Sinopse" name="txSinopse">
                    <?php echo @$_GET['Sinopse']; ?>"
                    </textarea>
                </div>

                <div>
                    <input type="submit" value="Salvar" />
                </div>
            </form>
            
        </section>
        
        <section>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">NomeFilme</th>
                <th scope="col">Diretor</th>
                <th scope="col">OndeVer</th>
                <th scope="col">Sinopse</th>
                <th scope="col">Ações</th>

                
                
            </tr>
            </thead>
            <tbody>
            <?php
            include ("conexao.php");
                $stmt = $pdo->prepare("select * from tbfilme");	
                $stmt ->execute();
                
                while($row = $stmt ->fetch(PDO::FETCH_BOTH)){
                  echo "<tr class='celula'>";
                    echo "<td> $row[0] </td>";						
                    echo "<td> $row[1] </td>";						
                    echo "<td> $row[2] </td>";						
                    echo "<td> $row[3] </td>";											
                    echo "<td> $row[4] </td>";
                    echo "<td> $row[5] </td>";
                    echo "<td> 
                            <a href='?id=$row[0]&nomefilme=$row[1]&diretor=$row[2]&ondever=$row[3]&Sinopse=$row[4]&acoes=$row[5]'> Editar </a>
                            <a href='contato-remover.php?id=$row[0]'> Remover </a>
                          </td>";
                  echo "</tr>";
                }	
            ?>
            </tbody>
        </table>
    </section>
        
 
    </body>
</html>