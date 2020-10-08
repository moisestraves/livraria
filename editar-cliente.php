<?php

session_start();

require 'adm/conexao.php';
require 'cabecaarea-admin.php';
require 'adm/func_sistema.php';
/* Aqui faz a verificação da sessão
se o cliente não estiver logado vai rediricionar para o login
if (!$_SESSION['Email']) {

    header('location:cliente_login.php');
   
}*/


//Aqui estou Salvando o email do cliente na sessão para Selecionar os dados no banco
$cod_cliente = $_GET['id'];

var_dump($cod_cliente);

//Aqui é Executada a Query de consulta do Usuário Logado no Sistema
$procCliente = "SELECT* from cliente where  Cod_cliente='$cod_cliente'";
$queryCliente =mysqli_query($conexao,$procCliente);

$resultado= mysqli_fetch_assoc($queryCliente);

print_r($procCliente);

//var_dump($_SESSION['Email']);



?>


<div class="cliente_login">

<form  method="post" action="">

<h2>Dados Cadastrais do Cliente</h2>
<p>
<!-- CAMPO TYPE HIDDEN -->
<input type="hidden"  name="id" value="<?php echo $resultado['Cod_cliente'];?>">
<p><label>Nome</label>
    <input type="texto"  name="nome"  value="<?php echo $resultado['Nome'];?>">

<p><label>Email<label>
    <input type="email" name="email"  value="<?php echo $resultado['Email'];?>"></p>
<p><label>Senha</label>
    <input type="password" name="senha" placeholder="senha" value="<?php echo $resultado['Senha'];?>"></p>

<p><label>Celular</label>
    <input type="text" name="telefone"  value="<?php echo $resultado['Tel'];?>"></p>

<p><label>Endereço</label>
    <input type="text" name="endereco"  value="<?php echo $resultado['Endereco'];?>"></p>

<p><label>Bairro</label>
    <input  type="text" name="bairro"  value="<?php echo $resultado['Bairro'];?>"></p>

<p><label>Número</label>
    <input type="text" name="numero"  value="<?php echo $resultado['Numero'];?>"></label></p>

<p><label>Complemento</label>
    <input type="text" name="complemento"  value="<?php echo $resultado['Complemento'];?>"></label></p>
    
<p><label>Cep</label>
    <input  type="text" name="cep"  value="<?php echo $resultado['Cep'];?>">

<p><label>Estado</label>
    <input type="text" name="estado"  value="<?php echo $resultado['Estado'];?>"></label></p>

<p><label>Cidade</label>    
    <input  type="text" name="cidade"  value="<?php echo $resultado['Cidade'];?>">

<p><label>Pessoa</label>  
     <input type="text" name="pessoa"  value="<?php echo $resultado['Tipo_Pessoa'];?>"></label></p>

<a href="update-cadastro-cliente-adm.php?id=<?=$resultado['Cod_cliente']; ?>">Editar</a>
<a href="painel-adm.php">Voltar</a>

</form>
</div>

<?php



require 'rodape.php';

?>