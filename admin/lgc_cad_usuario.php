<?php

$nome=$_POST['nome'];
$email=$_POST['email'];
$cpf=$_POST['cpf'];
$senha=$_POST['senha'];
$telefone=$_POST['telefone'];
$curriculo=$_FILES['curriculo']['name'];  
$tamanho_arquivo=$_FILES['curriculo']['size']; 
$arquivo_temporario=$_FILES['curriculo']['tmp_name']; 

   if (move_uploaded_file($arquivo_temporario, "../curriculos/$curriculo")){
      echo " Curriculo: ". $curriculo." foi incluido com sucesso!<br>";
   }
   else{
      echo "Curriculo não incluido no cadastro. <br>";
      $curriculo='curriculo.txt';
   }

include "conexao.php";

$sql="insert into usuarios (cpf,nome,email,telefone,curriculo,senha) values ('$cpf','$nome','$email','$telefone','$curriculo','$senha')";

$resultado = mysqli_query($conexao,$sql);
if($resultado){
   echo "Cadastrado com sucesso! <br>";
}
else{
   echo 'Código de erro:'.mysqli_errno( $conexao ).'<br>';
   echo 'Mensagem de erro:'.mysqli_error( $conexao).'<br>';
}

?>
<br><a href='../index.php'>Voltar </a>