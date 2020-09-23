<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Livraria Online</title>
<!--css bootstrap-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<!--Scripst -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="CSS/main.css">
<div id="logo-top">
  <h1> On Livraria Brasil</h1>

</div>

<!--Caixa de Pesquisa do topo de produtos fixo no topo centralizado-->
  <div id="caixa-top">

  <input  type="search" id="txtBusca" placeholder="PESQUISAR" >
  
</div> 
<!--Configurações e  Opçãoes do Carrinho de Compras-->
<div class="carrinho">
        <h5>Loja Carrinho <svg width="1em" height="2em" viewBox="0 0 16 16" class="bi bi-cart" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
        </svg></h5>
</div>
    <!--Configuração do topo da página local do menu principal da página-->
      <div id="nav">
          <ul class="nav justify-content-center">
          
            <li class="nav-item">
             <a class="nav-link text-white  active" href="#">LIVROS</a>
         </li>
       
         <li class="nav-item">
          <a class="nav-link text-white " href="#">PRODUTOS</a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link text-white " href="#">PROMOÇÕES</a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link text-white " href="#">EBOOKS</a>
        </li>
        
        <li class="nav-item">
            <a class="nav-link text-white " href="#">LANÇAMENTOS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white " href="cliente_login.php">ENTRE OU CADASTRE-SE</a>
          </li>
</ul>
</div> <!--FINAL DO MENU PRINCIPAL DO SITE-->

</head>
<main>
    <body>
  <!--Banner Principal do site Slider-->

  <div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="img/capa.png" alt="Notebook Imagem">
      </div>
      </div>
      
      
      <div class="carousel-item">
        <img class="d-block w-100" src="img/bannerLivroColorido.png" alt="Livros coloridos imagem ">
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
    <a href="cliente_login.php"><button type="submit" href="login.html">Comprar</button></a>
  </div>
 </div>

 <div>
  <img src="IMG/capa-livro-bookwire-.jpg">

  <div class="botao-comprar">
    <h5>Escalada do Sucesso</h5>
    <p>R$ 40,00</p>
    <p>3 x sem juros no cartão</p>
    
    <a href="cliente_login.php"> <button>Comprar</button></a>
  </div>

 </div>

 <div>
  <img src="IMG/capa-livro-bookwire-.jpg">
  <div class="botao-comprar">
    <h5>Escalada do Sucesso</h5>
    <p>R$ 40,00</p>
    <p>3 x sem juros no cartão</p>
    
   
    <a href="cliente_login.php"> <button>Comprar</button></a>
    

  </div>
</div>
</aside>
  

 </div>
</div>

</main>
 <!--CORPO DO RODAPÉ-->
<footer>
<ul>
<li><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-telephone" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
</svg> (11) - 2022-0032 </li>
<li>Trabalhe Conosco</li>
<li>Lojas</li>
<li>Chat</li>
</ul>
  <div class="rodapeicone">
    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-envelope" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383l-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"/>
    </svg>
   <img src="IMG/facebook-oval.png" width="3%">
  </div>
 <!--<p> Copyright © 2020 Todos direitos reservado Livraria Online</p>--> 
</footer>

</body>
  

</html>
