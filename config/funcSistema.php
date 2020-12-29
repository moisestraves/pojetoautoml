<?php 


//Function que faz o cadastro do login do usuário//
    
function cadastrarUsuario($conexao,$nome,$email,$senhaUsuario,$usuarioPerfil){

    $password =MD5($senhaUsuario);
   
    $sqlInsert ="INSERT INTO usuario (nome , email , senha , perfil) VALUES ('$nome','$email','$password','$usuarioPerfil')";
      
     
        
   return mysqli_query($conexao,$sqlInsert) or die(mysqli_error($conexao));
 

 
}

// Function  que  faz a verificação do e-mail, se o e-mail for localizado não faz o cadastro em dúplicidade //

function consuntaEmail($conexao,$email){

    $sqlEmail ="SELECT email FROM usuario WHERE email= '$email' ";
    
    $resulEmail = mysqli_query($conexao,$sqlEmail); //Executando a Query

    $usuario = mysqli_num_rows($resulEmail);//Verificando a quantidade de links por retorno
    
    return $usuario; // Retornoando a quantidade de linhas licalizadas 
    

}

// Funcion para listar  dados do usuário para  editar

function lerUsuario($conexao,$idUsuario){

    $sqlUsuario = "SELECT * FROM  usuario where idusuario ='$idUsuario";
    $resulUsuario = mysqli_query($conexao,$sqlUsuario);

    $usuarioDados = mysqli_fetch_array($resulUsuario);

    printf($usuarioDados) ;
    

}