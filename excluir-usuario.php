<?php

require 'config/conexao.php';
require 'config/funcSistema.php';
require 'config/cabecalho.php';

//Aqui Estou Recebendo o id para deletar o usuário

$idUsuarioDeletar = $_GET['id'];

//var_dump($idUsuarioDeletar);

$usuarioDelete = removerLoginUsuario ($conexao,$idUsuarioDeletar);


if($usuarioDelete == 1){

    echo'<div class="alert alert-success tex-center role="alert"> <h5> Registro Removido Com Sucesso</h5></div><br><br>';

    echo'<div class="bot_nav">
    <a href="home.php" class="btn btn-success btn-sm active text-uppercase" role="button" aria-pressed="true">Sair</a></td>
    <a href="listar_usuarios.php" class="btn btn-danger btn-sm active text-uppercase" role="button" aria-pressed="true">Consultar Usuários</a></td></div>';
    
    
    
    mysqli_close($conexao);
    }
    
    ?>





