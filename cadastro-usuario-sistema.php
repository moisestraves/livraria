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
<form method="POST" action="processa-cadastro-usuario-adm.php">
    
<p>

<input type="text" name="nome" placeholder="Nome Completo" required>

<input type="text" name="email" placeholder="Email" required >

</p>


<input type="text" name="cargo" placeholder="Cargo" required >
<input type="text" name="departamento" placeholder="Departamento" required >
</p>

<P>
    <input type="password" name="senha" placeholder="Senha" required >
    <!--SELECT DO PERFIL DO USUÁRIO-->
    <select name ="ativo">
     <option value="">Usuário Ativo ?</option>
     <option value="S">S</option>
     <option value="N" require>N</option>
     </select> 
</p>
<P>
  
<select name ="perfil">
    <option value ="">Perfil Administrador ?</option>
    <option value="S">S</option>
    <option value="N">N</option>

</select>

<p>

</p>
<button type="submit" name="cadastrar">Salvar</button>
</form>

</div>
</div>


<?php

require 'rodape.php';
?>