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

//Funcion que lista todos os usuários do sistemas

function lerUsuarios($conexao){

    $sqlUsuario = 'SELECT idusuario,nome,email,perfil FROM  usuario  ORDER BY nome ';
    
    $resulUsuario = mysqli_query($conexao,$sqlUsuario);

    $usuarios = array();
 

    while ($usuario = mysqli_fetch_assoc($resulUsuario)) {
       
        $usuarios[] = $usuario;
    }

    return $usuarios;
}

// Funcion que seleciona os dados do usuário selecionado pelo administrador ou usuário para editar

function lerDadosUsuario($conexao,$idUsuario){

    $sqlUsuario = "SELECT idusuario, nome,email,senha,perfil FROM  usuario  where idusuario = '$idUsuario' ";
    
    $resulUsuario = mysqli_query($conexao,$sqlUsuario);
    
    $usuario = mysqli_fetch_assoc($resulUsuario);
       
    return $usuario;
}

//Function de Updade  dados so usuário 

function atualizarDadosUsuario($conexao,$idUsuario,$nomeUsuario,$usuarioLogin,$senhaUsuario,$usuarioPerfil){

    $novaSenha = md5($senhaUsuario);

    $atualizarDados ="UPDATE usuario SET nome='$nomeUsuario',email='$usuarioLogin',senha='$novaSenha',perfil='$usuarioPerfil' where idusuario='?' ";

    $resultadoUpdate = mysqli_query($conexao,$atualizarDados);

 if($resultadoUpdate == 1){

    echo"Dados Atualizado";
 }else{

    echo"nada atauzliado";
 }
    
}



    

