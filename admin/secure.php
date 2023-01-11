<?php

if(!isset($_SESSION)){
    session_start();
}

if(!isset($_SESSION['cpf'])){
    die("[ERRO] Você não está logado!");
}

?>