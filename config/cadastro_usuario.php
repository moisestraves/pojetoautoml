<?php
require 'conexao.php';
require 'funcSistema.php';
;
if(isset($_POST['cadastrar'])){

$nomeUsuario = $_POST['nome'];
$emailLogin = $_POST['login'];
$senhaUsuario= $_POST['senha'];
$usuarioPerfil =$_POST['perfil'];

if(strlen($nomeUsuario) > 100){
    echo"Tamanho do campo maior que o permitido";
    
}if(strlen($emailLogin) > 100){
    echo"<h1>Campo do E-mail  é maior que o permitido</h1>";

}if(strlen($senhaUsuario) > 8){
    echo" Tamanho da Senha Maior que o Permitido <br>";
    echo"Tamanho maximo 8 caracteres";
    
}else{

        $constEmail = consuntaEmail($conexao,$emailLogin);

        //var_dump($constEmail);

        if($constEmail == 1) {

            header('location:../erro_email.php'); // Encaminhamento página de erro, com informações de login já cadastrado
            
        }else{

            
        $cadastro = cadastrarUsuario($conexao,$nomeUsuario,$emailLogin,$senhaUsuario,$usuarioPerfil);

        if($cadastro == 1){

           header('location:../cadastrosucesso.php');


        }



            
        }
    }
}




