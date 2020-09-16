<?php

session_start();

require 'adm/conexao.php';
require 'top_cliente.php';
require 'adm/func_sistema.php';

/* Aqui faz a verificação da sessão
se o cliente não estiver logado vai rediricionar para o login*/
if (!$_SESSION['Email']) {

    header('location:cliente_login.php');
   
}


//Aqui estou Salvando o email do cliente na sessão para Selecionar os dados no banco
$id_cliente =$_SESSION['Email'];

//var_dump($id_cliente);

//Aqui é Executada a Query de consulta do Usuário Logado no Sistema
$procCliente = "SELECT* from cliente where  Email='$id_cliente'";
$queryCliente =mysqli_query($conexao,$procCliente);

$resultado= mysqli_fetch_assoc($queryCliente);

//print_r($resultado);

//var_dump($_SESSION['Email']);



?>


<div class="cliente_login">

<form  method="post" action="">

<h2>Cadastro Cliente</h2>
<p>
<!-- CAMPO TYPE HIDDEN -->
<input type="hidden"  name="id" value="<?php echo $resultado['Cod_cliente'];?>">

<input type="e-mail"  name="login"  value="<?php echo $resultado['Nome'];?>">

<input type="password" name="senha" placeholder="senha" value="<?php echo $resultado['Senha'];?>"></p>

<input type="text" name="endereco"  value="<?php echo $resultado['Email'];?>">
<input type="text" name="endereco"  value="<?php echo $resultado['Tel'];?>"></p>

<input type="text" name="endereco"  value="<?php echo $resultado['Endereco'];?>">
<input type="text" name="numero"  value="<?php echo $resultado['Numero'];?>"></label></p>

<input  type="text" name="bairro"  value="<?php echo $resultado['Bairro'];?>">
<input type="text" name="complemento"  value="<?php echo $resultado['Complemento'];?>"></label></p>

<input  type="text" name="cep"  value="<?php echo $resultado['Cep'];?>">
<input type="text" name="estado"  value="<?php echo $resultado['Estado'];?>"></label></p>

<input  type="text" name="cidade"  value="<?php echo $resultado['Cidade'];?>">
<input type="text" name="pessoa"  value="<?php echo $resultado['Tipo_Pessoa'];?>"></label></p>
<a href="atualizar-infocadastrocliente.php?id=<?=$resultado['Cod_cliente']; ?>">Editar</a>
<a href="painel_cliente.php">Voltar</a>

</form>
</div>

<?php



require 'footer.php';

?>