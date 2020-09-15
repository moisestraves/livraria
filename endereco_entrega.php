<?php

session_start();
/* Aqui faz a verificação da sessão
se o cliente não estiver logado vai rediricionar para o login*/
if (!$_SESSION['Email']) {

    header('location:cliente_login.php');
}
require 'top_cliente.php';
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
<input type="text" name="endereco"  value="<?php echo $resultado['Endereco'];?>">

<input type="text" name="numero"  value="<?php echo $resultado['Numero'];?>"></label>

<input  type="text" name="bairro"  value="<?php echo $resultado['Bairro'];?>"></p>

<input type="text" name="complemento"  value="<?php echo $resultado['Complemento'];?>"></label>

<input  type="text" name="cep"  value="<?php echo $resultado['Cep'];?>">

<input type="text" name="estado"  value="<?php echo $resultado['Estado'];?>"></label></p>
<button type="subimit" name="alterar">Alterar</button><button type="subimit">Voltar</button>

</div>

<?php



require 'footer.php';

?>
