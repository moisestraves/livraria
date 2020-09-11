<?php

session_start();
/* Aqui faz a verificação da sessão
se o cliente não estiver logado vai rediricionar para o login*/
if (!$_SESSION['Email']) {

    header('location:cliente_login.php');
}
require 'top_cliente.php';
require 'adm/func_sistema.php';




//verificaAcesso();
?>
<div class="imprimirTabela">
<p>Informações do cliente</p>
<table>
    <tr>
    <th>Nome</th>
    <th>Email</th>
    <th>senha</th>
    <th>telefone</th>
    </tr>
    <tr>
        <td>Moises Traves</td>
        <td>traves8@msn.com</td>
        <td>********</td>
        <td>11 9233-0101</td>
    </tr>


</table>


</div>
