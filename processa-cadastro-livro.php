<?php

require 'adm/conexao.php';
require 'adm/func_sistema.php';



if(isset($_POST['cadastrar'])){

    
    
$nome_editora = $_POST['select_editora'];
$nome_livro = $_POST['nomelivro'];
$autor = $_POST['nomeautor'];
$preco= $_POST['preco'];
$categoria = $_POST['categoria'];
$registro_livro = $_POST['isbn'];
$ano_lancamento = $_POST['ano'];

/*echo "Editora $nome_editora <br>";

echo "Livro $nome_livro <br>";
echo "Autor $autor <br>";
echo "Preço $preco <br>";
echo "Categoria $categoria <br>";
echo "ISBN: $registro_livro <br>";
echo "Ano de Lançamento $ano_lancamento";*/

$cad_livro =cadastrarLivro($conexao,$nome_editora,$nome_livro,$autor,$preco,$categoria,$registro_livro,$ano_lancamento);


if($cad_livro == 1){

    header('location:painel-adm.php');
}else{

    echo "Erro";


    
    header('location:painel-adm.php');
}

}



?>
