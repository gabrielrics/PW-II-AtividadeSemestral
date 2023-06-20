<?php include("conexao.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../Images/icon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
    <title>Lista de registos</title>
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
                    <input type="text" placeholder="Tempo de filme" name="txTempo" value="<?php echo @$_GET['Tempo filme']; ?>" />
                </div>
                
                <div>
                    <input type="text" placeholder="link da imagem de início" name="txImageInicio" value="<?php echo @$_GET['imagem de início']; ?>" />
                </div>

                <div>
                    <input type="text" placeholder="link da imagem principal" name="txImagePrincipal" value="<?php echo @$_GET['imagem principal']; ?>" />
                </div>

                <div>
                    <select name="idGenero" id="genero">
                        <option value="1">Terror</option>
                        <option value="2">Comédia</option>
                        <option value="3">Romance</option>
                    </select>
                    
                </div>

                <div>
                    <textarea placeholder="Sinopse" name="txSinopse">
                    <?php echo @$_GET['Sinopse'];?> </textarea>
                </div>

                <div>
                    <input type="submit" value="Salvar" />
                </div>
            </form>
            

<!-- Essa é a parte que será exibido o banco de dados -->

 
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">NomeFilme</th>
                <th scope="col">Diretor</th>
                <th scope="col">OndeVer</th>
                <th scope="col">Sinopse</th>
                <th scope="col">Tempo</th>
                <th scope="col">Imagem início</th>
                <th scope="col">Imagem Principal</th>
                <th scope="col">Gênero</th>
                <th scope="col">Ações</th>

                
            </tr>
            </thead>
            <tbody>
            <?php
                $stmt = $pdo->prepare("select * from tbfilme");	
                $stmt ->execute();
                
                while($row = $stmt ->fetch(PDO::FETCH_BOTH)){
                  echo "<tr class='celula'>";
                    echo "<td> $row[1] </td>";						
                    echo "<td> $row[2] </td>";						
                    echo "<td> $row[3] </td>";											
                    echo "<td> $row[4] </td>";
                    echo "<td> $row[5] </td>";
                    echo "<td> $row[6] </td>";
                    echo "<td> $row[7] </td>";
                    echo "<td> $row[8] </td>";
                    
                    echo "<td> 
                            <a href='?id=$row[0]&NomeFilme=$row[1]&Diretor=$row[2]&OndeVer=$row[3]&Sinopse=$row[4]&tempo=$row[5]&imageInicio=$row[6]&imagePrincipal=$row[7]&Genero=$row[8]'> Editar </a>
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