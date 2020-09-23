<?php
session_start();
require 'cabecadapagina.php';
require 'adm/conexao.php';
require 'adm/func_sistema.php';

//VERIFICA SE  O USUÁRIO ESTA LOGADO,SE NÃO ESTIVER SERÁ DIRECIONADO PARA PAGINA DE LOGIN OU CADASTRO


?>
<div id="alinharCadastro">

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


<!-- Botão para castrado de novos clientes-->
    <div class="clientecadastrar">
<p> Ainda não sou Cliente </p>
<!--Aqui foi inserido o botão de cadastro do cliente caso ele não seja cadastrado-->
<a href="cadastrar-cliente.php"><button  type ="subimit" name="cadastrar">Cadastrar</button></a>
</div>


</div>
<?php 



require 'rodape.php';
?>