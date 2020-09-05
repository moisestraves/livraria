<?php

$servidor="localhost";
$usuario="conecta_livraria";
$senha="HjmfATIcnoYtZdPy";
$banco="livraria";


//Conectando com o servidor
$conexao = mysqli_connect($servidor , $usuario , $senha , $banco);

if($conexao){

   /* var_dump($conexao); */
    

    mysqli_set_charset ($conexao, "utf8");
       
 } 
 


?>