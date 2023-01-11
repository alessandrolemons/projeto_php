<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Cadastro</title>
</head>
<body>
    <header>
        <h1>CADASTRO USUARIO</h1>
    </header>
<main>
     <form id="login_form" class="form_class" action="admin/lgc_cad_usuario.php" method="POST" enctype="multipart/form-data">
            <div class="form_div">
                <label>Nome:</label>
                <input class="field_class" name="nome" id='nome' type="text" placeholder="Insira o seu nome" autofocus>
                <label>Email:</label>
                <input id="email" class="field_class" name="email" type="text" placeholder="Insira o seu email">
                <label>CPF:</label>
                <input id="cpf" class="field_class" name="cpf" type="text" placeholder="Insira o seu CPF">
                <label>Senha:</label>
                <input id="senha" class="field_class" name="senha" type="text" placeholder="Insira a sua senha">
                <label>Telefone:</label>
                <input id="telefone" class="field_class" name="telefone" type="text" placeholder="Insira o seu telefone">
                <label>Curriculo:</label>
                <input type="file" name="curriculo" class="field_class">
                <button id="btnSubmit" name="botao" type="submit" value="Enviar"> Enviar </button>
                <button style="width:100%; margin-top: 10px; padding:10px" id='btn-cancel' name="botao" type="reset" value="Limpar"> Limpar </button>

            </div>
        </form>
</main>
    <script src="js/script.js"></script>

    <footer>
        <div class="link">
        <a href='index.php'>Voltar</a>
        </div>
    </footer>
</body>
</html>
