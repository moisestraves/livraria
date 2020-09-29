<?php


require 'adm/conexao.php';

//Função Cadastro do  novo cliente
function cadastroCliente($conexao,$login,$senha){
  $md = md5($senha);
    $sqlCadCliente =' INSERT INTO cliente (Cod_cliente, Nome, Email, Senha, Tel, Endereco, Bairro, Numero, Complemento, Cep, Estado, Cidade, Tipo_Pessoa)';
    $sqlCadCliente.= "VALUES ('NULL', '', '$login', '$md', '', '', '', '0', '', '', '', '', '')";
   
     if(mysqli_query($conexao,$sqlCadCliente) ){

        echo "Cadastro realizado com sucesso!";

     }else {

        echo " Erro:".$sqlCadCliente. "<br>" .mysqli_error($conexao);
     }

     
    function cliente(){

        echo "Bem vindo";
    }
    function cadastrousuario($conexao, $nome,  $cargo, $perfil, $departamento, $email, $senha ,$ativo)
    {   $md = md5($senha);
        $sql = 'INSERT INTO usuario(Nome, Cargo,Perfil,Departamento,Email,Senha,Ativo)';
        $sql .= " VALUES ('$nome','$cargo','$perfil,'$departamento','$email' ,'$md','$ativo')";

        var_dump($sql);
    
        return mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
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



    
    
}

    ?>


