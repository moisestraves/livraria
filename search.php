<?php
require 'cabecadapagina.php';
require 'adm/conexao.php';
require 'adm/func_sistema.php';

// Recebido termo para Buscar
$termo = $_GET['q'];

//var_dump($termo);



$pesquisar = busca($conexao, $termo);

$resultadoPesquisa = array();

$resultado[] = $pesquisar;

//print_r($pesquisar);



?>
<div class="container">

    <h2> Resultado Pesquisa</h2>

    <?php foreach ($pesquisar as $itens) {

      // FOREACH DO TERMO DE BUSCAvar_dump($itens);
    ?>
        <table class="table table-bordered sm text-center">
            <tr>
                <th>Titulo</th>
                 <th>Autor</th> 
                 <th>Categoria</th> 
                <th>Preco</th>
            </tr>
            <td><?php echo $itens['Nome']; ?></td>
            <td><?php echo $itens['Autor']; ?></td>
            <td><?php echo $itens['Categoria']; ?></td>

            <td>
                <?php echo 'R$ ', number_format($itens['Preco'], 2, ',', '.'); ?>
            </td>

        </table>
    <?php } ?>
</div>

<?php
require 'rodape.php';


?>