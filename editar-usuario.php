<?php

session_start();
require 'config/conexao.php';
require 'config/funcSistema.php';


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
   
        <div class="login">
    <form  method="POST" action="config/update-usuario.php">
        <h5 class="text-center text-success">Dados do Usuário</h5><br>
       <h5 class="text-center text-danger">Escolha uma Opção para atualizar!</h5>
 
    <input type="text"  name="nome" placeholder="NOME DO USUÁRIO" required ><br>
    <input type="e-mail"  name="login"placeholder="LOGIN" required ><br>
    <input type="password" name="senha" placeholder="SENHA" required><br>

    <select name="perfil" id="perfilusuario" required>
        <option value="0">É ADMINISTRADOR DO SISTEMA ?</option>
        <option value="1">N</option>
        <option value="2">S</option>
</select>
   
   <br> 
   
  <input style="background-color: black; color:white; " type="submit" name="cadastrar" value="Salvar">
 
    </form>
        </div>
</div>
</body>
</html>