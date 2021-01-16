<?php
session_start();
require 'cabecalho.php';

//var_dump($_SESSION);

?>
<div class="container">
<p >Código Usuário <?php echo $_SESSION['id']; ?></p>
<h5 class="text-success text-capitalize">Olá, <?php echo $_SESSION['nomeuser']; ?> </h5>   </p>
</div>

<ul class="nav">

<li class="nav-item">

<a class="nav-link inative" href="../cadastrar-usuario.php">Novo Usuário</a>
</li>

</ul>