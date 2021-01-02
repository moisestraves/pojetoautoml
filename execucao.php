<?php

session_start();
require 'config/conexao.php';
require 'config/funcSistema.php';


if(empty($_SESSION['id'])){

    

    header('location:index.php');

}



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
<h2>AutoMl</h2>
</header>
<body>
    <div class="container">
        <h4>Execução</h4>

        <form class="caixaFormulario">
            <label>Variavel Alvo</label>       <input type="text" ><br><br>
            <label>Tipo de Problema</label>  <input type="text"><br><br>
            <label>Budget</label> <input type="text"><br> <br>
            
            

        </form>

        <section>
<a href="treino.php">Passo Anterior</a>
<a href="#">Executar</a>

</section>
    </div>
</body>
</html>