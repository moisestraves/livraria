<?php
require 'cabecadapagina.php';
require 'adm/conexao.php';

require 'adm/func_sistema.php';
?>
<!--Banner Principal do site Slider-->

<div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="IMG/capa.png" alt="CAPA DO SITE">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="IMG/bannerLivroColorido.png" alt="Livros coloridos imagem ">
    </div>
  </div>
</div>
<div class="container theme-showcase " role="main">
  <?php
  //Aqui é selecionado todos os livros na base para Publicar na loja
  $querLivros = 'SELECT * FROM livro ORDER BY Nome ';
  $resultadoLivros = mysqli_query($conexao, $querLivros);
  $livrosCatalogo = mysqli_fetch_assoc($resultadoLivros);
  ?>
  <!--Corpo da Estrutura dos pagina inicial dos livros-->

  <h5 class="text-center">Produtos</h5>
  <!--Laço de controle while livros-->
  <div class="row">
    <?php while ($livrobase = mysqli_fetch_assoc($resultadoLivros)) { ?>
      <!-- Aqui a tag faz Deslogamento em linha-->

      <div class="col-sm-6 col-md-3">
        <div class="caption text-center">
          <p>
          <h5><?php echo $livrobase['Nome']; ?></h5>
          </p>

          <?php $id_livro = $livrobase['Cod_livro'];
          $capa = listarCapa($conexao, $id_livro);
          ?>
          <!-- AQUI O FOREACH DA LEITURA DAS CAPAS DOS LIVROS-->
          <?php foreach ($capa as $totalcapas) ?>
          <img src="capas/<?= $totalcapas['imagem'] ?>" alt="Destaque" class="foto">
          <!--FORMATAÇÃO EM MOEDA -->
          <h6><?php echo 'Cod-Livro ', $livrobase['Cod_livro']; ?>
            </p>
            <p>
            <h5><?php echo 'R$ ', number_format($livrobase['Preco'], 2, ',', '.'); ?></h5>
          </h6>
          </p>
          <!-- Botão  que vai direciona para página de checkout -->
          <div><a href="detalhes.php?id=<?= $livrobase['Cod_livro']; ?>" class="btn  text-justify-center  btn-primary btn-sm  active   " role="button" aria-pressed="true">Detalhes</a></div>
        
        </div>
      </div>
     


     
    <?php } ?>
    
  </div>


  <?php
  require 'rodape.php';
  ?>