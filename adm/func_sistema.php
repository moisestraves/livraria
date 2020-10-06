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
    
    }

   //Function what call 
    function cliente(){

        echo "Bem vindo";
    }

   //Function what call for insert user
    
    function cadastrousuario($conexao ,$nome ,  $cargo ,$perfil ,$departamento , $email , $senha ,$ativo){
     $md = md5($senha);
        $sql = 'INSERT INTO usuario ( Nome,  Cargo, Perfil, Departamento, Email, Senha, Ativo)';
        $sql .= " VALUES ('$nome','$cargo','$perfil','$departamento','$email ','$md','$ativo')";

        //var_dump($sql);
    
        return mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
    }

    //Function what call for insert user publisher and contact
    function cadastrarEditora($conexao ,$nome ,$contato ,$email, $telefone){
     
     
         $sql = 'INSERT INTO editora ( Editora ,Contato, Email, Tel)';
         $sql .= " VALUES ('$nome','$contato','$email','$telefone')";
 
         //var_dump($sql);

         
         echo 'Editora Cadastrada com Sucesso !';
         return mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
     }
 

     
    //Function what call for insert books

    
    function cadastrarLivro($conexao,$Codigo_editora,$nome_livro,$autor,$preco,$categoria,$registro_livro,$ano_lancamento){
        $sql ='INSERT INTO livro_teste ( Cod_editora, Nome_livro, Autor, Preco, Categoria, ISBN, Ano)';
        $sql .= " VALUES ( '$Codigo_editora', '$nome_livro', '$autor', '$preco', '$categoria', '$registro_livro', '$ano_lancamento')";
        
       

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
    //Function call list books
    function relatoriLivros($conexao)
    {
        $buscarlivros = 'SELECT *  FROM livro_teste ORDER BY Cod_livro';
        
        $resultado = mysqli_query($conexao, $buscarlivros);
       
        $livros = array();
       
        while ($livro = mysqli_fetch_assoc($resultado)) {
            
            $livros[] = $livro;
        }
    
        return $livros;
    }

    
    


    ?>


