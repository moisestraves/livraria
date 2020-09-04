<?php
require 'header.php';
?>


<div class="cliente_login">
    <p> Já sou cliente </p>
<form action="" method="post" id="form-login" name="form-login">
   
        <p>
            
            <input required type="email" id="email" name="email"  placeholder="E-mail" >
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