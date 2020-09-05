<?php

require 'header.php';
require 'adm/conexao.php';
require 'adm/func_sistema.php';


$login =$_POST['email'];
$senha =$_POST['senha'];

echo " Login $login '<br>'";
echo " Senha : $senha '<br>'";


?>