<?php
require 'cabecadapagina.php';
require 'adm/conexao.php';

require 'adm/func_sistema.php';


//Aqui é selecionado todos os livros na base para Publicar na loja
$querLivros = 'SELECT * FROM livro ORDER BY Nome ';
$resultado = mysqli_query($conexao, $querLivros);


$livros = array();

while ($livro = mysqli_fetch_assoc($resultado)) {

  $livros[] = $livro;
}


?>

<!--Corpo da Estrutura dos pagina inicial dos livros-->

<h5 class="text-center">Livros</h5>

<?php foreach ($livros as $livrobase) {
?>
  <div class="d-flex flex-wrap">
    <div class="fotos">

      <div class="caption text-center">

        <p>
          <h5><?php echo $livrobase['Nome']; ?></h5>
        </p>

        <?php $id_livro = $livrobase['Cod_livro'];

        //var_dump ($id_livro);

        $capa = listarCapa($conexao, $id_livro);

        ?>

        <!-- AQUI O FOREACH DA LEITURA DAS CAPAS DOS LIVROS-->
        <?php foreach ($capa as $totalcapas) ?>

        <img src="capas/<?= $totalcapas['nome_imagem'] ?>" alt="Capa do Livro" class="border">

        <!--FORMATAÇÃO EM MOEDA -->

        <h6><?php echo 'Código -', $livrobase['Cod_livro']; ?></h6>
        </p>
        <p>
          <h5><?php echo 'R$ ', number_format($livrobase['Preco'], 2, ',', '.'); ?></h5>
        </p>

        <!-- Botão  que vai direciona para página de checkout -->
        <p><a href="detalhes.php?id=<?= $livrobase['Cod_livro']; ?>" class="btn  text-justify-center  btn-primary btn-sm  active   " role="button" aria-pressed="true">Detalhes</a></p>



      </div>

    </div>
  <?php } ?>

  </div>
  <?php
  require 'rodape.php';
  ?>