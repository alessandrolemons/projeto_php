<?php
session_start();

include "admin/conexao.php";
include ("admin/secure.php");
?>

<header>
    <h1>Minhas Candidaturas</h1>
</header>

<?php

$cpf = $_SESSION["cpf"];

$sql = "select * from usuarios, vaga, usuario_vaga WHERE usuarios.cpf = '$cpf' AND usuarios.cpf = usuario_vaga.cpf AND vaga.id = usuario_vaga.id";

$resultado = mysqli_query($conexao,$sql);

while($linha=mysqli_fetch_assoc($resultado)) {

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Candidaturas</title>
</head>
<body>
    <section>
    <form action='apagar_candidatura.php'method="post" class="form_class">
    <p>ID Vaga:<input type="text" name="id_vaga" class="field_class" value="<?php echo $linha['id']?>"></p>
    <p>Empresa:<input type="text" name="empresa" class="field_class" disabled="disabled" value="<?php echo $linha['nome_empresa']?>"></p>
    <p>Area:<input type ="text" name = "area_atuacao" class="field_class" disabled="disabled" value="<?php echo $linha['area_atuacao']?>"></p> 
    <button style="background-color:#CC2936"type="submit" name="acao" value="excluir" id="btnSubmit"> Cancelar Candidatura </button>
    
    </form>                                                         
    </section>
</body>
</html>
<?php
}
?>
 
<footer>
    <div class="link">
        <a href='home_usuario.php'>Voltar </a>
    </div>
    <div class="link">
        <a href='../index.php'>Logout </a>
    </div>
</footer>


