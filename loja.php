<?php 
require 'cabecadapagina.php';
require 'adm/conexao.php';


//Aqui é selecionado todos os livros na base para Publicar na loja
$querLivros = 'SELECT * FROM livro ORDER BY Nome_livro ';
$resultado =mysqli_query($conexao,$querLivros);


$livros = array();
       
while ($livro = mysqli_fetch_assoc($resultado)) {
    
    $livros[] = $livro;
}
?>
  <!--Banner Principal do site Slider-->

  <!--<div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="IMG/capa.png" alt="CAPA DO SITE">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="IMG/bannerLivroColorido.png" alt="Livros coloridos imagem ">
      </div>
      </div>
  </div>-->
    
<!--Corpo da Estrutura dos pagina inicial dos livros-->

<h5 class="text-center">Livros</h5>

<?php foreach ($livros as $livrobase){
  ?>
<div class="container">
<div class="produtos">


<!--<img src="IMG/caminhos-infindos.jpg">-->
<div class="caption text-center"> 
<p><h5><?php echo $livrobase['Nome_livro'];?></h5></p> 

<p><h5><?php echo 'RS :', $livrobase['Preco'];?></h5></p>
<p>
<p><a href="checkout.php?id=<?=$livrobase['Cod_livro']; ?>" class="btn btn-primary btn-sm  active text-center" role="button" aria-pressed="true">Comprar</a></p>

</div>
<?php } ?>

</div>
</div>
    
<?php
require 'rodape.php';
?>