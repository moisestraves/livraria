<?php

require 'adm/conexao.php';


/*Função que Libera o acesso do cliente*/
function  loginCliente ($conexao,$email,$senha){


    $slqCliente = "SELECT * FROM cliente WHERE Email =('$email') AND Senha=('$senha')";

    $queryCliente = mysqli_query($conexao,$slqCliente); 

       
    //Array Criado para  Agrupar os dados do usuário localizado no banco
    $dadosCliente = array();
    //Verificar a quantidade de indice para o cliente localizado no banco
    while($cliente = mysqli_fetch_assoc($queryCliente)){

    $dadosCliente [] = $cliente; // var_dump($cliente);
    
    
      //print_r($dadosCliente);
   
    // var_dump($encontrouCliente);

    }     

    
    $clienteJaCadastrado = mysqli_fetch_row($queryCliente);

   // var_dump($clienteJaCadastrado);
    //var_dump($dadosCliente);  



    if($clienteJaCadastrado = $dadosCliente){

        $_SESSION['Nome'] = $dadosCliente[0]['Nome'];
       
      //  var_dump($clienteJaCadastrado[0]['Email']);
        header('location:painel_cliente.php');
        echo "Liberado Acesso  ";

       
    }else {
        //Redirecionamento da pagina informando que o usuário não esta cadastrado no sistema
        header("location:cliente_login.php?nao_encontrado");

    }

}


function verificaAcesso(){

    if(!isset($_SESSION['Nome'])){
        session_destroy();
        header('location:cliente_login.php');
    }
}
    ?>


