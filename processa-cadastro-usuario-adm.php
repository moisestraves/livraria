<?php
require 'cabecaarea-admin.php';
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


$verificaUsuario = validarUsuarioCadastroAdm($conexao,$email);

if ($verificaUsuario >= 1) {

    echo "<div class='alert alert-danger' role='alert'>
<h5>E-mail Já Cadastrado!</h5>";

 die;
    
}

//print_r($resultado);
}

$resultadoInsertUsuario=cadastrousuario($conexao,$nome,$cargo,$perfil,$departamento,$email,$senha,$ativo);

if($resultadoInsertUsuario ==1){

    
    echo "<div class='alert alert-sucess' role='alert'>
<h5>Usuário Cadastradro com sucesso !</h5>";

}








 ?>


<?php

require 'rodape.php';
?>



