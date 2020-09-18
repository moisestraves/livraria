<?php

 session_start();
 require 'top_cliente.php';   
 require 'adm/conexao.php';
 require 'adm/func_sistema.php';

 // Teste de Validação da sessão OK var_dump($_SESSION);
    //var_dump($_SESSION);
    
    /*ATENÇÃO LEMBRETE  QUE VEM PELA URL
    **********TEM QUE ESTAR COM O CAMPO,NO FORMULÁRIO DE CONSULTA DO CLIENTE ******************** 
    <input type="hidden"  name="id" value="<?php echo $resultado['Cod_cliente'];?>">*/
    $id_cliente = $_GET['id'] ;

    
    $selecionardados = "SELECT * FROM cliente where Cod_cliente ='$id_cliente'"; // select *from config
    $resultadousuario = mysqli_query($conexao, $selecionardados);

// Leitura do parâmetro selecionado no banco de dados para edição
$resultado = mysqli_fetch_assoc($resultadousuario);

/* TESTE DO RETORNO DA QUERY
var_dump($resultado);*/


    var_dump($id_cliente);

    

?>


<div class="cliente_login">

<form  method="post" action="update-cadastrocliente.php">

<h2>Atualizar Cadastro </h2>
<p>
<!-- CAMPO TYPE HIDDEN -->
<input type="hidden"  name="id" value="<?php echo $resultado['Cod_cliente'];?> ">

<input type="texo"  name="nome"  value="<?php echo $resultado['Nome'];?>">

<input type="password" name="senha" placeholder="senha" value="<?php echo $resultado['Senha'];?>"></p>

<input type="text" name="email"  value="<?php echo $resultado['Email'];?>">
<input type="text" name="telefone"  value="<?php echo $resultado['Tel'];?>"></p>

<input type="text" name="endereco"  value="<?php echo $resultado['Endereco'];?>">
<input type="text" name="numero"  value="<?php echo $resultado['Numero'];?>"></label></p>

<input  type="text" name="bairro"  value="<?php echo $resultado['Bairro'];?>">
<input type="text" name="complemento"  value="<?php echo $resultado['Complemento'];?>"></label></p>

<input  type="text" name="cep"  value="<?php echo $resultado['Cep'];?>">
<input type="text" name="estado"  value="<?php echo $resultado['Estado'];?>"></label></p>

<input  type="text" name="cidade"  value="<?php echo $resultado['Cidade'];?>">
<input type="text" name="pessoa"  value="<?php echo $resultado['Tipo_Pessoa'];?>"></label></p>
<!-- Botão que faz o Envio das Informações!-->
<p> <button type="submit" name="atualizar">Salvar </button></p>

</form>
</div>

<?php

