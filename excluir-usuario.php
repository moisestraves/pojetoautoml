<?php

require 'config/conexao.php';
require 'config/funcSistema.php';
require 'config/cabecalho.php';



if(empty($_SESSION['id'])){

    

    header('location:index.php');

}
//Aqui Estou Recebendo o id para deletar o usuário

$idUsuarioDeletar = $_GET['id'];

var_dump($idUsuarioDeletar);

$usuarioDelete = removerLoginUsuario ($conexao,$idUsuarioDeletar);


if($usuarioDelete > 0){


    header('location:listar_usuarios.php');
       
    
    mysqli_close($conexao);
    }
    
    ?>





