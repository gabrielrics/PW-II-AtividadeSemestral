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


<?php
        $stmt = $pdo->prepare("select * from tbFilme");	
        $stmt ->execute();
        
        while($row = $stmt ->fetch(PDO::FETCH_BOTH)){
    ?>    
            <a href="filme-interno.php?id=<?php echo $row[0]; ?> ">    
                <figure>
                    <img src="<?php echo $row[8]; ?>" />
                    <figcaption>
                        <h1> <?php echo $row[1]; ?> </h1>
                        <p> <?php echo $row[3]; ?> </p>                        
                    </figcaption>        
                </figure>
            </a>

    <?php }	?>


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

    
            
                $stmt = $pdo->prepare("select * from fadsfads");	
                $stmt ->execute();
                
                
                while($row = $stmt->fetch(PDO::FETCH_BOTH)){
                  echo "<tr> ";
                    echo "<td> 8888888</td>";						                    
                  echo "</tr>";
                }	
            ?>
           
        </table>
    </section>

  
    
</body>
</html>