<?php


require 'adm/conexao.php';
//Função Consulta Login para cadastrar

function ValidarUsuarioCadastro($conexao,$login){

    $sql_login ="SELECT Email FROM cliente Where Email='$login' ";
    $resul_login = mysqli_query($conexao,$sql_login);

    $resultado = mysqli_num_rows($resul_login);
   
    return $resultado;
}


function ValidarUsuarioCadastroAdm($conexao,$login){

    $sql_login ="SELECT Email FROM usuario Where Email='$login' ";
    $resul_login = mysqli_query($conexao,$sql_login);

    $resultado = mysqli_num_rows($resul_login);
   
    return $resultado;
}



//Funçtion  new customer registration
function cadastroCliente($conexao, $login, $senha)
{
    $md = md5($senha);
    $sqlCadCliente = 'INSERT INTO cliente (Cod_cliente, Nome, Email, Senha, Tel, Endereco, Bairro, Numero, Complemento, Cep, Estado, Cidade, Tipo_Pessoa)';
    $sqlCadCliente .= "VALUES ('NULL', '', '$login', '$md', '', '', '', '0', '', '', '', '', '')";

    
    return mysqli_query($conexao, $sqlCadCliente) or die(mysqli_error($conexao));
}

//Function insert new user sistem
function cadastrousuario($conexao, $nome,  $cargo, $perfil, $departamento, $email, $senha, $ativo)
{
    $md = md5($senha);
    $sql = 'INSERT INTO usuario ( Nome,  Cargo, Perfil, Departamento, Email, Senha, Ativo)';
    $sql .= " VALUES ('$nome','$cargo','$perfil','$departamento','$email ','$md','$ativo')";

    //var_dump($sql);

    return mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
}

//Function what call for insert user publisher and contact
function cadastrarEditora($conexao, $nome, $contato, $email, $telefone)
{
    $sql = 'INSERT INTO editora ( Nome_editora ,Contato, Email, Tel)';
    $sql .= " VALUES ('$nome','$contato','$email','$telefone')";
    //var_dump($sql);
    echo 'Editora Cadastrada com Sucesso !';
    return mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
}

// Function call Estoque
function cadastrarEstoque($conexao, $nome_livro, $qtd_livro)
{
    $sql = 'INSERT INTO estoque ( Nome_livro_estoque ,Qtd_estoque)';
    $sql .= " VALUES ('$nome_livro','$qtd_livro')";
    //var_dump($sql);

    return mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
}


//Function what call for insert books
function cadastrarLivro($conexao, $nome_editora, $nome_livro, $autor, $preco, $categoria, $registro_livro, $ano_lancamento,$detalhes_resumo,$upload){

    $sql = 'INSERT INTO livro (Editora, Nome, Autor, Preco, Categoria, ISBN, Ano ,Resumo,Imagem)';
    $sql .= " VALUES ( '$nome_editora', '$nome_livro', '$autor', '$preco', '$categoria', '$registro_livro', '$ano_lancamento','$detalhes_resumo','$upload')";

    return mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
}




//Function Search Address Client
function enderecoEntrega($conexao, $id){


    $enderecoSql = "SELECT cod_cliente ,email,endereco,numero,complemento,cep,bairro FROM cliente WHERE Cod_cliente =('$id')";
    $queryEnd = mysqli_query($conexao, $enderecoSql);

    $resultadoEndereco = array();

    while ($endereco = mysqli_fetch_assoc($queryEnd)) {

        $resultadoEndereco[] = $endereco;
    }

    return ($resultadoEndereco);
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


/*function tratar_anexo($anexo) {
    var_dump($anexo);
    $padrao = '/^.+(\.jpg|\.zip)$/';
    $resultado = preg_match($padrao, $anexo['nome']);
    if (! $resultado) {
    return false;
    }*/


//Função do  lista a capa do livro
function listarCapa($conexao, $id_capa)
{

    $sql = "SELECT nome_imagem  FROM capa_livro Where livro_cod_livro =('$id_capa')";

    $resultado = mysqli_query($conexao, $sql);

    $capaLivros = array();

    while ($livroCapa = mysqli_fetch_assoc($resultado)) {

        $capaLivros[] = $livroCapa;
    }

    return ($capaLivros);
}


//Função que consulta o pedido
function conPedido($conexao, $pedido)
{

    $sqlPedido = "SELECT * FROM pedido where =('$pedido')";
    $resutadoPedido = mysqli_query($conexao, $sqlPedido);

    return $resutadoPedido;
}


function verificaAcesso($teste)
{

    if (isset($_SESSION[$teste])) {
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
function consultaComprar($conexao, $CodigoProduto)
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

//Função que remover usuário Administrador
function deletarUsuarioAdm($conexao,$usuario){

    $sql = "DELETE FROM usuario where Cod_usuario ='$usuario'";

    $sql_query = mysqli_query($conexao,$sql);

    return $sql_query;

}

function excluirLivro($conexao,$id_livro,$removerCapa)
{

  
    $queryCapa = "DELETE FROM Capa_livro Where Livro_Cod_livro ='$removerCapa' LIMIT = 1";

    $sql_capa = mysqli_query($conexao,$queryCapa);
    
    var_dump($sql_capa);

    $queryDelete = "DELETE FROM livro  WHERE  Cod_livro = '$id_livro' LIMIT = 1";
    


$resultado = mysqli_query($conexao,$queryDelete);


    var_dump($resultado);
}


function busca($conexao, $termo)
{

    $buscalocalizada  = []; // Aqui foi Criado um Array para armazenar o resultado da busca

    $sql = "SELECT * FROM livro where Nome Like '%$termo%' OR Preco Like '%$termo%' OR Autor Like '%$termo%' OR Categoria Like '%$termo%'";

    $sqlQuery = mysqli_query($conexao, $sql);

    //var_dump($sqlQuery);

    while ($buscar = mysqli_fetch_assoc($sqlQuery)) {

        array_push($buscalocalizada, $buscar); //Array_push Retira todos os dados de um array

    }

    return $buscalocalizada;
}
