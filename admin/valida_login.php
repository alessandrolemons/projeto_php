<?php
session_start();

include ('conexao.php');

    if ((empty($email) OR empty($senha))){
        $cpf = $_POST['cpf'];
        $senha = $_POST['senha'];
        
        $sql="SELECT * from usuarios WHERE cpf='$cpf' and senha='$senha'";
	    $resultado = mysqli_query($conexao,$sql);
        
        if (mysqli_num_rows($resultado) == 1){
            $_SESSION["logado"]=true; 
            $_SESSION["cpf"]=$cpf;

            if($cpf == 'admin'){
                header("Location:index_admin.php"); 
            }
            else{
                header("Location:../home_usuario.php"); 
            }
        }
        else{
            $_SESSION["msg"]="Usuário ou senha inválidos";
		    header("Location:../index.php"); 
        }
    }
?>


