<?php
session_start();
//Chamada de fuções,obrigatórias do sistema
require 'adm/conexao.php';
require 'adm/func_sistema.php';;
//RECEBENDO A ID PARA DELETER A CONFIGURAÇÃO
$id = $_GET['id'];

// Verifica se Esta recebendo o ID 
//var_dump($id);

//QUERY PARA DELETE PARAMETRO  COM RESTRIÇÃO DE EFETUAR SÓ UMA LINHA POR SEGURANÇA
$removerUser = "DELETE FROM  cliente  where Cod_cliente='$id' LIMIT 1";
$exe_sql = mysqli_query($conexao, $removerUser);

//var_dump($exe_sql);

header('location:listar-clientes.php');





?>