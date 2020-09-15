<?php
session_start();
/* Aqui faz a verificação da sessão
se o cliente não estiver logado vai rediricionar para o login*/
if (!$_SESSION['Email']) {

    header('location:cliente_login.php');
}
require 'top_cliente.php';
require 'adm/conexao.php';
require 'adm/func_sistema.php';



$id_cliente =$_SESSION['Cod_cliente'];

//$pedido =conPedido($conexao,$id_cliente);

//Aqui é Executada a Query de consulta do Usuário Logado no Sistema
$procCliente = "SELECT* from cliente where  Email='$id_cliente'";
$pedido =mysqli_query($conexao,$procCliente);

$resultado= mysqli_fetch_assoc($pedido);
print_r($resultado);

if($resultado < 1){


    echo "<br><h1> Relatório de Pedidos";
    
    echo "<h3> Não foi Localizamos pedido para você !";
    
    
}

?>
