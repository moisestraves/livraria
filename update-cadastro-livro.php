<?php

session_start();
 require 'cabecaarea-admin.php';   
 require 'adm/conexao.php';
 require 'adm/func_sistema.php';


    // AQUI FOI RECEBIDO OS DADOS PARA UPDATE
    $id_livro = $_POST['id'] ;
    $nome = $_POST['nomelivro'];
    $autor =$_POST´['nomeautor'];
    $preco =$_POST['preco'];
    $categoria =$_POST['categoria'];
    $anopubli = $_POST['ano'];

  // var_dump($id_livro);

    
    $selecionardados = "UPDATE  livro_teste  SET Nome_livro ='$nome', Autor='$autor' where Cod_livro ='$id_livro'"; // select *from config
    $resultado = mysqli_query($conexao, $selecionardados);


   //print_r($resultadousuario);

    if($resultado == 1){
            
        header('location:consulta-cadastro-livros.php');
    }else{

        echo 'Não Atualizado';
    }



/* TESTE DO RETORNO DA QUERY
var_dump($resultado);*/


   // var_dump($id_cliente);

    

?>

