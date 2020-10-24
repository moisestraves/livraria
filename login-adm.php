<?php

require 'adm/conexao.php';

require 'header-areaadministrativa.php';



?>
<div class="adm">

    <h5>Área Administrativa </h5>

    <div class="login_adm">


        <form method="POST" action="processa-adm.php">

            <p>

                <input required type="email" id="email" name="login" placeholder="E-mail">
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