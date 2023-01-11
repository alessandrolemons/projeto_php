<?php

include "conexao.php";
include ("secure.php");

if($_POST['acao']=='editar'){

   $cpf = $_POST['cpf'];
   $nome= $_POST['nome'];
   $email=$_POST['email'];
   $telefone=$_POST['telefone'];
   $senha=$_POST['senha'];
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

   $SQL= "update usuarios set cpf = '$cpf', nome='$nome', email='$email', telefone='$telefone', senha='$senha' , curriculo='$curriculo' where cpf = '$cpf'";

   $resultado=mysqli_query($conexao,$SQL);

   if($resultado){
       echo "Alteração de dados efetuada com sucesso";
   }
   else{
       echo 'Código de erro:'.mysqli_errno( $conexao ).'<br>';
       echo 'Mensagem de erro:'.mysqli_error( $conexao).'<br>';
   }

}
else{

  if($_POST['acao']=='excluir'){

    $cpf= $_POST['cpf'];

    $SQL= "delete from usuarios where cpf = '$cpf'";

    $resultado=mysqli_query($conexao,$SQL);

    if($resultado){
       echo "Sua conta foi excluida com sucesso";
       session_destroy();
       header("Location:../index.php");
    }
    else{
       echo 'Código de erro:'.mysqli_errno( $conexao ).'<br>';
       echo 'Mensagem de erro:'.mysqli_error( $conexao).'<br>';
    }


}
}
?>
<br><a href='../home_usuario.php'>Voltar </a>


