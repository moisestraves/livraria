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

?>

<div class="container">
    <h4 class="text-info mx-auto" style="width: 400px;">Relatórios de Clientes cadastrados </h4>
    <p class="text-danger">Aqui você pode editar os dados cadastrais do cliente | Excluir um cliente</p>


    <div class="table-responsive">
        <table class="table bordered table-hover table-sm table-dark">
            <thead class="thead-light ">
                <tr>

                    <th scope="col">Nome</th>
                    <th scope="col">Login</th>
                    <th scope="col">Endereco</th>
                    <th scope="col">Numero</th>
                    <th scope="col">Complemento</th>
                    <th scope="col">Cep</th>
                    <th scope="col">Bairro</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Excluir</th>

                </tr>
            </thead>
            <!--CALL FUNCTION  SELECT FROM TABLES CLIENT-->
            <?php $retornoUsuarios = ConsultaUsuarios($conexao);

            //Percorrendo  o array 
            foreach ($retornoUsuarios as $user) {

            ?>
                <tr>
                    <td><?= $user['Nome']; ?></td>
                    <td><?= $user['Email']; ?> </td>
                    <td><?= $user['Endereco']; ?> </td>
                    <td><?= $user['Numero']; ?> </td>
                    <td><?= $user['Complemento']; ?> </td>
                    <td><?= $user['Cep']; ?> </td>
                    <td><?= $user['Bairro']; ?> </td>
                    <td><?= $user['Estado']; ?> </td>
                    <td> <a href="atualizar-info-painel-adm.php?id=<?= $user['Cod_cliente']; ?>"> Editar</a> </td>
                    <td> <a href="excluir-user-adm.php?id=<?= $user['Cod_cliente']; ?>"> Excluir
                            <!--<img src="IMG/lapis.png" width="5%">--></a> </td>
                </tr>
            <?php
            } ?>
        </table>
    </div>
</div>

<?php
require 'rodape.php';
?>