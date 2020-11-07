<?php
session_start();
//Chamada de fuções,obrigatórias do sistema
require 'cabecaarea-admin.php';
require 'adm/conexao.php';
require 'adm/func_sistema.php';;

//RECEBENDO A ID PARA DELETER A CONFIGURAÇÃO
$id_livro = $_GET['id']; // <-- Recebendo a ide para executar a remoção

var_dump($id_livro);


?>
