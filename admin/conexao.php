<?php

$conexao = mysqli_connect('localhost', 'root', '','projeto');
mysqli_set_charset($conexao,"utf8");

if (!$conexao) {
    die('Falha ao conectar: ' . mysql_error()); 
}

?>