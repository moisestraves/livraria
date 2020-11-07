<?php
require 'cabecadapagina.php';
require 'adm/conexao.php';

require 'adm/func_sistema.php';
?>





<!-- Esta Div faz a formação do Layout-->
<?php


//Aqui é selecionado todos os livros na base para Publicar na loja
$querLivros = 'SELECT * FROM livro ORDER BY Nome ';
$resultado = mysqli_query($conexao, $querLivros);


$livros = array();

while ($livro = mysqli_fetch_assoc($resultado)) {

  $livros[] = $livro;
}


?>

<!--Corpo da Estrutura dos pagina inicial dos livros-->

<h4 class="text-center">Categoria</h4>

<?php foreach ($livros as $livrobase) {
?>
  <div class="container ">
    






    <p>
      <h5><?php echo 'Livros por Categorias ', $livrobase['Categoria']; ?></a>
    </p>

    <?php $id_livro = $livrobase['Cod_livro'];
    //var_dump ($id_livro);

    $capa = listarCapa($conexao, $id_livro);



    /* AQUI ESTE PRINT ESTA TESTANDO OS DADOS DO ARRAY 
print_r($capa);*/
    ?>

    <!-- AQUI O FOREACH DA LEITURA DAS CAPAS DOS LIVROS-->
    <?php foreach ($capa as $totalcapas) ?>

    <img src="capas/<?= $totalcapas['nome_imagem'] ?>" alt="Capa do Livro" class="foto">

    <!--LFORMATAÇÃO EM MOEDA  number_format( $livrobase['Preco'],2,',','.');?>-->

    <h6><?php echo 'Titulo ', $livrobase['Nome']; ?></h6>
    </p>
    <p>
      <h5><?php echo 'R$ ', number_format($livrobase['Preco'], 2, ',', '.'); ?></h5>
    </p>

    <!-- Botão  que vai direciona para página de checkout -->
    <p><a href="checkout.php?id=<?= $livrobase['Cod_livro']; ?>" class="btn  text-justify-center  btn-primary btn-sm  active   " role="button" aria-pressed="true">Comprar</a></p>

    
    </div>
  <?php } ?>

  



  <?php
  require 'rodape.php'
  ?>