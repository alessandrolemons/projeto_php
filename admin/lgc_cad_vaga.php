<?php

include ("secure.php");

$empresa=$_POST['empresa'];
$area=$_POST['area'];
$descricao=$_POST['descricao'];

include "conexao.php";

$sql="insert into vaga (nome_empresa,area_atuacao,descricao_vaga) values ('$empresa','$area','$descricao')";

$resultado = mysqli_query($conexao,$sql);
if($resultado){
   echo "Vaga cadastrada com sucesso! <br>";
}
else{
   echo 'Código de erro:'.mysqli_errno( $conexao ).'<br>';
   echo 'Mensagem de erro:'.mysqli_error( $conexao).'<br>';
}

?>
<br><a href='cadastro_vagas.php'>Voltar </a>