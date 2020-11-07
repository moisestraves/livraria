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

$verificar_login = "SELECT Email FROM  usuario where Email ='$email'";
$teste_Sql = mysqli_query($conexao,$verificar_login);


$resultado = $teste_Sql;


print_r($resultado);

if($resultado == 1){

    echo "Usuário já Cadastrador";

}elseif($resultado != 1){

    echo"Pode Cadastrar";
}


}


//$restuladoInsertUsuario=cadastrousuario($conexao,$nome,$cargo,$perfil,$departamento,$email,$senha,$ativo);

//var_dump($restuladoInsertUsuario);






require 'rodape.php';

 ?>






