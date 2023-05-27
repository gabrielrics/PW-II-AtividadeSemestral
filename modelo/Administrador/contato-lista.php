<?php include("conexao.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
    <title>Document</title>
</head>
<body>





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

            


           
            <?php
        $stmt = $pdo->prepare("select * from tbFilme");	
        $stmt ->execute();
        
        while($row = $stmt ->fetch(PDO::FETCH_BOTH)){
    ?>    
            <tr>                
                <td>
                    <?php echo $row[1]; ?>
                </td>    
                <td>
                    <h1> <?php echo $row[2]; ?> </h1>                    
                </td>    
                <td>
                    <h1> <?php echo $row[3]; ?> </h1>                    
                </td>
        </tr>

    <?php }	?>
           
        </table>
    </section>

  
    
</body>
</html>