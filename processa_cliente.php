<?php

session_start();
require 'cabecadapagina.php';
require 'adm/conexao.php';
require 'adm/func_sistema.php';



/*Aqui o sistema recebe os dados de login do cliente para acessar os sistema*/

if (isset($_POST['login']) && (isset($_POST['senha']))) {

    $loginUsuario = mysqli_escape_string($conexao, $_POST['login']);
    $senhaUsuario = mysqli_escape_string($conexao, $_POST['senha']);



    $loginSql = "SELECT * FROM cliente WHERE Email =('$loginUsuario') AND ('$senhaUsuario')";
    $queryLogin = mysqli_query($conexao, $loginSql);

    //Criado o Array
    $dadosusuario = array();

    //Aqui estou percorrendo o array com as informações do usuário    
    while ($usuario = mysqli_fetch_assoc($queryLogin)) {
        $dadosusuario[] = $usuario;
    }


    //print_r($dadosusuario);


    $clienteCadastrado = mysqli_fetch_row($queryLogin);
}
//Verificação do login do usuário localizado 
if ($clienteCadastrado = $dadosusuario) {

    //Aqui é criada a sessão com os dados do usuário

    $_SESSION['Email'] = $clienteCadastrado[0]['Email'];

    $_SESSION['Cod_cliente'] = $clienteCadastrado[0]['Cod_cliente'];
    $_SESSION['Nome'] = $clienteCadastrado[0]['Nome'];






    header('location:painel_cliente.php');
} else {


    header('location:cliente_login.php?usaurionãocastrado');
}






?>
<?php

?>