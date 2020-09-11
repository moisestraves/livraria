<?php

session_start();
/* Aqui faz a verificação da sessão
se o cliente não estiver logado vai rediricionar para o login*/
if (!$_SESSION['Email']) {

    header('location:cliente_login.php');
}

require 'top_cliente.php';
require 'adm/func_sistema.php';
require 'adm/conexao.php';


?>



<div id="cliente">
<h1> Bem vindo ao portal do Cliente </h1>
<p> id_cliente <?php //echo $_SESSION['Cod_cliente'];?>


</p>
</div>
