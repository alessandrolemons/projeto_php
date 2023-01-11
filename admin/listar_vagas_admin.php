<header>
        <h1>MODIFICAR VAGAS</h1>
</header>

<?php
session_start();

include "conexao.php";
include ("secure.php");

$sql = "select * from vaga";

$resultado = mysqli_query($conexao,$sql);

while($linha=mysqli_fetch_assoc($resultado)) {

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style.css">
    <title>Vagas</title>
</head>
<body>
    <section>
    <form action="lgc_vagas.php" method="post" class="form_class">
    <p>ID:<input type="text" name="id_vaga" class="field_class" value="<?php echo $linha['id']?>"></p>
    <p>Empresa:  <input type="text" name="empresa" class="field_class" value="<?php echo $linha['nome_empresa']?>"></p>
    <p>Area Atuação:<input type ="text" class="field_class" name = "area_atuacao" value="<?php echo $linha['area_atuacao']?>"></p> 
    <p>Descrição:<input type ="text" class="field_class" name = "descricao_vaga" value="<?php echo $linha['descricao_vaga']?>"></p> 

    <button type="submit" name="acao" value="editar" id="btn-edit"> Editar </button>
    <button type="submit" name="acao" value="excluir" id='btn-cancel'> Apagar </button>
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
