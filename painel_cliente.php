<?php

session_start();
require 'top_cliente.php';
require 'adm/func_sistema.php';


session_status();

verificaAcesso();
?>
<h1> Bem vindo  </h1>
<p>olá <?php echo $_SESSION['Nome']; ?></p>
<input type="text" placeholder="Nome do Cliente">
<input type="text" placeholder="Endereço">
<input type="text" placeholder="numero">

</p>


