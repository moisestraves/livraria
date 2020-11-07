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


    <h4 class="text-info mx-auto" style="width: 400px;">Usuários Cadastrados no Sistema </h4>
    <div class="table-responsive">
        <table class="table bordered table-hover table-sm table-dark">
            <thead class="thead-light ">
                <tr>

                    <th scope="col">Nome</th>
                    <th scope="col">Data Cadastro</th>
                    <th scope="col">Cargo</th>
                    <th scope="col">Perfil Admin</th>
                    <th scope="col">Departamento</th>
                    <th scope="col">Login</th>
                    <th scope="col">Ativo</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Excluir</th>




                </tr>
            </thead>

            <?php $usuariosSistesma = consultaAdministradores($conexao);

            foreach ($usuariosSistesma as $userSistema) {


            ?>

                <tr>

                    <td><?= $userSistema['Nome']; ?></td>
                    <td><?= $userSistema['Data_criacao']; ?> </td>
                    <td><?= $userSistema['Cargo']; ?></td>
                    <td><?= $userSistema['Perfil']; ?></td>
                    <td><?= $userSistema['Departamento']; ?></td>
                    <td><?= $userSistema['Email']; ?></td>
                    <td><?= $userSistema['Ativo']; ?></td>

                    <td> <a href="editar-perfil-usuario.php?id=<?= $userSistema['Cod_usuario']; ?>"> Editar </td>
                    <td> <a href="delete-user-adm.php?id=<?= $userSistema['Cod_usuario']; ?>"> Excluir
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