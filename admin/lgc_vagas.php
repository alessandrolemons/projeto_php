<?php
include "conexao.php";
include ("secure.php");

if($_POST['acao']=='editar'){

   $id = $_POST['id_vaga'];
   $empresa= $_POST['empresa'];
   $area=$_POST['area_atuacao'];
   $descricao=$_POST['descricao_vaga'];

   $SQL= "update vaga set nome_empresa='$empresa', area_atuacao='$area', descricao_vaga='$descricao' where id = '$id'";

   $resultado=mysqli_query($conexao,$SQL);

   if($resultado){
       echo "Alteração de vaga efetuada com sucesso";
   }
   else{
       echo 'Código de erro:'.mysqli_errno( $conexao ).'<br>';
       echo 'Mensagem de erro:'.mysqli_error( $conexao).'<br>';
   }

}
else{

  if($_POST['acao']=='excluir'){

    $id= $_POST['id_vaga'];

    $SQL= "delete from vaga where id = '$id'";

    $resultado=mysqli_query($conexao,$SQL);

    if($resultado){
       echo "Vaga excluida com sucesso";
    }
    else{
       echo 'Código de erro:'.mysqli_errno( $conexao ).'<br>';
       echo 'Mensagem de erro:'.mysqli_error( $conexao).'<br>';
    }

}
}
?>
<br><a href='listar_vagas_admin.php'>Voltar </a>


