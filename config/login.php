<?php

session_start();
require 'conexao.php';
require 'funcSistema.php';


if((isset($_POST['login'])) && (isset($_POST['senha']))){
    
    $loginUsuario = mysqli_real_escape_string($conexao, $_POST['login']);
    $senhaUsuario = mysqli_real_escape_string($conexao, $_POST['senha']);

           $acessar = logarUsuario ($conexao,$loginUsuario,$senhaUsuario);

          // print_r($acessar);

    
 } else{

    $_SESSION['loginErro'] = "Usuário ou Senha Invalido";

    header('location:../home.php');
    }
    
    

 
    




?>