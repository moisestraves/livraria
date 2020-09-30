<?php

require 'adm/conexao.php';
require 'adm/func_sistema.php';

if(isset($_POST['cadastrar'])){

    
$nome = $_POST['Editora'];
$contato = $_POST['Contato'];
$email = $_POST['email'];
$telefone= $_POST['telefone'];

//var_dump($conexao);

// AQUI O SISTEMA FAZ A CHAMADA DA FUNCTION INSERT DE CADASTRO DE USUÁRIO
$resultado = cadastrarEditora($conexao,$nome,$contato,$email,$telefone);

//var_dump($restuladoInsertUsuario);


  
if($resultado == 1){

    echo 'Editora Cadastrada com Sucesso !';
    //header('location:painel-adm.php');
}else {

    echo '<br><br>NÃO FOI POSSIVEL CADASTRAR Editora <br> <br>ENTRE EM CONTATO COM O ADMINISTRADOR DO SISTEMA !';
    echo '<br> <a href="painel-adm.php>Clique aqui </a>';
    

    
}

}
