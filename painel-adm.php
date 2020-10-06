<?php

session_start();
/* Aqui faz a verificação da sessão
se o cliente não estiver logado vai redirecionar para o login*/
if (!$_SESSION['Email']) {

    header('location:login-adm.php');
}

require 'cabecaarea-admin.php';
require 'adm/func_sistema.php';
require 'adm/conexao.php';


?>


<div class="container">

<h2>Painel Administrativo </h2>
<p> olá  <?php echo $_SESSION['Nome'];?></p>
<p>Você está no painel de controle e administração da  Livraria ONLINE.</p>
<p>Escolha o que deseja gerenciar:</p>
<div class="d-flex align-items-stretch">
    <div>
    <h5>Cadastrar</h5>
<ul>
<li><a href="cadastro-usuario-sistema.php">Cadastro de usuário</a></li>
<li><a href="cadastrar-editora.php">Cadastrar Editora</a></li>
<li><a href="cadastrar-livro.php">Cadastrar Livro</a></li>
<li><a href="#">Cadastrar categorias</a></li>

</ul>
</div>

  
<div>

<h5>Relatórios</h5>
<ul>
<li><a href="consulta-cadastro-livros.php">Consulta de Livros</a></li>
<li><a href="#">Consulta Clientes</a></li>
<li><a href="#">Consulta  Usuários</a></li>
</ul>  

</div>

</div>

<h5>Editar Perfil</h5>
<ul>
<li><a href="perfil-usuario.php">Perfil</a></li>
</ul>  

</div>

</div>
            
       <?php

require 'rodape.php';