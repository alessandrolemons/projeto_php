<?php

include ("secure.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style.css">
    <title>PAINEL ADM</title>
</head>
<body>
    <header>
        <h1>PAINEL ADM</h1>
    </header>
    <main>
        <div class="form_class">
        <div class="form_div">
            <a href="cadastro_vagas.php">Cadastrar Vagas</a> <br>
            <a href="listar_vagas_admin.php">Editar Vagas</a>  <br> 
            <a href="candidatos_vagas.php">Candidatos</a>  <br> 
            <a href="usuarios_cadastrados.php">Usuarios</a> <br> <br> 
        </div>
        </div>
    </main>
 <footer>
    <div class="link">
    <a href="../logout.php">Logout</a>
    </div>
 </footer>
    
</body>
</html>