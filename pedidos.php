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


$id = 1;
// Aqui foi inserida a função que consulta os pedidos do cliente
$pedidonovo=conPedido($conexao,$id);

/*Aqui é feita a verificação do retorno do pedido do cliente
 se for > 0 ele vai listar os pedidos na Tabela*/ 

 if($pedidonovo < 1){

    //AQUI FALTA CONFIGURAR A LISTAGEM DO PEDIDO DO CLIENTE
        echo '
        <div class="imprimirTabela">
        
        <p>Resumo do Pedido</p>
        <table>
            <tr>
            <th>Nome</th>
            <th>Data Pedido</th>
            <th>Qtd</th>
            </tr>
            <tr>
            <td>Cliente Teste</td>
            <td>09/09/2020</td>
            <td>1</td>
            </tr>
    
            </table> 
            
            </div>
            
            ';
                  
              
    }else {

    
        echo '<h1>Não localizamos o Pedido para este Cliente';
   
}

?>
