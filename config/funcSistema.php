<?php 


//Function que faz o cadastro do login do usuário//
    
function cadastrarUsuario($conexao,$nome,$email,$senhaUsuario,$usuarioPerfil){

   
   
    $sqlInsert ="INSERT INTO usuario (nome , email , senha , perfil) VALUES ('$nome','$email','$senhaUsuario','$usuarioPerfil')";
      
     
        
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

    $sqlUsuario = 'SELECT codusuario,nome,email,perfil FROM  usuario  ORDER BY nome ';
    
    $resulUsuario = mysqli_query($conexao,$sqlUsuario);

    //Aqui foi criado um array  que vou usar para guardas os dados da query
    $usuarios = array();
 

    while ($usuario = mysqli_fetch_assoc($resulUsuario)) {
       
        $usuarios[] = $usuario;
    }

    return $usuarios;
}

// Funcion que seleciona os dados do usuário selecionado pelo administrador ou usuário para editar

function lerDadosUsuario($conexao,$idUsuario){

    $sqlUsuario = "SELECT codusuario, nome,email,senha,perfil FROM  usuario  where codusuario = '$idUsuario' ";
    
    $resulUsuario = mysqli_query($conexao,$sqlUsuario);
    
    $usuario = mysqli_fetch_assoc($resulUsuario);
       
    return $usuario;
}

//Function de Updade  dados so usuário 
function atualizarDadosUsuario($conexao,$idUsuario,$nomeUsuario,$usuarioLogin,$senhaUsuario,$usuarioPerfil){

   // $novaSenha = md5($senhaUsuario);

    $atualizarDados ="UPDATE usuario SET nome='$nomeUsuario',email='$usuarioLogin',senha='$senhaUsuario',perfil='$usuarioPerfil' where codusuario='$idUsuario' ";
    $queryUpdate = mysqli_query($conexao,$atualizarDados);

    $resultadoUpdate = $queryUpdate;

    
        return $resultadoUpdate;

}

//Funcion Delete Usuário

function removerLoginUsuario ($conexao,$idRemover){

    $sqlDelete ="DELETE  FROM  usuario where codusuario ='$idRemover' LIMIT 1";

    $exeRemover = mysqli_query($conexao,$sqlDelete);
    
    //Aqui estou pegando o resultado da query
    $deletouLogin = $exeRemover;
    
    return $deletouLogin;

    
}

//Function Processa Login do Usuário no Sistema
function logarUsuario ($conexao,$login,$senha){

    // SELECT DO LOGIN E SENHA DO USUÁRIO
   $queryLogin = "SELECT * FROM usuario WHERE email ='$login' && senha = '$senha' LIMIT 1";

    $resultadoLogin = mysqli_query($conexao,$queryLogin);

    $resultadoDadosUsuario = mysqli_fetch_assoc($resultadoLogin);

    //Array criado  para guardar os dados do usuário encontrado
    $dados = array();

    $dados [] = $resultadoDadosUsuario;

    if($resultadoDadosUsuario !=null){
       //Criando a session com os dados do login
       $_SESSION ['id'] = $dados[0]['codusuario'];
       $_SESSION ['nomeuser'] = $dados[0]['nome'];

       $perfilUsuario = $dados[0]['perfil'];

       $login = $dados[0]['codusuario'];

       $updateLogin = atualizaLogin($conexao,$login);

      // return $updateLogin;

      if($perfilUsuario == 'A'){
        header('location:paineladm.php');
      }else{

       header('location:painelusuario.php');
      }
  
        
    }else{

        $_SESSION['loginErro'] = "Usuário ou Senha Invalido <br> Verifique os dados do usuário";

        header('location:../index.php');

       
    
    
    }

   
}

//function que faz o registro do último login do usuário
function atualizaLogin($conexao,$id){

   $atualuzarLogin = "UPDATE usuario SET ultimoacesso = CURRENT_TIMESTAMP() WHERE usuario.codusuario = '$id'";
   $resultado = mysqli_query($conexao, $atualuzarLogin); // SELECIONANDO INFORMARÇÂO CONFORME O ID
    
   //echo($resultado);


}

    

