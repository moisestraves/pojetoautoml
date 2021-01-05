<?php 
session_start();
require 'config/conexao.php';
require 'config/funcSistema.php';


if(empty($_SESSION['id'])){

    

    header('location:index.php');
  
  }
//Aqui estou recebendo o nome do cenário e a descrição do cenário 
//com o arquivo para apload





//ajustar com nome e cenario
$idCenario =$_POST['idcenario'];
$descCenario =$_POST['descenario'];
$descCenario =$_POST['descenario'];
$folder_upload = 'arquivoUpload';
$folder_data = 'upload/';

//se nao existir, criar
if (!is_dir($folder_upload )) {
    mkdir($folder_upload , 0777, true);
	mkdir($folder_data , 0777, true);
}

$target_dir = $folder_upload;
$target_file = $target_dir . basename($_FILES["arquivoUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


// Check if file already exists
if (file_exists($target_file)) {
  echo "<b>Sorry, file already exists.</b></br>";
  $uploadOk = 0;
}

// Check file size
                                      
if ($_FILES["arquivoUpload"]["size"] > 3000000) {
  echo "<b>Sorry, your file is too large. The limit is 5MB</b></br>";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "csv") {
  echo "<b>Sorry, only CSV files are allowed.</b></br>";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.<br>";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["arquivoUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  } else {
    echo "<b>Sorry, there was an error uploading your file.</b><br>";
  }
}

echo '</br></br></br>';
echo '<b>First 10 lines of File</b></br></br>';

$lines = 0;
$f = fopen($target_file, 'r');
echo "<table border = 1>";
while (($line = fgetcsv($f)) !== false && $lines <= 10) {
    
    echo "<tr>";
    foreach ($line as $cell) {
        echo "<td>" . htmlspecialchars($cell) . "</td>";
    }
    echo "</tr>\n";
    
	$lines = $lines + 1;
}
fclose($f);
echo "\n</table>";
?>