<?php

session_start();
require 'config/conexao.php';
require 'config/funcSistema.php';

if(empty($_SESSION['id'])){



    header('location:index.php');

}


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
<h1>Cenário</h1>
</header>
<body>
    <div class="container">
   
        <div class="telacenarios">



 <form  action="upload.php" method="post" enctype="multipart/form-data">
     <div>
     <label>ID CENÁRIO</label>
     </div>

     <div>
     <input type="text" name="idcenario" placeholder="Ident/Cenário" >
     </div>

     <div>
     <label>DESCRIÇÃO</label>
     </div>

     <div>
     <input type="text" name="descenario" placeholder="Desc/Cenário">
     </div>

     <div>
       <input type="file" name ="arquivoUpload">
     </div>
    
     <div>
    <button type="submit" class="btn btn-dark">Upload File</button>
     </div>
     
 </form>
</div>
</div>
</body>
</html>