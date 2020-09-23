<?php

session_start();
/* Aqui faz a verificação da sessão
se o cliente não estiver logado vai rediricionar para o login*/
if (!$_SESSION['Email']) {

    header('location:cliente_login.php');
}
require 'cabecaareacliente.php';
require 'adm/conexao.php';
require 'adm/func_sistema.php';




   
   //Aqui estou Salvando o email do cliente na sessão para Selecionar os dados no banco
$id_cliente =$_SESSION['Email'];

//var_dump($id_cliente);

//Aqui é Executada a Query de consulta do Usuário Logado no Sistema
$procCliente = "SELECT *from cliente where  Email='$id_cliente'";
$queryCliente =mysqli_query($conexao,$procCliente);

$resultado= mysqli_fetch_assoc($queryCliente);

//print_r($resultado);
?>


<div class="cliente_login">
<P>
<h2>Endereço de Entrega</h2>
<input type="hidden"  name="id" value="<?php echo $resultado['Email'];?>">
<label>Endereço</label>
<input type="text" name="endereco"  value="<?php echo $resultado['Endereco'];?>">

<label>Número</label>
<input type="text" name="numero"  value="<?php echo $resultado['Numero'];?>"></label>

<label>Bairro</label>
<input  type="text" name="bairro"  value="<?php echo $resultado['Bairro'];?>"></p>

<label>Complemento</label>
<input type="text" name="complemento"  value="<?php echo $resultado['Complemento'];?>"></label>

<label>Cep</label>
<input  type="text" name="cep"  value="<?php echo $resultado['Cep'];?>">
<label>Estado</label>
<input type="text" name="estado"  value="<?php echo $resultado['Estado'];?>"></label></p>
<a href="painel_cliente.php"><button type="subimit">Voltar</button></a>

</div>


</div>

<?php



require 'rodape.php';

?>
