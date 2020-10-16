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
$restuladoInsertUsuario=cadastrousuario($conexao,$nome,$cargo,$perfil,$departamento,$email,$senha,$ativo);

//var_dump($restuladoInsertUsuario);


  
if($restuladoInsertUsuario== 1){

    echo "<div class='alert alert-success' role='alert'>
    <h5 class='text-center'>Usuário Cadastrado com Sucesso !</h5>";
   
   
}else {

    echo "<div class='alert alert-danger' role='alert'>
    <h5 class='text-center'><br><br>NÃO FOI POSSIVEL CADASTRAR O USUÁRIO <br> <br>ENTRE EM CONTATO COM O ADMINISTRADOR DO SISTEMA !</h5>";
   
    
    

    
}

}




require 'rodape.php';

 






