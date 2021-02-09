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


<h5 class="text-success text-capitalize">Olá, <?php echo $_SESSION['nomeuser']; ?> </h5>   </p>



<!-- Menu principal de navegação página usuário-->
<div class="menu">
<h3 class="text-left">Central do Usuário  </h3>
<ul class="nav flex-column">

</li>
  <li class="nav-item">
  <a class="nav-link active text-dark " href="../cenarios.php">Cenários</a>
  </li>
  <li class="nav-item">
  <a class="nav-link active text-dark " href="#">Configurações</a>
    
 
  
  </li>
</ul>
  
</nav>
</div>
</div>
</div>