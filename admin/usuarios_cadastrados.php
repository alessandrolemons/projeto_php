<header>
<h1>Usuarios</h1>
</header>

<?php
session_start();

include "conexao.php";
include ("secure.php");


$sql = "select * from usuarios where cpf != 'admin'";

$resultado = mysqli_query($conexao,$sql);

while($linha=mysqli_fetch_assoc($resultado)) {

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style.css">
    <title>Usuarios</title>
</head>
<body>
    <section>
    <form action="#" method="post" class="form_class">
    <p>CPF:<input type="text" name="cpf" class="field_class" disabled="disabled" value="<?php echo $linha['cpf']?>"></p>
    <p>Nome:<input type="text" name="nome" class="field_class" disabled="disabled" value="<?php echo $linha['nome']?>"></p>
    <p>Telefone:<input type="text" class="field_class" name="telefone" disabled="disabled" value="<?php echo $linha['telefone']?>"></p>
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

