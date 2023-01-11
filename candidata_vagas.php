<?php
session_start();
include "admin/secure.php";

include "admin/conexao.php";

$id_vaga= $_POST['id_vaga'];
$cpf = $_SESSION["cpf"];

if($_POST['acao']=='cadastrar'){

    $SQL = "insert into usuario_vaga (id, cpf) values ('$id_vaga','$cpf')";

    $resultado=mysqli_query($conexao,$SQL);

    if($resultado){
       ?>
       <!DOCTYPE html>
       <html lang="en">
       <head>
         <meta charset="UTF-8">
         <link rel="stylesheet" href="css/style.css">
         <title>Candidatura</title>
       </head>
       <body>
       <header>
         <h1>Candidatura feita com sucesso!</h1>
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
      <a href='lista_vagas.php'>Voltar </a>
   </div>
</footer>


