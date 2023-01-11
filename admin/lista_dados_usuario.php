<header>
    <h1>SEU PERFIL</h1>
</header>

<?php
session_start();
include ("secure.php");

include "conexao.php";

$cpf = $_SESSION["cpf"];

$sql = "select * from usuarios where cpf = '$cpf' ";

$resultado = mysqli_query($conexao,$sql);

while($linha=mysqli_fetch_assoc($resultado)) {

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style.css">
    <title>Perfil</title>
</head>
<body>
<section>
    <form action="lgc_usuario.php" method="post" class="form_class" enctype="multipart/form-data">
        <p>CPF:<input type="text" name="cpf" class="field_class" value="<?php echo $linha['cpf']?>"></p>
        <p>Nome:  <input type="text" name="nome" class="field_class" value="<?php echo $linha['nome']?>"></p>
        <p>Email:<input type ="text" name = "email" class="field_class" value="<?php echo $linha['email']?>"></p> 
        <p>Telefone:<input type ="text" name = "telefone" class="field_class" value="<?php echo $linha['telefone']?>"></p>
        <p>Senha:<input type ="text" name = "senha" class="field_class" value="<?php echo $linha['senha']?>"></p> 
        <p>Curriculo:<?php echo $linha['curriculo']?><input type="file" class="field_class" name="curriculo"></p>
        <button type="submit" name="acao" value="editar" id="btn-edit"> Editar </button>
        <button type="submit" name="acao" value="excluir" id="btn-cancel"> Apagar </button> <br> <br>
    </form>                                                         
    </section>      
</body>
</html>
<?php
}
?>
 

 
<footer>
    <div class="link">
    <a href='../home_usuario.php'>Voltar </a> <br>
    </div>
    <div class="link">
    <a href='../index.php'>Logout </a>
    </div>
</footer>


