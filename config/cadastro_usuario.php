<?php

session_start();
require 'erro-topo.php';
require 'conexao.php';
require 'funcSistema.php';

if(isset($_POST['cadastrar'])){

$nomeUsuario = $_POST['nome'];
$emailLogin = $_POST['login'];
$senhaUsuario= $_POST['senha']; 
$usuarioPerfil =$_POST['perfil'];

if(strlen($nomeUsuario) > 100){
    echo"<div class='alert alert-danger'role='alert '>Verifique Nome de Usuário</div>";
    die;
}if(strlen($emailLogin) > 100){
    echo"<div class='alert alert-danger'role='alert '>Campo do E-mail  é maior que o permitido</div>";
    die;
}if(strlen($senhaUsuario)  < 12) { // Verificar Logica Da Senha
    echo"<div class='alert alert-danger'role='alert '> Verifique a Senha Informada ! </div> ";
    echo"<div class='alert alert-danger'role='alert'>Tamanho maximo 8 caracteres </div>";
    die;
    
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




