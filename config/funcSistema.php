<?php 
session_start();


    
function cadastrarUsuario($conexao,$nome,$email,$senhaUsuario,$usuarioPerfil){

    $password =MD5($senhaUsuario);
   
    $sqlInsert ="INSERT INTO usuario (nome , email , senha , perfil) VALUES ('$nome','$email','$password','$usuarioPerfil')";
      
     
        
   return mysqli_query($conexao,$sqlInsert) or die(mysqli_error($conexao));
 

 
}

function consuntaEmail($conexao,$email){

    $sqlEmail ="SELECT email FROM usuario WHERE email= '$email' ";
    
    $resulEmail = mysqli_query($conexao,$sqlEmail); //Executando a Query

    $usuario = mysqli_num_rows($resulEmail);//Verificando a quantidade de links por retorno
    
    return $usuario; // Retornoando a quantidade de linhas licalizadas 
    

}