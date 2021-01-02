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

    <p>ID_USUÁRIO<?php echo $_SESSION['id']; ?></p>
Olá, <?php echo $_SESSION['nomeuser']; ?> </p>
        <div class="login">
        

    <form  method="POST" action="config/cadastro_usuario.php">
    <h5 class="text-center text-uppercase text-dark bg-white"> Relatório  de Usuários</h5>

        <table class="table text-center table-hover table-sm table-light " >
            <thead class="thead-light  text-uppercase">
                <tr>
                <th scope="col">Nome</th>
                <th scope="col">Login</th>
                <th scope="col">Editar</th>
                <th scope="col">Deletar</th>
               </tr>
            </thead>
            <?php
                $ListarUsuario = lerUsuarios($conexao);

                 //Laço de Controle da lista de usuários 
                 foreach ($ListarUsuario as $usuario){
                  

                ?>
         
            <tr>
            <td><?= $usuario['nome'];?></td>
            <td><?= $usuario['email'];?></td>
            <td><a href="editar-usuario.php?id=<?=$usuario['idusuario']; ?>" class="btn btn-success btn-sm active" role="button" aria-pressed="true">Editar</a></td>
            <td><a href="excluir-usuario.php?id=<?=$usuario['idusuario']; ?>" class="btn btn-danger btn-sm active" role="button" aria-pressed="true">Remover</a></td>
            </tr>
            
           
            <?php
    } ?> 

        </table>
      
 
    </form>
        </div>
</div>
</body>
</html>