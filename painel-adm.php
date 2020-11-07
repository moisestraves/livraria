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
    <p> olá <?php echo $_SESSION['Nome']; ?></p>
    <p>Você está no painel de controle e administração da Livraria ONLINE.</p>
    <p>Escolha o que deseja gerenciar:</p>
    

</div>

<?php

require 'rodape.php';
