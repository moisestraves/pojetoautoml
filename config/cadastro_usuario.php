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

}if(strlen($senhaUsuario) > 20){
    echo" Tamanho da Senha Maior que o Permitido <br>";
    echo"Tamanho maximo 8 caracteres";
    
}else{
  
        $cadastro = cadastrarUsuario($conexao,$nomeUsuario,$emailLogin,$senhaUsuario,$usuarioPerfil);

        if($cadastro == true){

            echo "Usuário cadastrado com sucesso !";
        }
    }
    
}



