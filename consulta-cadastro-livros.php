<?php
session_start();
require 'adm/conexao.php';
require 'cabecaarea-admin.php';
require 'adm/func_sistema.php';

/* Aqui faz a verificação da sessão
se o cliente não estiver logado vai rediricionar para o login*/
if (!$_SESSION['Email']) {

    header('location:login-adm.php');

   
}


?>



<div class="container">
<h4 class="text-info mx-auto" style="width: 300px;">Relatórios de Livros </h4>
<div class="table-responsive">
    <table class="table bordered text-center">
    <thead class="thead-light ">
    <tr>
   
        <th scope="col">Nome</th>
        <th scope="col">Autor</th>
        <th scope="col">Preço</th>
        <th scope="col">Categoria</th>
        <th scope="col">Ano de Publicação</th>
        <th scope="col">Ano de Publicação</th>
        <th scope="col">Editar</th>
        <th scope="col">Excluir</th>

       
       
    </tr>
    </thead>

    <?php  $relatorioLivros =consultaLivrosPortal($conexao);
    
    foreach ($relatorioLivros as $livro){

    
    ?>

    <tr>
    
    <td><?=$livro['Nome']; ?></td>
    <td><?=$livro['Autor']; ?> </td>
    <td><?=number_format($livro ['Preco'],2,',','.'); ?></td>
    <td><?=$livro['Categoria']; ?></td>
    <td><?=$livro['Ano']; ?></td>
    <td><?=$livro['Resumo']; ?></td>
    <td> <a href="editar-livro.php?id=<?=$livro['Cod_livro']; ?>"> Editar </td>
    <td> <a href="excluir-livro.php?id=<?=$livro['Cod_livro']; ?>"> Excluir<!--<img src="IMG/lapis.png" width="5%">--></a> </td>
    </tr>
    <?php
    } ?>
    </table>
</div>
</div>

<?php
require 'rodape.php';
?>