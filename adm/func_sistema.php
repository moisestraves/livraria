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
             
     // Function call Estoque
     function cadastrarEstoque($conexao ,$nome_livro,$qtd_livro){
        $sql = 'INSERT INTO estoque ( Nome_livro_estoque ,Qtd_estoque)';
        $sql .= " VALUES ('$nome_livro','$qtd_livro')";
       //var_dump($sql);
       
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

    // Function  que faz o relatório do estoque
    function consultaEstoque($conexao)
    {
        $buscarEstoque = "SELECT *  FROM estoque";
        
        $resultado = mysqli_query($conexao, $buscarEstoque);
       
        $livros = array();
       
        while ($livro = mysqli_fetch_assoc($resultado)) {
            
            $livros[] = $livro;
        }
    
        return $livros;
    }




    //FUNÇÃO DE TRATAMENTO DO ARQUIVO DO ANEXO

    function validarFormatoArquivo($arquivo){

        $padraoArquivo =  '/^.+(\.jpg|\.png)$/'; //Aqui é verificado o tipo de arquivo válido
        $resultado = preg_match($padraoArquivo,$arquivo['nome']);

       // var_dump($arquivo);
        if(! $resultado){
            
          
            return false;

        }
        move_uploaded_file($arquivo['tmp_name'],"capas/{$arquivo['nome']}");
      
            echo "teste";
        return true;
            
    } 

    //Função do  lista a capa do livro
    function listarCapa($conexao,$id_capa){
        
        $sql = "SELECT nome_imagem  FROM capa_livro Where livro_cod_livro =('$id_capa')";

        $resultado = mysqli_query($conexao,$sql);
        
        $capaLivros = array();
       
        while ($livroCapa = mysqli_fetch_assoc($resultado)) {
            
            $capaLivros[] = $livroCapa;
        }
    
        return($capaLivros);
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

    //Function select produto para comprar Livro
    function consultaComprar($conexao,$CodigoProduto)
    {
        $buscarlivros = "SELECT *  FROM livro  where Cod_livro =('$CodigoProduto')";
        
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
    function busca($conexao,$termo){

        $buscalocalizada  = []; 
       
        $sql = "SELECT * FROM livro where Nome_livro LIKE '%$termo%' OR Categoria LIKE '%$termo%' OR Ano LIKE '%$termo%'";
    
        $sqlQuery =mysqli_query($conexao,$sql);

       while($buscar=mysqli_fetch_assoc($sqlQuery)){

        array_push($buscalocalizada ,$buscar);

       }

       return $buscalocalizada ;

    }
    

    

    ?>


