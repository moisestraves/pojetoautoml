<?php
require 'conexao.php';
require 'funcSistema.php';


//Dados Enviados da página Update

$idUsuario = $_POST['id'];
$nomeUsuario = $_POST['nome'];
$emailLogin = $_POST['login'];
$senhaLogin = $_POST['senha'];
$perfilUsuario =$_POST['perfil'];




//Chamada da função de Update dos dados do usuário
$updateUsuario = atualizarDadosUsuario($conexao,$idUsuario,$nomeUsuario,$emailLogin,$senhaLogin,$perfilUsuario);






?>