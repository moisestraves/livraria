<?php

session_start();
require 'top_cliente.php';
require 'adm/func_sistema.php';


session_status();

verificaAcesso();
?>

<div id="cliente">
<h1> Bem vindo  </h1>
<p>olá <?php echo $_SESSION['Nome']; ?></p>

    <ul>
        <li>Cadastro</li>
        <li>Pedido</li>
        <li>Cadastro</li>
        <li>Endereço</li>

    </ul>
</p>
</div>
