<?php

require 'adm/conexao.php';
require 'adm/func_sistema.php';

if(isset($_POST['cadastrar'])){

    
$nome = $_POST['nome'];
$data =$_POST['data'];
$cargo = $_POST['cargo'];
$perfil = $_POST['perfil'];
$departamento = $_POST['departamento'];
$email = $_POST['email'];
$senha  = $_POST['senha'];
$statusUsuario =$_POST['ativo'];

// CHAMANDO A FUNÇÃO DE INSERT 
//var_dump($conexao);




    
$instatusUsuario=cadastrousuario($conexao ,$nome , $cargo ,$perfil ,$departamento , $email , $senha ,$statusUsuario);

var_dump($instatusUsuario);

if($instatusUsuario == 1){

    echo 'USUÁRIO CADASTRADO COM SUCESSO !';
}else {

    echo '<br><br>NÃO FOI POSSIVEL CADASTRAR O USUÁRIO <br> <br>ENTRE EM CONTATO COM O ADMINISTRADOR DO SISTEMA !';
}
//cliente();

}
/*var_dump($nome);
var_dump($data);
var_dump($cargo);
var_dump($perfil);
var_dump($departamento);
var_dump($email);
var_dump($senha);
var_dump($statusUsuario);*/



