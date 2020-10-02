<?php
  session_start();

  require 'adm/conexao.php';
require 'adm/func_sistema.php';
//Aqui o sistema recebe os dados para atualizar o cadastro do cliente
if(isset($_POST['atualizar'])){

//AQUI A ID FOI RECEBIDA VIA POST,O SISTEMA PRECISA DELA PARA FAZER O UPDADE CORREDO DO USUÁRIO
//var_dump($id_cliente = $_POST['id']) ;
   // echo "Botão Update Acionado ";
   $id_cliente = $_POST['id'];
    $Nome = $_POST['nome']; 
    $email =$_POST['email'];
    $senhaNova =$_POST['senha']; 
    $telefone =$_POST['telefone'];
    $endereco =$_POST['endereco'];
    $bairro =$_POST['bairro'];
    $numero =$_POST['numero'];
    $complemento =$_POST['complemento'];
    $cep =$_POST['cep'];
    $estado =$_POST['estado'];
    $cidade =$_POST['cidade'];
    $pessoa =$_POST['pessoa'];

    // QUERY UPDATE EXECUTANDO

      $updateCliente = "UPDATE cliente SET Nome='$Nome' , Email='$email' , Senha='$senha' , Tel='$telefone' , Endereco='$endereco' , Bairro='$bairro' , Numero='$numero' , Complemento='$complemento' , Cep='$cep' , Estado='$estado' , Cidade='$cidade' , Tipo_Pessoa='$pessoa' where Cod_cliente ='$id_cliente'";
      $sqlquery = mysqli_query($conexao,$updateCliente);
      
      //$resultado = mysqli_fetch_assoc($updateCliente);
      
      $resultado = $sqlquery;
      
      //var_dump($resultado);
      
      if($resultado ==1){
      
          echo 'Cadastro atualizado com sucesso  !';

        header('location:consulta_cliente.php');
          
          
       
      }else {
      
          echo 'Não Foi Possivel finalizar a operação ';
      }
      

  
}



?>