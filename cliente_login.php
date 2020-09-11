<?php
session_start();
require 'header.php';
require 'adm/conexao.php';
require 'adm/func_sistema.php';
?>


<div class="cliente_login">
    <p> Já sou cliente </p>
<form method="POST"  action="processa_cliente.php">
   
        <p>
            
            <input required type="email" id="email" name="login"  placeholder="E-mail" >
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



require 'footer.php';
?>