<?php
session_start();

include "admin/conexao.php";
include ("admin/secure.php");

if($_POST['acao'] == 'excluir'){

    $id= $_POST['id_vaga'];
    
    $SQL= "delete from usuario_vaga where id = '$id'";
    
    $resultado=mysqli_query($conexao,$SQL);
    
    if($resultado){
   ?> 
   <!DOCTYPE html>
   <html lang="en">
   <head>
      <meta charset="UTF-8">
      <link rel="stylesheet" href="css/style.css">
      <title>Apagar candidatura</title>
   </head>
   <body>
   <header> 
      <h1 style="color:red">Candidatura excluida com sucesso!</h1>
   </header>
   </body>
   </html>
   <?php  
    }
    else{
       echo 'Código de erro:'.mysqli_errno( $conexao ).'<br>';
       echo 'Mensagem de erro:'.mysqli_error( $conexao).'<br>';
    }
    
    }
?>
 
<footer>
   <div class="link">
      <a href='home_usuario.php'>Voltar </a> <br>
   </div>

   <div class="link">
      <a href='../index.php'>Logout </a>
   </div>
</footer>

