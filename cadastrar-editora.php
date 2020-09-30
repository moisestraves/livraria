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
<form method="POST" action="processa-cadastro-editora.php">
<h5>Cadastro da Editora</h5> 
<p> * Nome da Editora : Exemplo Editora Toque de Fadas </p>
<p> * Representante : José da Silva Júnior </p>
<p> * Email: jose@toquedefadas.com.br </p>
<p> * Celular: 11 - 95233-0222 </p>
<p>

<input type="text" name="Editora" placeholder="Editora" required>

<input type="text" name="Contato" placeholder="Representante da Editora" required >

</p>


<input type="email" name="email" placeholder="Email " required >
<input type="text" name="telefone" placeholder="Celular" required >
</p>



<p>

</p>
<button type="submit" name="cadastrar">Salvar</button>
</form>

</div>
</div>


<?php

require 'rodape.php';