<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Pesquisar Vagas</title>
</head>
<body>
    <header>
        <h1>PESQUISAR VAGA</h1>
    </header>
<form method='GET'>
        <p><input type="text" name="pesquisar" placeholder='Empresa ou área desejada' class="field_class"></p>
        <button type="submit" value="Pesquisa" id="btnSubmit">Pesquisar</button>
    </form>
</body>
</html>

<?php
session_start();
include "admin/conexao.php";
include "admin/secure.php";

        if(isset($_GET['pesquisar'])){
            $pesquisa = $_GET['pesquisar'];
            $sql = "select * from vaga where area_atuacao = '$pesquisa' or nome_empresa = '$pesquisa'";
            $resultado = mysqli_query($conexao,$sql);
        }

        if(isset($_GET['pesquisar']) && mysqli_num_rows($resultado) >= 1)
            while($linha=mysqli_fetch_assoc($resultado)) {
        

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<main>
    <form action="candidata_vagas.php" method="post" class="form_class">
    <p style = 'display:none'>ID:<input type="text" class="field_class" name="id_vaga" value="<?php echo $linha['id']?>"></p>
    <p>Empresa:  <input type="text" name="empresa" class="field_class" value="<?php echo $linha['nome_empresa']?>"></p>
    <p>Area Atuação:<input type ="text" name = "area_atuacao" class="field_class" value="<?php echo $linha['area_atuacao']?>"></p> 
    <p>Descrição:<input type ="text" name = "descricao_vaga" class="field_class" value="<?php echo $linha['descricao_vaga']?>"></p> 
    <button type="submit" name="acao" value="cadastrar" id="btnSubmit"> Candidatar </button>
    </form>      
</main>                                                   

</body>
</html>
<?php
}
else echo "Nenhum resultado encontrado!"

?>
<br>

<footer>
    <div class="link">
        <a href='home_usuario.php'>Voltar </a> <br>
    </div>
    <div class="link">
        <a href='index.php'>Logout </a>
    </div>
</footer>

