<?php 
require 'cabecadapagina.php';
require 'adm/conexao.php';


//Aqui é selecionado todos os livros na base para Publicar na loja
$querLivros = 'SELECT * FROM livro_teste  ORDER BY Nome_livro ';
$resultado =mysqli_query($conexao,$querLivros);


$livros = array();
       
while ($livro = mysqli_fetch_assoc($resultado)) {
    
    $livros[] = $livro;
}
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
   <h1> Produtos </h1>
   
   <!--Aqui Estou usando o foraeach para listar os livros -->
  <?php foreach ($livros as $livrobase){

      
    //print_r($livrobase['Nome_livro']);
  ?>

    <div class="row ">

  
   <div  class="img-thumbnail text-center ">

    <p><img src="IMG\biblia.jpg" alt="Biblia Sagrada Capa Leão " width="30%"></p>

    <div class="caption text-center">
    <p><h5> <?php echo $livrobase['Nome_livro'];?> </h5></p>
    <p><h5>  <?php echo 'Autor', $livrobase['Autor'];?> </h5></p>
    <p><a href="detalhes.php?id=<?=$livrobase['Cod_livro']; ?>" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">Comprar</a></p>
   
  
    </div>
     </div>
     
     <?php } ?>
     </div> 

<?php
require 'rodape.php';
?>