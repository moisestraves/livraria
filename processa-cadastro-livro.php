<?php
require 'cabecaarea-admin.php';
require 'adm/conexao.php';
require 'adm/func_sistema.php';

///AQUI ESTOU RECEBENDO A CAPA DO LIVRO

if (isset($_POST['cadastrar']) && (isset($_FILES['arquivo']))) {
    // print_r($_FILES);
    $nome_editora = $_POST['editora'];
    $nome_livro = $_POST['nomelivro'];
    $autor = $_POST['nomeautor'];
    $preco = $_POST['preco'];
    $categoria = $_POST['categoria'];
    $registro_livro = $_POST['isbn'];
    $ano_lancamento = $_POST['ano'];
    $detalhes_resumo = $_POST['detalhes'];
    $arquivo['nome'] = $_FILES['arquivo']['name']; //Aqui estou pegando o nome do arquivo Carregado


    //Aqui usei um array para pegar o indice do arquivo VERIFICAR DESTINO PASTA
    $upload =  array();

    foreach ($arquivo as $foto) {

        $upload = $foto;
    }

    print_r($upload);

    echo "Livro $nome_livro <br>";
    echo "Autor $autor <br>";
    echo "Preço $preco <br>";
    echo "Categoria $categoria <br>";
    echo "ISBN: $registro_livro <br>";
    echo "Ano de Lançamento $ano_lancamento <br>";
    echo "Foto' $upload";

    //print_r($_POST);
    //print_r($_FILES);



    $cad_livro = cadastrarLivro($conexao, $nome_editora, $nome_livro, $autor, $preco, $categoria, $registro_livro, $ano_lancamento, $detalhes_resumo, $upload);


    if ($cad_livro == 1) {


        echo "<div class='alert alert-success' role='alert'>
    <h5 class='text-center'>Livro Cadastrado com Sucesso !</h5>";
        header('location: consulta-cadastro-livros.php');
        die();
    } else {

        echo "Erro";



        header('location:painel-adm.php');
    }
}
