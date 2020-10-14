<?php

session_start();
require 'cabecaareacliente.php';   
require 'adm/conexao.php';
require 'adm/func_sistema.php';
 
$id_livro = $_GET['id'] ;

var_dump($id_livro);
/* Aqui faz a verificação da sessão
se o cliente não estiver logado vai rediricionar para o login Para Efetuar a compra*/
if (!$_SESSION['Email']) {

    header('location:cliente-login.php');

   
}


?>

<h3> Recebendo os detalhes da comprar</h3>