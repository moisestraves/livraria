<?php

session_start();
 require 'header-usuario-adm.php';   
 require 'adm/conexao.php';
 require 'adm/func_sistema.php';

 // Teste de Validação da sessão OK var_dump($_SESSION);
    //var_dump($_SESSION);
    
    /*ATENÇÃO LEMBRETE PARA  RECEBER A ID  PELA URL
    **********TEM QUE ESTAR COM O CAMPO HIDDEN,NO FORMULÁRIO DE CONSULTA DO CLIENTE ******************** 
    <input type="hidden"  name="id" value="<?php echo $resultado['Cod_cliente'];?>">*/
    
    $id_livro = $_GET['id'] ;
    var_dump($id_livro);

    
    $selecionardados = "SELECT * FROM livro where Cod_livro ='$id_livro'"; // select *from config
    $resultadousuario = mysqli_query($conexao, $selecionardados);

// Leitura do parâmetro selecionado no banco de dados para edição
$resultado = mysqli_fetch_assoc($resultadousuario);

/* TESTE DO RETORNO DA QUERY
var_dump($resultado);*/


   // var_dump($id_cliente);

    

?>


<div class="container">
    <article>


<div class="formularioCadastro">
    
<div class="row">

<form method="POST" action="processa-cadastro-livro.php">

</div>
<!-- CAMPO TYPE HIDDEN -->
<input type="hidden"  name="id" value="<?php echo $resultado['Cod_livro'];?>">
<p>
    <!-- Aqui foi inserido um select , para buscas os nomes das editoras no banco-->  
 <p>
<select class="form-control form-control-sm" name="select_editora">
    <option>Editora</option>
    <?php
       $sqleditora = "SELECT Cod_editora , Editora  FROM editora";
       $queryeditora = mysqli_query($conexao,$sqleditora);
   
      // $editora = array();
   
       while($editoras = mysqli_fetch_assoc($queryeditora)){?>

        <option value="<?php echo $editoras['Cod_editora'];?>"> <?php echo $editoras['Editora'];?> 
        </option><?php

       }
       ?>
   
</select>

<p><abel>Nome do Livro</label>
<input type="text"  class="form-control form-control-sm" name="nomelivro"  value="<?php echo $resultado['Nome_livro'];?>"></p>
    

<p><label>Autor</label>
<input type="text"  class="form-control form-control-sm"  name="nomeautor"  value="<?php echo $resultado['Autor'];?>">
</p>


<p><label>Preço Unitário</label>
<input type="text"  class="form-control form-control-sm"  name="preco" value="<?php echo $resultado['Preco'];?>">
</p>


<p><label>Cadegoria</label>
<input type="text"  class="form-control form-control-sm"  name="categoria" value="<?php echo $resultado['Categoria'];?>">
</p>
   
    
<p><label>ISBN</label>
<input type="text"  class="form-control form-control-sm"  name="isbn" value="<?php echo $resultado['ISBN'];?>">
</p>
    
    

<p><label>Ano</label>
<input type="text"  class="form-control form-control-sm"  name="ano" value="<?php echo $resultado['Ano'];?>" >
</p>
 
<a href="editar-perfil-usuario.php?id=<?=$resultado['Cod_livro']; ?>">Editar</a>
<a href="painel-adm.php">Voltar</a>

</form>
</div>
</div>
</div>
</div>


<?php

require 'rodape.php';