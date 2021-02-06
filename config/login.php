<?php

session_start();
require 'conexao.php';
require 'funcSistema.php';


if((isset($_POST['login'])) && (isset($_POST['senha']))){

    
 
    
    $loginUsuario = mysqli_real_escape_string($conexao, $_POST['login']);
     
    $senhaUsuario = mysqli_real_escape_string($conexao, $_POST['senha']);

    
           
           //Passagendo  os dados do login, como parâmetro  
           $loginUsuario = logarUsuario ($conexao,$loginUsuario,$senhaUsuario);

          

              
    
 } 
    

 
    




?>