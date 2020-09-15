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
<p> olá  <?php echo $_SESSION['Nome'];?>
<p> No portal do cliente, você tem acesso a todas as informações do cliente</p>


</p>
</div>
