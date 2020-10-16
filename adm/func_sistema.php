<?php


require 'adm/conexao.php';

//Funçtion  new customer registration
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

   //Function display chanel cliente 
    function cliente(){

        echo "Bem vindo";
    }

   //Function insert new user sistem
    function cadastrousuario($conexao ,$nome ,  $cargo ,$perfil ,$departamento , $email , $senha ,$ativo){
     $md = md5($senha);
        $sql = 'INSERT INTO usuario ( Nome,  Cargo, Perfil, Departamento, Email, Senha, Ativo)';
        $sql .= " VALUES ('$nome','$cargo','$perfil','$departamento','$email ','$md','$ativo')";

        //var_dump($sql);
    
        return mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
    }

    //Function what call for insert user publisher and contact
    function cadastrarEditora($conexao ,$nome ,$contato ,$email, $telefone){
         $sql = 'INSERT INTO editora ( Nome_editora ,Contato, Email, Tel)';
         $sql .= " VALUES ('$nome','$contato','$email','$telefone')";
        //var_dump($sql);
        echo 'Editora Cadastrada com Sucesso !';
         return mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
     }
             
    //Function what call for insert books
    function cadastrarLivro($conexao,$nome_editora,$codigo_estoque,$nome_livro,$autor,$preco,$categoria,$registro_livro,$ano_lancamento){
        $sql ='INSERT INTO livro ( EDITORA_Cod_editora,ESTOQUE_Cod_livro, Nome_livro, Autor, Preco, Categoria, ISBN, Ano)';
        $sql .= " VALUES ( '$nome_editora','$codigo_estoque', '$nome_livro', '$autor', '$preco', '$categoria', '$registro_livro', '$ano_lancamento')";
      
        return mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
     }
    
     //Function Search Address Client
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
   

    //Function call list books para vendas
    function consultaLivrosPortal($conexao)
    {
        $buscarlivros = 'SELECT *  FROM livro ORDER BY Cod_livro';
        
        $resultado = mysqli_query($conexao, $buscarlivros);
       
        $livros = array();
       
        while ($livro = mysqli_fetch_assoc($resultado)) {
            
            $livros[] = $livro;
        }
    
        return $livros;
    }

    //Function call list user
    function ConsultaUsuarios($conexao)
    {
        $buscarUsuarios = 'SELECT *  FROM cliente ORDER BY Nome';
        
        $resultado = mysqli_query($conexao, $buscarUsuarios);
       
        $usuarios = array();
       
        while ($user = mysqli_fetch_assoc($resultado)) {
            
            $usuarios[] = $user;
        }
    
        return $usuarios;
    }

    //Function call list books
    function consultaAdministradores($conexao)
    {
        $buscarUsuarios = 'SELECT *  FROM usuario ORDER BY Nome';
        
        $resultado = mysqli_query($conexao, $buscarUsuarios);
       
        $usuarios = array();
       
        while ($user = mysqli_fetch_assoc($resultado)) {
            
            $usuarios[] = $user;
        }
    
        return $usuarios;
    }

    
     function excluirLivro ($conexao,$codigo){
     

    $queryDelte = "DELETE FROM livro  WHERE  Cod_livro = '$codigo' LIMIT = 1";

    $resultado = mysqli_query($conexao,$queryDelte);
        var_dump($resultado);
   

     
        

 }
    


    ?>


