<?php
session_start();
require 'cabecalho.php';

if(empty($_SESSION['id']) ){

    

  header('location:../index.php');

}
?>
<div class="container">
<div class="nav justify-content-end">
<a class="nav justify-content-end " href="../sair.php"  > 
<img src="../icones/logout-icon-18.png" width="8%" >
</a> 
</div>


<div class="menu">
<h5 class="text-success text-capitalize">Olá, <?php echo $_SESSION['nomeuser']; ?> </h5>   </p>
<!-- Menu principal de navegação página administrador-->
<h3 class="text-left">Painel Central do  Administrador  </h3>
<nav class="nav justify-content-center ">

  <a class="flex-sm-fill  nav-link text-dark" href="../cadastrar-usuario.php">Novo Usuário</a>
  <a class="flex-sm-fill  nav-link text-dark" href="../listar_usuarios.php">Listar Usuários</a>
  <a class="flex-sm-fill  nav-link text-dark" href="../cenarios.php">Listar Cenários</a>
  
</nav>
</div>
</div>
