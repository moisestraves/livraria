<?php 
require 'cabecadapagina.php';
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
   
  
 
  
<!--Corpo da Estrutura dos pagina inicial dos livros-->

<aside>
<div id="livros">
<div>
  <img src="IMG/caminhos-infindos.jpg">
  
  <div class="botao-comprar">
   
    <h5>Caminhos infinitos</h5>
    <p>R$ 80,00 </p>
    <p>3x sem juros no cartão</p>
    <a href="cliente-login.php"><button type="submit" href="login.html">Comprar</button></a>
  </div>
 </div>

 <div>
  <img src="IMG/capa-livro-bookwire-.jpg">

  <div class="botao-comprar">
    <h5>Escalada do Sucesso</h5>
    <p>R$ 40,00</p>
    <p>3 x sem juros no cartão</p>
    
    <a href="cliente-login.php"> <button>Comprar</button></a>
  </div>

 </div>

 <div>
  <img src="IMG/capa-livro-bookwire-.jpg">
  <div class="botao-comprar">
    <h5>Escalada do Sucesso</h5>
    <p>R$ 40,00</p>
    <p>3 x sem juros no cartão</p>
    
   
    <a href="cliente-login.php"> <button>Comprar</button></a>
    

  </div>
</div>
</aside>
  

 </div>
</div>
<?php
require 'rodape.php';
?>