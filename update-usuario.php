
<?php
// Trecho do código que faz o update dos dados do usuário

require_once 'adm/conexao.php';

if(isset($_POST['atualizar'])){

//AQUI A ID FOI RECEBIDA VIA POST,O SISTEMA PRECISA DELA PARA FAZER O UPDADE CORREDO DO USUÁRIO
//var_dump($id_cliente = $_POST['id']) ;
   // echo "Botão Update Acionado ";
    $id_cliente = $_POST['id'];
    $Nome = $_POST['nome']; 
    $cargo =$_POST['cargo'];
    $departamento =$_POST['departamento'];
    $email =$_POST['email'];
    $status =$_POST['ativo'];

    
    

    // QUERY UPDATE EXECUTANDO

      $updateUsuario= "UPDATE usuario SET Nome='$Nome' , Cargo='$cargo', Departamento='$departamento', Email='$email' , Ativo='$status'  where Cod_usuario ='$id_cliente'";
      $sqlquery = mysqli_query($conexao,$updateUsuario);
      
      //$resultado = mysqli_fetch_assoc($updateCliente);
      
      $resultado = $sqlquery;
      
      //var_dump($conexao);
      
     

     
        
      
      if($resultado == 1){
        

        header('location:update-sucesso.php');
   
          
          
       
      }else {
      
        
          echo 'Não Foi Possivel finalizar a operação ';
      }
      

  
}
?>