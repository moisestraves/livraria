<?php
session_start();
//Chamada de fuções,obrigatórias do sistema
require 'cabecaarea-admin.php';
require 'adm/conexao.php';
require 'adm/func_sistema.php';;

//RECEBENDO A ID PARA DELETER A CONFIGURAÇÃO
$id_livro= $_GET['id']; // <-- Recebendo a ide para executar a remoção

//Call Function delete book
//$deletarLivro = excluirLivro($conexao,$id_livro);


$removerUser = "DELETE FROM  livro  where Cod_livro = $id_livro LIMIT 1";
        $exe_sql = mysqli_query($conexao, $removerUser);

// Verifica se Esta recebendo o ID 


?>

<div class="alert alert-success" role="alert">
  <h5 class='text-center'>Removido com Sucesso</h5>



