<?php


require 'adm/conexao.php';

function cadastroCliente($conexao,$login,$senha){
    $senhaCad = md5($senha);
    $sqlCadCliente ="INSERT INTO cliente Cod_cliente,Nome,Email,Senha,Tel,Endereco,Bairro,Numero,Complemento,Cep,Estado,Cidade,Tipo_Pessoa).
     VALUES '','','$login', '$senhaCad','','', '', '','', '', '', '', ''";

        
     return mysqli_query($conexao,$sqlCadCliente);


}

    function enderecoEntrega($conexao,$id){

        $enderecoSql = "SELECT cod_cliente ,email,endereco,numero,complemento,cep,bairro FROM cliente WHERE Cod_cliente =('$id')" ;
        $queryEnd = mysqli_query($conexao,$enderecoSql);
       
        $resultadoEndereco = array ();

        while($endereco =mysqli_fetch_assoc($queryEnd)){

                $resultadoEndereco [] =$endereco;

        }

          return($resultadoEndereco);

    }

    //Função que consulta o pedido
    function conPedido($conexao,$pedido){

        $sqlPedido = "SELECT * FROM pedido where =('$pedido')";
        $resutadoPedido = mysqli_query($conexao,$sqlPedido);

        return $resutadoPedido;
        
       }


    function verificaAcesso($teste){

        if(isset($_SESSION[$teste])){
            session_destroy();
            header('location:cliente.logar.php?acessonegado');
        }
    }
    

    ?>


