<?php
$servidor="localhost";
$usuario="conecta_automl";
$senha="R7AMAflqzYioP1ld";
$banco="bdautoml";


//Conectando com o servidor
$conexao = mysqli_connect($servidor , $usuario , $senha , $banco);

if($conexao){

    /*var_dump($conexao); Teste de Conexão com o Banco de Dados Saida na tela */

    mysqli_set_charset ($conexao, "utf8");
       
 } 
 


?>