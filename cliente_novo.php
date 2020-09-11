<?php

require 'header.php';
require 'adm/conexao.php';
require 'adm/func_sistema.php';



?>

<div class="cliente_login">

<form  method="post" action="">

<p>Faça o seu Cadastro</p>
<p>
<input type="e-mail"  name="login" placeholder="email"></p>
<p><input type="password" name="senha" placeholder="senha"></p>
<button type="submit">Cadastrar</button>



</form>
</div>

<?php 

    $cliente = $_POST['login'];
    
    $senhaCliente = $_POST['senha'];

    $resultado=cadastroCliente($conexao,$cliente,$senhaCliente);

    if($resultado > 0){

        echo 'Parabéns Cliente cadastrado';
    }else{

        echo 'Teste Novamente';
    }

   
    

?>