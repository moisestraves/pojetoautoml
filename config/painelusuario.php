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



<!-- Menu principal de navegação página usuário-->
<div class="menu">
<h1 class="text-left"> Painel de Controle </h1>
<ul class="nav flex-column">

  <li class="nav-item">
  <a class="nav-link active text-dark " href="#">Configurações</a>
    
  </li>
  <li class="nav-item">
  <a class="nav-link active text-dark " href="../cenarios.php">Listar Cenários</a>
  </li>
  
  </li>
</ul>
  
</nav>
</div>
</div>
</div>