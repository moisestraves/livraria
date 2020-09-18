<?php

// Fecha minha conexao com o banco
session_start();

session_destroy();// Destroy a sessão 

header('location:index.html');

?>
