<?php
 
session_start();
require 'adm/conexao.php';
require 'cabecaarea-admin.php';

require 'adm/func_sistema.php';




/*AQUI O SISTEMA RECEBE OS DADOS PARA VALIDAR OS DADOS DE LOGIN DO USUÁRIO DO SISTEMA PERFIL ADMINISTRATIVO*/
  
if(isset($_POST['login']) && (isset($_POST['senha']))){

        $loginUsuario = mysqli_escape_string($conexao,$_POST['login']);
        $senhaUsuario= mysqli_escape_string($conexao,$_POST['senha']);


        
        $loginSql = "SELECT * FROM usuario WHERE Email =('$loginUsuario') AND = ('$senhaUsuario')";
        $queryLogin = mysqli_query($conexao,$loginSql);

        //Criado o Array
        $dadosusuario = array();

            //Aqui estou percorrendo o array com as informações do usuário    
            while ($usuario = mysqli_fetch_assoc($queryLogin)) {
                $dadosusuario[] = $usuario;
            }


            //print_r($dadosusuario);

        
        $clienteCadastrado = mysqli_fetch_row($queryLogin);
            
        }
        //Teste de Validação do Cadastro do cliente
        if($clienteCadastrado = $dadosusuario){
                
            //Aqui é criada a sessão com os dados do usuário
               
            $_SESSION['Email'] = $clienteCadastrado[0]['Email'];
            
            $_SESSION['Cod_usuario']= $clienteCadastrado[0]['Cod_usuario'];
            $_SESSION['Nome']= $clienteCadastrado[0]['Nome'];

            
                
            
               // var_dump($_SESSION['Cod_cliente']);

           // print_r($clienteCadastrado);
          
               header('location:painel-adm.php');
        }else{
               

            header('location:acesso-negado.php');
           
        }
    

    



?>
<?php

?>