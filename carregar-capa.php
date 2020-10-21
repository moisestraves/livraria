<?php 
session_start();
require 'adm/conexao.php';
require 'adm/func_sistema.php';
require 'cabecaarea-admin.php';

/* Aqui faz a verificação da sessão
se o cliente não estiver logado vai redirecionar para o login*/
if (!$_SESSION['Email']) {

    header('location:login-adm.php');
}




?>

<section class="container">

<hr>

<h5 class="text-left">Inserir capa do livro</h5>

<!-- Inicio do formulário  para inserir a capa do livro-->
<form action="processa-upload-imagem.php" method="POST" id="inserir-capa" name="form-inserir-capa" enctype="multipart/form-data">

<!-- Select para inserir os dados do livro-->

<p><select class="form-control form-control-sm" name="select_capa">

<option class="text-danger">Selecione</option> 
    <?php


      // AQUI O SELECT SELECIONA O CODIGO DO LIVRO MAIS O NOME
       $sql = "SELECT Cod_livro ,Nome_livro FROM livro";
       $querySql = mysqli_query($conexao,$sql);
   
       //print_r($queryestoque);
     
        //Aqui 
       while($estoque = mysqli_fetch_assoc($querySql)){?>

        <option value="<?php echo $estoque['Cod_livro'];?>"> <?php echo $estoque['Nome_livro'];?> 
        </option></p><?php
    
       }
       ?>
  
<p> 
    <label for ="imagem">Selecionar uma capa para este livro:</label></p>
    <p><input required type="file" id="arquivo" name="arquivo" accept="image/png, image/jpeg, image/gif">
</p>

<input class="btn-block bg-dark text-white" type="submit" value="Inserir">
<hr>




</form>
</section>






<?php
require "rodape.php";
?>