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

    $sqlUsuario = 'SELECT idusuario,nome,email,perfil FROM  usuario  ORDER BY nome ';
    
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

    $sqlUsuario = "SELECT idusuario, nome,email,senha,perfil FROM  usuario  where idusuario = '$idUsuario' ";
    
    $resulUsuario = mysqli_query($conexao,$sqlUsuario);
    
    $usuario = mysqli_fetch_assoc($resulUsuario);
       
    return $usuario;
}

//Function de Updade  dados so usuário 
function atualizarDadosUsuario($conexao,$idUsuario,$nomeUsuario,$usuarioLogin,$senhaUsuario,$usuarioPerfil){

    $novaSenha = md5($senhaUsuario);

    $atualizarDados ="UPDATE usuario SET nome='$nomeUsuario',email='$usuarioLogin',senha='$novaSenha',perfil='$usuarioPerfil' where idusuario='$idUsuario' ";
    $queryUpdate = mysqli_query($conexao,$atualizarDados);

    $resultadoUpdate = $queryUpdate;

    
        return $resultadoUpdate;

}

//Funcion Delete Usuário

function removerLoginUsuario ($conexao,$idRemover){

    $sqlDelete ="DELETE  FROM  usuario where idusuario ='$idRemover' LIMIT 1";

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

    $resultado =mysqli_fetch_assoc($resultadoLogin) ;

    //var_dump($resultado);
    
    if(empty($resultado)){

        $_SESSION['loginErro'] = "Usuário ou Senha Invalido";

    header('location:../index.php');

    }elseif(isset($resultado)){ 

        // Aqui eu fiz a criação de um array para armazenar os dados de retorno
        $dados = array();

            $dados [] = $resultado;
           
           
           //Criação da Sessão com o login
           $_SESSION ['id'] = $dados[0]['idusuario'];
           $_SESSION ['nomeuser'] = $dados[0]['nome'];

       header('location: ../cenarios.php');
    }

   
}

    

