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


<h4 class="text-info mx-auto" style="width: 400px;">Usuários Cadastrados no Sistema  </h4>
<div class="table-responsive">
    <table class="table bordered table-hover table-sm table-dark">
    <thead class="thead-light ">
    <tr>
   
        <th scope="col">Livro</th>
        <th scope="col">Qtd Estoque</th>
        <th scope="col">Editar</th>
        <th scope="col">Excluir</th>
        

       
       
    </tr>
    </thead>

    <?php  $consultarestoque =consultaEstoque($conexao);
    
    foreach ($consultarestoque as $produtoEstoque){

    
    ?>

    <tr>
    
    <td><?=$produtoEstoque['Nome_livro_estoque']; ?></td>
    <td><?=$produtoEstoque['Qtd_estoque']; ?> </td>
    
    <td> <a href="editar-estoque?id=<?=$produtoEstoque['Cod_livro']; ?>"> Editar </td>
    <td> <a href="#"> Excluir<!--<img src="IMG/lapis.png" width="5%">--></a> </td>
    </tr>
    <?php
    } ?>
    </table>
</div>
</div>

<?php
require 'rodape.php';
?>