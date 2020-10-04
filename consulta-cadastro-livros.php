<?php
session_start();
require 'adm/conexao.php';
require 'cabecaarea-admin.php';
require 'adm/func_sistema.php';

/* Aqui faz a verificação da sessão
se o cliente não estiver logado vai rediricionar para o login*/
if (!$_SESSION['Email']) {

    header('location:login-adm.php');

   
}
$resultado;

?>

<div class="container">
<div class="table-responsive">
    <table class="table bordered table-hover table-sm table-dark">
    <thead class="thead-light ">
    <tr>
   
        <th scope="col">Nome</th>
        <th scope="col">Autor</th>
        <th scope="col">Preço</th>
        <th scope="col">Categoria</th>
        <th scope="col">Ano de Publicação</th>
        <th scope="col">Editar</th>
        <th scope="col">Excluir</th>

       
       
    </tr>
    </thead>
    <tr>
    <td>Use a Cabeça Java</td>
    <td> Kathy Sierra, Bert Bates</td>
    <td>R$ 170,00</td>
    <td>Informática</td>
    <td>2003</td>
    <td> <a href="editar-livro?id=<?=$resultado['Cod_usuario']; ?>"> Editar </td>
    <td> <a href="#"> Excluir<!--<img src="IMG/lapis.png" width="5%">--></a> </td>
    </tr>
   
    </table>
</div>
</div>

<?php
require 'rodape.php';
?>