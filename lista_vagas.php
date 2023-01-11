
<?php
session_start();

include "admin/conexao.php";
include "admin/secure.php";
?>

<header>
  <h1>LISTA VAGAS</h1>
</header>
<p id='pesq-avanc'><a href="pesquisa_vaga.php">Pesquisa Avançada</a> <br></p>

<?php
$sql = "select * from vaga";

$resultado = mysqli_query($conexao,$sql);

while($linha=mysqli_fetch_assoc($resultado)) {
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Lista Vagas</title>
</head>
<body>
    <section>
      <form action="candidata_vagas.php" method="post" class="form_class">
    <p>ID:<input type="text" name="id_vaga" class="field_class" value="<?php echo $linha['id']?>"></p>
    <p>Empresa:  <input type="text" name="empresa" class="field_class" value="<?php echo $linha['nome_empresa']?>"></p>
    <p>Area Atuação:<input type ="text" name = "area_atuacao" class="field_class" value="<?php echo $linha['area_atuacao']?>"></p> 
    <p>Descrição:<input type ="text" name = "descricao_vaga" class="field_class" value="<?php echo $linha['descricao_vaga']?>"></p> 
    <button type="submit" name="acao" value="cadastrar" id="btnSubmit"> Candidatar </button>
    </form>                                                         
    </section>
</body>
</html>
<?php
}
?>

<footer>
<div class="link">
<a href='home_usuario.php'>Voltar </a> <br>
</div>
<div class="link">
<a href='index.php'>Logout </a>
</div>
</footer>


