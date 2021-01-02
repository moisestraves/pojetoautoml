<?php

session_start();
require 'config/conexao.php';
require 'config/funcSistema.php';


if(empty($_SESSION['id'])){

    

  header('location:index.php');

}



?>

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/main.css"  >
    <title>Projeto AutoMl</title>
</head>
<header>
<h1>Treino validação</h1>
</header>
<body>
    <div class="container">
   
        
 <h2>Treinar</h2>

 <form class="caixaFormulario" method="POST" action="#" >
     <div>
     <label>Treino</label> <br>  <input type="number" id="treino" name="treino"
       min="0" max="100"><br>
     </div>
    <div>
     <label>Validação</label><br> <input type="number" id="validacao" name="validacao"
       min="0" max="100"><br>
     </div>
     <br><br>

     
 </form>
<section>
<a href="mapear.php">Anterior</a>
<a href="execucao.php">Próximo</a>

</section>
       
</div>
</body>
</html>