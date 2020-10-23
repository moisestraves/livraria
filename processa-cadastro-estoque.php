<?php
require 'cabecaarea-admin.php';
require 'adm/conexao.php';
require 'adm/func_sistema.php';

if(isset($_POST['cadastrar'])){


$nome_livro = $_POST['nome_livro'];
$qtd_livro = $_POST['qtd_livro'];

//var_dump($nome_livro);
//var_dump($qtd_livro);
//var_dump($conexao);

// AQUI O SISTEMA FAZ A CHAMADA DA FUNCTION INSERT Livro no Estoque

$resultado = cadastrarEstoque($conexao,$nome_livro,$qtd_livro);

//var_dump($restuladoInsertUsuario);


  
if($resultado == 1){

 echo " <p class='alert alert-success text-center' role='alert'>Cadastro efetuado com Sucesso <a href='painel-adm.php'>Clique aqui </a>!</p>";
}else {

    echo "<p class='alert alert-danger text-center' role='alert'> <br>ENTRE EM CONTATO COM O ADMINISTRADOR DO SISTEMA !";
  echo '<br> <a href="painel-adm.php>Clique aqui </a>';
    

    
}

}

require 'rodape.php';