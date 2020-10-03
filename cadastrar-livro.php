<?php

session_start();
/* Aqui faz a verificação da sessão
se o cliente não estiver logado vai redirecionar para o login*/
if (!$_SESSION['Email']) {

    header('location:acesso-negado.php');
}

require 'cabecaarea-admin.php';
require 'adm/func_sistema.php';
require 'adm/conexao.php';

 


?>


<div class="container">
    <article>


<div class="formularioCadastro">
    
<div class="row">

<form method="POST" action="processa-cadastro-livro.php">

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
<input type="text"  class="form-control form-control-sm" name="nomelivro" placeholder="Livro" required></p>
    

<p><label>Autor</label>
<input type="text"  class="form-control form-control-sm"  name="nomeautor" placeholder="Exemplo Jose da Silva" required >
</p>


<p><label>Preço Unitário</label>
<input type="text"  class="form-control form-control-sm"  name="preco" placeholder="22.00" required >
</p>


<p><label>Cadegoria</label>
<input type="text"  class="form-control form-control-sm"  name="categoria" placeholder="Administração" required >
</p>
   
    
<p><label>ISBN</label>
<input type="text"  class="form-control form-control-sm"  name="isbn" placeholder="002423" required >
</p>
    
    

<p><label>Ano</label>
<input type="text"  class="form-control form-control-sm"  name="ano" placeholder="Ano de Lançamento" required >
</p>
 
<p><button type="submit" name="cadastrar">Salvar</button></p>
</form>
</div>
</div>
</div>
</div>


<?php

require 'rodape.php';