<?php 
session_start();


    
function cadastrarUsuario($conexao,$nome,$email,$senhaUsuario,$usuarioPerfil){

    $password =MD5($senhaUsuario);
   
    $sqlInsert ="INSERT INTO usuario (nome , email , senha , perfil) VALUES ('$nome','$email','$password','$usuarioPerfil')";
      
     
        
   return mysqli_query($conexao,$sqlInsert) or die(mysqli_error($conexao));

    

    
    

 
}
