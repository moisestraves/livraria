<?php
session_start();
//Chamada de fuções,obrigatórias do sistema
require 'cabecaarea-admin.php';
require 'adm/conexao.php';
require 'adm/func_sistema.php';;

//RECEBENDO A ID PARA DELETER A CONFIGURAÇÃO
$id_usuario = $_GET['id']; // <-- Recebendo a ide para executar a remoção


$removerUsuarioAdm = deletarUsuarioAdm($conexao,$id_usuario);


if($removerUsuarioAdm != 1){

    echo "Erro";
}else{

    echo "Usuário Removido com Sucesso !";
}

header('location:consultar-usuarios-adm.php');
require 'rodape.php';

// Verifica se Esta recebendo o ID 