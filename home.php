<?php
    session_start();
    
    
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/main.css"  >
    <title>Projeto AutoMl</title>
</head>
<header>
<h2>AutoMl</h2>
</header>
<body>
    <div class="container">
   
        <div class="login">
    <form method="POST" action="config/login.php">
 
    <input type="e-mail"  name ="login" placeholder="LOGIN" ><br>
    <input type="password" name ="senha" placeholder="SENHA"><br>
    
   
   <input style="background-color: black; color:white; " type="submit" value="Entrar"></a>

    </form>
    <h5 class ="text-center text-danger">
    <?php if(isset($_SESSION['loginErro']));

        /*Aqui Foi inserido o erro Global*/
     echo  $_SESSION['loginErro'];
     unset ($_SESSION['loginErro']);

   ?>
    </h5>
        </div>
</div>
</body>
</html>