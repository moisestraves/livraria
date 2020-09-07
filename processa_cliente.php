<?php

require 'header.php';
require 'adm/conexao.php';
require 'adm/func_sistema.php';

session_start();


/*TESTE DO RECEBIMENTO DE DADOS PARA VALIDAÇÃO E TESTE DO LOGIN DO USUÁRIO*/
  
if(isset($_POST['login']) && (isset($_POST['senha']))){

        $loginUsuario = $_POST['login'];
        $senhaUsuario= $_POST['senha'];

        //Acessando a função que verificar se o email do cliente "Login" já esta  cadastrado no sistema
        $clienteCadastrado = loginCliente($conexao,$loginUsuario,$senhaUsuario);

      

      

      

}


        
    


    //var_dump($clienteCadastrado);
  


?>
<?php

?>