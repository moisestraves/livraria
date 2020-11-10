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
</head>

<!--DiviGeral Corpo-->
<header class="top_busca">
<div id="caixa-top">
        <!-- LEMBRAR DE VALIDAR AQUI OS CAMPOS PARA BUSCA-->
        <form action="search.php" method="GET">
        <input type="search" name='q' id="q" placeholder="Buscar por , Nome,Preco,Autor,Categorias" > 
        <button type="submit">Busca</button>
       </form>
      </div>

</header>
<main class="conteudo">

  <body>
    <div id='principal'>
      <div id="logo-top">
        <h1><a href="index.php"> On Livraria Brasil</a></h1>

      </div>

      <!--Configurações e  Opçãoes do Carrinho de Compras-->
      <div class="carrinho">
        <h5>Loja Carrinho <svg width="1em" height="2em" viewBox="0 0 16 16" class="bi bi-cart" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
          </svg></h5>
      </div>
      <!--Configuração do topo da página local do menu principal da página-->
      <!--Configuração do topo da página local do menu principal da página-->
      <div id="nav">
        <ul class="nav justify-content-center">
          <li class="nav-item">
            <a class="nav-link text-white  active" href="cadastro-usuario-sistema.php">Cadastrar Usuário</a>
          </li>


          <li class="nav-item">
            <a class="nav-link text-white " href="cadastrar-editora.php">Cadastrar Editora</a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-white " href="cadastrar-livro.php">Cadastrar Livro</a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-white " href="cadastrar-estoque.php">Cadastrar Estoque</a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-white " href="consulta-cadastro-livros.php">Consulta de Livros</a>
          </li>
          <li class="nav-item">
          <li class="nav-item">
            <a class="nav-link text-white " href="listar-clientes.php">Consultar Clientes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white " href="consultar-usuarios-adm.php">Consultar Usuários</a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-white " href="sairadm.php">Sair</a>
          </li>
        </ul>
      </div>
      <!--FINAL DO MENU PRINCIPAL DO SITE-->