<?php
require 'cabecaarea-admin.php';
require 'adm/conexao.php';
require 'adm/func_sistema.php';




if (isset($_POST['cadastrar'])) {

    $nome_editora = $_POST['editora'];
    $nome_livro = $_POST['nomelivro'];
    $autor = $_POST['nomeautor'];
    $preco = $_POST['preco'];
    $categoria = $_POST['categoria'];
    $registro_livro = $_POST['isbn'];
    $ano_lancamento = $_POST['ano'];
    $detalhes_resumo = $_POST['detalhes'];




$cad_livro = cadastrarLivro($conexao, $nome_editora, $nome_livro, $autor, $preco, $categoria, $registro_livro, $ano_lancamento, $detalhes_resumo);


$registro = $cad_livro;



//print_r($registro);



//print_r($_POST);
//print_r($_FILES);

}


?>
<!-- AQUI FOI INSERIDO O UPLOAD DA FOTO PARA SALVAR O NOME PRECISA CORRIGIR PARA FUNCIONAR NÃO ESTA PEGANDO O ID-->

<h5 class="text-left">Inserir capa do livro</h5>

<!-- Inicio do formulário  para inserir a capa do livro-->
<form action="#" method="POST" id="inserir-capa" name="form-inserir-capa" enctype="multipart/form-data">

<!-- Select para inserir os dados do livro-->

<label for ="imagem">Selecionar uma capa para este livro:</label></p>
    <p><input required type="file" id="arquivo" name="arquivo" accept="image/png, image/jpeg, image/gif">
</p>

<input class="btn-block bg-dark text-white" type="submit" value="Inserir">
<hr>




</form>



 