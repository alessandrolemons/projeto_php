<header>
<h1>Candidatos</h1>
</header>

<?php
session_start();

include "conexao.php";
include ("secure.php");

$sql = "select * from usuarios, vaga, usuario_vaga WHERE usuarios.cpf = usuario_vaga.cpf AND vaga.id = usuario_vaga.id";

$resultado = mysqli_query($conexao,$sql);

while($linha=mysqli_fetch_assoc($resultado)) {

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style.css">
    <title>Candidatos</title>
</head>
<body>
    <section>
    <form action="#" method="post" class="form_class">
    <p>Nome:<input type="text" name="nome" class="field_class" disabled="disabled" value="<?php echo $linha['nome']?>"></p>
    <p>Email:<input type="text" name="email" class="field_class" disabled="disabled" value="<?php echo $linha['email']?>"></p>
    <p>Curriculo: <input type="text" name="curriculo" class="field_class" disabled="disabled" value="<?php echo $linha['curriculo']?>"></p>
    <p>ID Vaga:<input type="text" name="id_vaga" class="field_class" disabled="disabled" value="<?php echo $linha['id']?>"></p>
    <p>Empresa:  <input type="text" name="empresa" class="field_class" disabled="disabled" value="<?php echo $linha['nome_empresa']?>"></p>
    <p>Area:<input type ="text" name = "area_atuacao" class="field_class" disabled="disabled" value="<?php echo $linha['area_atuacao']?>"></p> 
    </form>                                                         
    </section>
</body>
</html>
<?php
}
?>
 


<footer>
<div class="link">
<a href='index_admin.php'>Voltar </a> <br>
</div>

<div class="link">
<a href='../index.php'>Logout </a>
</div>
</footer>


