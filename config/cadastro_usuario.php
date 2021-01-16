<?php

session_start();
require 'conexao.php';
require 'funcSistema.php';

if(isset($_POST['cadastrar'])){

$nomeUsuario = $_POST['nome'];
$emailLogin = $_POST['login'];
$senhaUsuario= $_POST['senha']; 
$usuarioPerfil =$_POST['perfil'];

if(strlen($nomeUsuario) > 100){
    echo"Tamanho do campo maior que o permitido";
    
}if(strlen($emailLogin) > 100){
    echo"<h1>Campo do E-mail  é maior que o permitido</h1>";

/*}if(strlen($senhaUsuario) < 8){ // Verificar Logica Da Senha
    echo" Tamanho da Senha Maior que o Permitido <br>";
    echo"Tamanho maximo 8 caracteres";*/
    
}else{

        $constEmail = consuntaEmail($conexao,$emailLogin);

        //var_dump($constEmail);

        if($constEmail > 0) {

                       
            header('location:../cadastrar-usuario.php'); 
            $_SESSION['loginErro'] = "O email já cadastrado";
            // Encaminhamento página de erro, com informações de login já cadastrado
            
        }else{

           
        $cadastro = cadastrarUsuario($conexao,$nomeUsuario,$emailLogin,$senhaUsuario,$usuarioPerfil);

        if($cadastro > 0){

           header('location:../listar_usuarios.php');


        }



            
        }
    }
}




