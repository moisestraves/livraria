<?php
session_start();
require 'cabecadapagina.php';
require 'adm/conexao.php';
require 'adm/func_sistema.php';

//Verifica se o cliente esta logado no portal, se tiver login sera direcionado para o painel do cliente
if (isset($_SESSION['Email'])) {

    //print_r($clienteCadastrado);

    header('location:cliente_login.php.php');
}


?>
<div id="alinharCadastro">

    <div class="cliente_login">
        
    
        <form method="POST" action="processa_cliente.php">

            <p>

                <input required type="email" id="email" name="login" placeholder="E-mail">
            </p>
            <p>

                <input required type="password" id="senha" name="senha" placeholder="Senha">
            </p>
            <p>
                <h6>Recuperar senha ou cadastrar nova senha</h6>
                <button name="entrar">Entrar</button>
            </p>
        </form>
    </div>
<?php
    require 'rodape.php';

    ?>