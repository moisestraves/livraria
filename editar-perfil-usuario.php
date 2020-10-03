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
    
    $id_cliente = $_GET['id'] ;

    
    $selecionardados = "SELECT * FROM usuario where Cod_usuario ='$id_cliente'"; // select *from config
    $resultadousuario = mysqli_query($conexao, $selecionardados);

// Leitura do parâmetro selecionado no banco de dados para edição
$resultado = mysqli_fetch_assoc($resultadousuario);

/* TESTE DO RETORNO DA QUERY
var_dump($resultado);*/


   // var_dump($id_cliente);

    

?>

<div class="container">

<div class="formularioCadastro">
<form  method="post" action="">

<h6>Meu Perfil </h6>
<p>

<div class="form-group">
<div class="foto">
    
<img src="IMG/usuario-negro.png" alt="Foto Usuário" class="rounded-circle" width="9%">
</div>
<!-- CAMPO TYPE HIDDEN -->
<input type="hidden"  name="id" value="<?php echo $resultado['Cod_usuario'];?>">
<p>
<label>Nome</label>
    <input type="texto" class="form-control"  name="nome"  value="<?php echo $resultado['Nome'];?>"></p>
<p>
    <label>Cargo</label>
    <input type="text" class="form-control" name="cargo"  value="<?php echo $resultado['Cargo'];?>" ></p>

   <!-- <label>Perfil Administrador</label>
    <p><input type="text" class="form-control" name="perfil" placeholder="senha" value="/*<?php echo $resultado['Perfil'];?>*/"></p>-->

    <label>Departamento</label>
   <p> <input type="text"  class="form-control" name="departamento"  value="<?php echo $resultado['Departamento'];?>"></p>

<p><label>Login</label>
    <input type="text" class="form-control" name="email"  value="<?php echo $resultado['Email'];?> "></p>

<!--<p><label>Status</label>
    <input  type="text" class="form-control" name="ativo"  value="<?php echo $resultado['Ativo'];?>"></p>-->

    <!-- Botão que faz o Envio das Informações!-->
<p> <button type="submit" name="atualizar">Salvar </button></p>

</form>
</div>
</div>
</div>

<?php

if(isset($_POST['atualizar'])){

//AQUI A ID FOI RECEBIDA VIA POST,O SISTEMA PRECISA DELA PARA FAZER O UPDADE CORREDO DO USUÁRIO
//var_dump($id_cliente = $_POST['id']) ;
   // echo "Botão Update Acionado ";
    $id_cliente = $_POST['id'];
    $Nome = $_POST['nome']; 
    $cargo =$_POST['cargo'];
    $departamento =$_POST['departamento'];
    $email =$_POST['email'];

    // QUERY UPDATE EXECUTANDO

      $updateUsuario= "UPDATE usuario SET Nome='$Nome' , Cargo='$cargo', Departamento='$departamento', Email='$email'  where Cod_usuario ='$id_cliente'";
      $sqlquery = mysqli_query($conexao,$updateUsuario);
      
      //$resultado = mysqli_fetch_assoc($updateCliente);
      
      $resultado = $sqlquery;
      
      //var_dump($conexao);
      
      if($resultado ==1){
      
          
        echo 'Atualizado com Sucesso  ';

        echo '<a href="perfil-usuario.php"><h4> PAINEL DO USUÁRIO<h4></a>';
          
          
       
      }else {
      
          echo 'Não Foi Possivel finalizar a operação ';
      }
      

  
}





require 'rodape.php';

?>