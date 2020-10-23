<?php

session_start();
require 'verificar-pedido.php';   
require 'adm/conexao.php';
require 'adm/func_sistema.php';


$id_livro = $_GET['id'] ;

// Chamada da função que lista os livros Aqui ela vai mostrar o livro selecionado para compra    
$capa = listarCapa($conexao, $id_livro);

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
<h3 class="text-center"> Detalhes do Pedido</h3>
<form action="carrinho.php" method="POST">
<table>

<?php foreach ($capa as $totalcapas) ?>



    <h5 >Intens do Pedido</h5>
    <!--<th class="text-left">Livro</th>--> 
    <tr>
    <td><?=$gerarpedido['Nome_livro'];?></td>
    <tr>
    <td><img src="capas/<?= $totalcapas['nome_imagem'] ?>" alt="Destaque" class="foto" width="200 px" height="250"></td> 
    <tr>
    <th>Preço</th><td><?= number_format($gerarpedido['Preco'],2,',','.');?></td>
    <tr>
    <th>Quantidade</th><td class="text-left" ><input type='number' min="1" value="1"   required></td>

    <td><button class="btn    btn-primary btn-sm " type="submit" name="carrinho">Continuar</button></td>
   <tr>
    
</table>

<?php } ?>
</form>
</div>
<?php
require 'rodape.php';
?>