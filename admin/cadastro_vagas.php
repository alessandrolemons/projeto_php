<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style.css">
    <title>Cadastrar Vaga</title>
</head>
<body>
      <header>
        <h1>CADASTRAR VAGA</h1>
      </header>
      <main>
          <form action="lgc_cad_vaga.php" method="post" class="form_class">
            <label for="empresa">Empresa: </label>
            <input type="text" name="empresa" id="empresa" class="field_class">
            <label for="area">Area de Atuação: </label>
            <input type="text" name="area" id="area" class="field_class">
            <label for="descricao">Descrição da vaga: </label>
            <textarea type="text" name="descricao" id="descricao" class="field_class"></textarea>
            <button type="submit" id='btn-cadastrar' name='cadastrar' value="Cadastrar" id="btnCadastro">Cadastrar</button>     
          </form>
      </main>

      <footer>
          <div class="link">
          <a href="index_admin.php">Voltar</a>
          </div>
          <div class="link">
          <a href="../logout.php">Logout</a>
          </div>
      </footer>
</body>
</html>

<script src="../js/script.js"></script>