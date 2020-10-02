<?php

session_start();

require 'adm/conexao.php';
require 'header-usuario-adm.php';
require 'adm/func_sistema.php';

/* Aqui faz a verificação da sessão
se o cliente não estiver logado vai rediricionar para o login*/
if (!$_SESSION['Email']) {

    header('location:login-adm.php');
   
}


//Aqui estou Salvando o email do cliente na sessão para Selecionar os dados no banco
$id_cliente =$_SESSION['Email'];

//var_dump($id_cliente);

//Aqui é Executada a Query de consulta do Usuário Logado no Sistema
$procUsuario = "SELECT* from usuario where  Email='$id_cliente'";
$queryUsuario =mysqli_query($conexao,$procUsuario);

$resultado= mysqli_fetch_assoc($queryUsuario);

//print_r($resultado);

//var_dump($_SESSION['Email']);



?>


<div class="container">

<div class="formularioCadastro">
<form  method="post" action="">

<h6>Meu Perfil </h6>
<p>

<div class="form-group">
<div class="foto">
    
<img src="IMG/usuario-negro.png" alt="..." class="rounded-circle" width="9%">
</div>
<!-- CAMPO TYPE HIDDEN -->
<input type="hidden"  name="id" value="<?php echo $resultado['Cod_usuario'];?>">
<p>
<label>Nome</label>
    <input type="texto" class="form-control"  name="nome"  value="<?php echo $resultado['Nome'];?>"readonly></p>
<p>
    <label>Cargo</label>
    <input type="text" class="form-control" name="cargo"  value="<?php echo $resultado['Cargo'];?>" readonly></p>

   <!-- <label>Perfil Administrador</label>
    <p><input type="text" class="form-control" name="perfil" placeholder="senha" value="/*<?php echo $resultado['Perfil'];?>*/"></p>-->

    <label>Departamento</label>
   <p> <input type="text"  class="form-control" name="departamento"  value="<?php echo $resultado['Departamento'];?>"readonly></p>

<p><label>E-mail</label>
    <input type="text" class="form-control" name="email"  value="<?php echo $resultado['Email'];?>"readonly></p>

<!--<p><label>Status</label>
    <input  type="text" class="form-control" name="ativo"  value="<?php echo $resultado['Ativo'];?>"></p>-->
<a href="editar-perfil-usuario.php?id=<?=$resultado['Cod_usuario']; ?>">Editar</a>
<a href="painel-adm.php">Voltar</a>

</form>
</div>
</div>
</div>

<?php



require 'rodape.php';

?>