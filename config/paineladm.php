<?php
session_start();
require 'cabecalho.php';

//var_dump($_SESSION);

?>

<div class="container">
<div class="nav justify-content-end">
<a class="nav justify-content-end " href="../sair.php"  > 
<img src="../icones/logout-icon-18.png" width="8%" >
</a> 
</div>
<!--<p >Código Usuário <?php/* echo $_SESSION['id']; */?></p>-->
<h5 class="text-success text-capitalize">Olá, <?php echo $_SESSION['nomeuser']; ?> </h5>   </p>
<div class="menu">
<!-- Menu principal de navegação página administrador-->
<nav class="nav nav-pills flex-column flex-sm-row">
  <a class="flex-sm-fill text-sm-center nav-link text-dark" href="../cadastrar-usuario.php">Cadastrar Usuário</a>
  <a class="flex-sm-fill text-sm-center nav-link text-dark" href="../listar_usuarios.php">Listar Usuários</a>
  <a class="flex-sm-fill text-sm-center nav-link text-dark" href="../cenarios.php">Listar Cenários</a>
  
  
</nav>
</div>
</div>