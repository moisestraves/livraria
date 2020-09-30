<?php

require 'adm/conexao.php';
require 'adm/func_sistema.php';

if(isset($_POST['cadastrar'])){

    
$nome = $_POST['nome'];
$cargo = $_POST['cargo'];
$perfil = $_POST['perfil'];
$departamento = $_POST['departamento'];
$email = $_POST['email'];
$senha  = $_POST['senha'];
$ativo= $_POST['ativo'];

//var_dump($conexao);

// AQUI O SISTEMA FAZ A CHAMADA DA FUNCTION INSERT DE CADASTRO DE USUÁRIO
$restuladoInsertUsuario=cadastrousuario($conexao,$nome,$cargo,$perfil,$departamento,$email,$senha,$ativo);

//var_dump($restuladoInsertUsuario);


  
if($restuladoInsertUsuario== 1){

    echo 'USUÁRIO CADASTRADO COM SUCESSO !';
    header('location:painel-adm.php');
}else {

    echo '<br><br>NÃO FOI POSSIVEL CADASTRAR O USUÁRIO <br> <br>ENTRE EM CONTATO COM O ADMINISTRADOR DO SISTEMA !';
    echo '<br> <a href="painel-adm.php>Clique aqui </a>';
    

    
}

}






 






