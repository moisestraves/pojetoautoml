<?php

session_start();
require 'config/conexao.php';
require 'config/funcSistema.php';

if(empty($_SESSION['id'])){

    

    header('location:index.php');

}

//Aqui foi Recebido o id pela url, do usuário selecionado pelo administrador para editar 

$id_usuario = $_GET['id']; //Código de identificação do usuário recebido pela Url




//Chamada da função que  pesquisa os dados  conforme a ID selecionada

$dadosUsuario = lerDadosUsuario($conexao,$id_usuario);

//Variavel que esta quardando os dados do login
$resultadoUsuario = $dadosUsuario;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css"  >
    <title>Projeto AutoMl</title>
</head>
<header>
<h2>AutoMl</h2>
</header>
<body>
    <div class="container">
     
        <div class="login">
       
    <form  method="POST" action="config/update-usuario.php">
        <h5 class="text-center text-success">Dados do Usuário</h5><br>
      
    
    <input type="hidden" name="id" value="<?php echo $resultadoUsuario ['codusuario'];?>">
    <label>Nome</label>
    <input type="text"  name="nome"  value="<?php echo $resultadoUsuario['nome'];?>">
    <label>Login</label>
    <input type="e-mail"  name="login" value="<?php echo $resultadoUsuario['email']; ?>" >
    <label>Senha</label>
    <input type="password" name="senha" value="<?php echo $resultadoUsuario['senha']; ?>" >
    <label>Editar Perfil</label>
    <select name="perfil" id="perfilusuario" required>
        
        <option value="U"<?php echo $resultadoUsuario['perfil']; ?>>N</option>
        <option value="A"<?php echo $resultadoUsuario['perfil']; ?>>S</option>
    </select>
   <br> 
  <input style="background-color: black; color:white; " type="submit" name="cadastrar" value="Editar">
    </form>

    
        </div>
</div>
</body>
</html>