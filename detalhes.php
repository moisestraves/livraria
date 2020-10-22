<?php

session_start();
require 'verificar-pedido.php';   
require 'adm/conexao.php';
require 'adm/func_sistema.php';
 
$id_livro = $_GET['id'] ;






$compra = "SELECT * from  livro where  Cod_livro =('$id_livro')";

$queryCompra = mysqli_query($conexao, $compra);


$produtos = array();



//Aqui o laço de  leitura da
while($produto = mysqli_fetch_assoc($queryCompra)){

$produtos [] = $produto;

}



foreach($produtos as $gerarpedido){

  


    




/* Aqui faz a verificação da sessão
se o cliente não estiver logado vai rediricionar para o login Para Efetuar a compra
if (!$_SESSION['Email']) {

    header('location:cliente-login.php');

   
}*/


    

?>
<div class="container">
<h3> Detalhes do Pedido</h3>
<form action="" method="POST">
<table>
    <h5>Intens do Pedido</h5>
    <th>Titulo</th> <td><?=$gerarpedido['Nome_livro'];?></td>
    <tr>
    <th>Preço</th><td><?= number_format($gerarpedido['Preco'],2,',','.');?></td>
    <tr>
        <hr>
    <th>Qtd</th><td><input type='number' min="1" value="1"   required></td>
</tr>
    <td><button class="btn    btn-primary btn-sm " type="submit" name="carrinho">Continuar</button></td>
   <tr>
    
</table>

<?php } ?>
</form>
</div>
<?php
require 'rodape.php';
?>