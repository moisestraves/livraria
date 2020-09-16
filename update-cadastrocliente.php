<?php
  session_start();

  require 'adm/conexao.php';
require 'adm/func_sistema.php';

if(isset($_POST['atualizar'])){

    echo "Botão Update Acionado ";
}

?>