<?php

session_start();
 require 'cabecadapagina.php';   
 require 'adm/conexao.php';
 require 'adm/func_sistema.php';


 /* Aqui faz a verificação da sessão
se o cliente não estiver logado vai rediricionar para o login
if (!$_SESSION['Email']) {

    header('location:login-adm.php');

   
}*/
// Teste de Validação da sessão OK var_dump($_SESSION);
//var_dump($_SESSION);
    
/*ATENÇÃO LEMBRETE PARA  RECEBER A ID  PELA URL
**********TEM QUE ESTAR COM O CAMPO HIDDEN,NO FORMULÁRIO DE CONSULTA DO CLIENTE ******************** 
<input type="hidden"  name="id" value="<?php echo $resultado['Cod_cliente'];?>">*/
    
  $id_livro = $_GET['id'] ;
  //var_dump($id_livro);

?>   
   
<div class="container">
<h4 class="text-info mx-auto" style="width: 300px;">Intem escolhido </h4>
<div class="table-responsive">
    <table class="table bordered table-hover table-sm table-dark">
    <thead class="thead-light ">
    <tr>
   
        <th scope="col">Livro</th>
        <th scope="col">Autor</th>
        <th scope="col">Preço</th>
        <th scope="col">Categoria</th>
        <th scope="col">Ano de Publicação</th>
            
       
       
    </tr>
    </thead>

    <?php  $relatorioLivros =consultaComprar($conexao,$id_livro);
    
    foreach ($relatorioLivros as $livro){

    
    ?>

    <tr>
    
    <td><?=$livro['Nome_livro']; ?></td>
    <td><?=$livro['Autor']; ?> </td>
    <td><?=$livro ['Preco']; ?></td>
    <td><?=$livro['Categoria']; ?></td>
    <td><?=$livro['Ano']; ?></td>
    
     
    </tr>
    <?php
    } ?>
    </table>
</div>
</div>

<?php
require 'rodape.php';
?>