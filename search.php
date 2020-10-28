<?php
require 'cabecadapagina.php';
require 'adm/conexao.php';
require 'adm/func_sistema.php';

// Recebido termo para Buscar
$termo = $_GET['q'];


$pesquisar = busca($conexao, $termo);

$resultadoPesquisa = array();

$resultado[] = $pesquisar;

// print_r($pesquisar);



?>
<div class="container">

    <h2> Resultado Pesquisa</h2>

    <?php foreach ($pesquisar as $itens) {

      // FOREACH DO TERMO DE BUSCAvar_dump($itens);
    ?>
        <table class="table table-bordered sm">
            <tr>
                <th>Titulo</th>
                 <th>Autor</th>   
                <th>Preco</th>
            </tr>
            <td><?php echo $itens['Nome_livro']; ?></td>
            <td><?php echo $itens['Autor']; ?></td>

            <td>
                <?php echo 'R$ ', number_format($itens['Preco'], 2, ',', '.'); ?>
            </td>

        </table>
    <?php } ?>
</div>

<?php
require 'rodape.php';


?>