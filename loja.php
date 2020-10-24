<?php
require 'cabecadapagina.php';
require 'adm/conexao.php';

require 'adm/func_sistema.php';


//Aqui é selecionado todos os livros na base para Publicar na loja
$querLivros = 'SELECT * FROM livro ORDER BY Nome_livro ';
$resultado = mysqli_query($conexao, $querLivros);


$livros = array();

while ($livro = mysqli_fetch_assoc($resultado)) {

  $livros[] = $livro;
}


?>

<!--Corpo da Estrutura dos pagina inicial dos livros-->

<h5 class="text-center">Produtos</h5>

<?php foreach ($livros as $livrobase) {
?>
  <div class="container">
    <div class="produtos">

    <div class="caption text-center">

        <p>
          <h5><?php echo $livrobase['Nome_livro']; ?></h5>
        </p>

        <?php $id_livro = $livrobase['Cod_livro'];

        //var_dump ($id_livro);

        $capa = listarCapa($conexao, $id_livro);




        ?>

        <!-- AQUI O FOREACH DA LEITURA DAS CAPAS DOS LIVROS-->
        <?php foreach ($capa as $totalcapas) ?>

        <img src="capas/<?= $totalcapas['nome_imagem'] ?>" alt="Destaque" class="foto">

        <!--FORMATAÇÃO EM MOEDA -->

        <h6><?php echo 'Código -', $livrobase['Cod_livro']; ?></h6>
        </p>
        <p>
          <h5><?php echo 'R$ ', number_format($livrobase['Preco'], 2, ',', '.'); ?></h5>
        </p>

        <!-- Botão  que vai direciona para página de checkout -->
        <p><a href="checkout.php?id=<?= $livrobase['Cod_livro']; ?>" class="btn  text-justify-center  btn-primary btn-sm  active   " role="button" aria-pressed="true">Comprar</a></p>

      </div>

    <?php } ?>

    </div>
  </div>
  <?php
  require 'rodape.php';
  ?>