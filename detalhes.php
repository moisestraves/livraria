<?php

session_start();
require 'cabecadapagina.php';
require 'adm/conexao.php';
require 'adm/func_sistema.php';


$id_livro = $_GET['id'];

// Chamada da função que lista os livros Aqui ela vai mostrar o livro selecionado para compra    
$capa = listarCapa($conexao, $id_livro);

$compra = "SELECT * from  livro where  Cod_livro =('$id_livro')";

$queryCompra = mysqli_query($conexao, $compra);


$produtos = array();



//Aqui o laço de  leitura da
while ($produto = mysqli_fetch_assoc($queryCompra)) {

    $produtos[] = $produto;
}

foreach ($produtos as $gerarpedido) {

    /* Aqui faz a verificação da sessão
se o cliente não estiver logado vai rediricionar para o login Para Efetuar a compra
if ($_SESSION['Email']) {

    header('location:cliente-login.php');

   
}*/

?>
    <div class="container">
        
        <form action="carrinho.php" method="POST">
            <table class="table border">

                <?php foreach ($capa as $totalcapas) ?>

                <h5 class="text-center">Detalhes do Produto</h5>

                <!--<th class="text-left">Livro</th>-->
                <tr class=" border ">
                    <td class=" border"><?= $gerarpedido['Nome_livro']; ?></td>
                <tr>
                    <td class=" border"><img src="capas/<?= $totalcapas['nome_imagem'] ?>" alt="Destaque" class="foto" width="200 px" height="250"></td>

                <tr>
                    <th>Detalhes</th>
                    <td class=" border"><?= $gerarpedido['Detalhes']; ?></td>
                <tr>
                <tr>
                    <th>Preço</th>
                    <td class=" border"><?= number_format($gerarpedido['Preco'], 2, ',', '.'); ?></td>


                <tr>
                    <th>Quantidade</th>
                    <td class="text-left"><input type='number' min="1" max="3" value="1" required></td>



                    <td><button class="btn    btn-primary btn-sm " type="submit" name="carrinho">Continuar</button></td>
                <tr>

            </table>

        <?php } ?>
        </form>
    </div>
    <?php
    require 'rodape.php';
    ?>