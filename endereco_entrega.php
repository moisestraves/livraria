<?php

session_start();
/* Aqui faz a verificação da sessão
se o cliente não estiver logado vai rediricionar para o login*/
if (!$_SESSION['Email']) {

    header('location:cliente_login.php');
}
require 'top_cliente.php';
require 'adm/conexao.php';
require 'adm/func_sistema.php';


//Chamada da função que Consulta o Endereço de Entrega 
    $codigoCliente =1;
   
    $entrega = enderecoEntrega($conexao,$codigoCliente);

  //print_r($entrega);

//Array adicionado depois , para  grava os dados depois do Foreach
     $ruaEntrega = array();
        foreach ($entrega as $end){

        $ruaEntrega []=$end;
    }
    
        
   // echo"Número :";
    
   //echo($ruaEntrega[0]['email']);

   // $_SESSION['email']=$ruaEntrega[0]['email'];
   // var_dump($_SESSION);
   
   //Aqui estou capiturando o login da sessão criada
   //$cliente_Id=[$_SESSION];

  
?>


<div class="imprimirTabela">
<p>Endereço de Entrega </p>
<table>
    <tr>
    <th>Endereço</th>
    <th>Número</th>
    <th>Complemento</th>
    <th>Bairro</th>
    <th>CEP</th>
    </tr>

      <tr>
          <!-- Aqui esta listando o  endereço de Entrega do cliente-->
        <td><?=$ruaEntrega[0]['endereco'];?></td>
        <td><?=$ruaEntrega[0]['numero'];?></td>
        <td><?=$ruaEntrega[0]['complemento'];?></td>
        <td><?=$ruaEntrega[0]['bairro'];?></td>
        <td><?=$ruaEntrega[0]['cep'];?></td>
     <!--CONTINUAR AQUI PARA FINALIZAR  PAGINA DE CONSULTA E ALTERAR OS DADOS-->
    </tr>
    
    
</table>


</div>