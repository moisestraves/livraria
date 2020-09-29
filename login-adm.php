<?php
require 'cabecadapagina.php';
require 'adm/func_sistema.php';
require 'adm/conexao.php';


?>





<div class="adm">

<h1>Área Administrativa </h1>
    <div class="login_adm">
        
    
    <form method="POST"  action="processa-adm.php">
   
        <p>
            
            <input required type="email" id="email" name="login"  placeholder="E-mail" >
        </p>
        <p>
           
            <input required type="password" id="senha" name="senha" placeholder="Senha">
        </p>
        <p>
        
            <button name="entrar">Entrar</button>
        </p>
 
    </form>
    </div>
</div>
    <?php
    require 'rodape.php';


    ?>
