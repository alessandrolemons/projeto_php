<?php
include "admin/secure.php"
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Painel Usuario</title>
</head>
<body>
    <header>
        <h1>PAINEL USUARIO</h1>
    </header>
<main>
<div class="form_class">
    <div class="form_div">
    <a href="lista_vagas.php">Vagas Disponíveis</a> <br>
    <a href="candidaturas.php">Minhas Candidaturas</a> <br>

    <a href="admin/lista_dados_usuario.php">Editar Perfil</a> <br> <br>
    </div>
</main>
</div>
<footer>
    <div class="link">
    <a href="logout.php">Logout</a> 
    </div>
</footer>
</body>
</html>