<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Inicio</title>
</head>
<body>
    <header>
        <h1>Entre com seu login!</h1>
    </header>
    <main>
        <form id="login_form" class="form_class" action="admin/valida_login.php" method="POST">
            <div class="form_div">
                <label>CPF:</label>
                <input id="login" class="field_class" name="cpf" type="text" placeholder="Insira o seu login" autofocus>
                <label>Senha:</label>
                <input id="pass" class="field_class" name="senha" type="password" placeholder="Insira a sua senha">
                <button id='btnSubmit'type="submit" value="Entrar"> Entrar </button>
            </div>
            <div class="info_div">
                <p>Ainda não é um usuário registrado? <a href="cadastro_usuario.php">Cadastre-se!</a></p>
            </div>
        </form>
    </main>
</body>
</html>

<?php
session_start();

if(isset($_SESSION['msg'])){ 
	echo $_SESSION['msg'];
	unset($_SESSION['msg']);
}

?>
