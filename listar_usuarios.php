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
    <form  method="POST" action="config/cadastro_usuario.php">
        <h3 class="text-center text-success">Usuários</h3>

        <table class="table text-center table-hover table-sm table-light" >
            <thead class="thead-light">
                <tr>
                <th scope="col">Nome</th>
                <th scope="col">Login</th>
                <th scope="col">Perfil</th>
                <th scope="col">Editar</th>
                <th scope="col">Excluir</th>
               </tr>
            </thead>
            <?php
                $ListarUsuario = lerUsuarios($conexao);

                    //Laço de Controle da lista de usuários 
                 foreach ($ListarUsuario as $usuario){
                   // print_r($ListarUsuario);

                ?>

            
            <tr>
            <td><?= $usuario['nome'];?></td>
            <td><?= $usuario['email'];?></td>
            <td><?= $usuario['perfil'];?></td>
            <td><a href="editar-usuario.php?id=<?=$usuario['idusuario']; ?>">AQUI</a></td>
            <td><a href="editar-usuario.php?id=<?=$usuario['idusuario']; ?>">AQUI</a></td>
            </tr>
            
           
            <?php
    } ?> 

        </table>
      
 
    </form>
        </div>
</div>
</body>
</html>