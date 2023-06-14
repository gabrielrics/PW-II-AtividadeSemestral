<?php include('cabecalho.php'); ?>

<link rel="stylesheet" href="../CSS/style.css">


<body>
    
    <h2 class="colorido"> 
    Olá, seja bem-vindo ao Purple UNIVERSE, aqui você
    encontrará as informações necessárias para analisar
    o melhor tipo de categoria de filmes para você.
    </h2>
    <h2 class="colorido"> Esse site, conta-se com 3 categorias, sendo elas:</h2>

    
 

  <div class="container">
    <div class="Flex-container">


<!-- Imagem de "Terror" que, quando a pessoa clicar, vai para a página "Terror.php" -->
        <a href="Terror.php">
          <div class="flip-card-terror">
            <div class="flip-card-inner-terror">

              <h2> TERROR </h2>
            
            </div>
          </div>
        </a> 

<!-- Imagem de "Comédia" que, quando a pessoa clicar, vai para a página "Comedia.php" -->

        <a href="Comedia.php">
          <div class="flip-card-comedia">
            <div class="flip-card-inner-comedia">

              <h2> COMÉDIA </h2>
            
            </div>
          </div>
        </a> 

<!-- Imagem de "Romance" que, quando a pessoa clicar, vai para a página "Romance.php" -->

        <a href="Romance.php">
          <div class="flip-card-romance">
            <div class="flip-card-inner-romance">

              <h2> Romance </h2>
            
            </div>   
          </div>
        </a>
        
    </div>
</div>


</body>


<?php include('rodape.php'); ?>    

<!-- Framework para ajudar
    https://getbootstrap.com/docs/5.3/components/accordion/