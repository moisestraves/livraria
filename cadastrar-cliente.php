<?php

require 'cabecadapagina.php';
require 'adm/conexao.php';
require 'adm/func_sistema.php';



?>

<div class="cliente_login">

<form  method="post" action="">

<p>Faça o seu Cadastro</p>
<p>
<input type="e-mail"  name="login" required placeholder="email"></p>
<p><input type="password" name="senha" required placeholder="senha"></p>
<button   name ="cadastrar"type="submit">Cadastrar</button>
</form>
</div>

<?php 

    // Dados para o Cadastro Inicial do Cliente

    if(isset($_POST['cadastrar'])){
    $cliente = $_POST['login'];
    
    $senhaCliente = $_POST['senha'];

    

    $resultado=cadastroCliente($conexao,$cliente,$senhaCliente);
    
   
    header('locaction:cliente_login.php');


    }

    

?>
<?php



require 'rodape.php';

?>