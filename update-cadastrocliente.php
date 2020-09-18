<?php
  session_start();

  require 'adm/conexao.php';
require 'adm/func_sistema.php';

if(isset($_POST['atualizar'])){

   // echo "Botão Update Acionado ";

    $Nome = $_POST['nome']; 
    
      $senhaNova =$_POST['senha']; 
   
      $email =$_POST['email'];

      $endereco =$_POST['endereco'];

      $numero =$_POST['numero'];

      $bairro =$_POST['bairro'];
      
      $complmento =$_POST['complemento'];
      
      $cep =$_POST['complemento'];

      $estado =$_POST['estado'];
      $cidade =$_POST['cidade'];
      $pessoa =$_POST['Tipo_Pessoa'];






 

  
}



?>