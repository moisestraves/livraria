<?php

session_start();
/* Aqui faz a verificação da sessão
se o cliente não estiver logado vai redirecionar para o login*/
if (!$_SESSION['Email']) {

    header('location:acesso-negado.php');
}

require 'cabecaarea-admin.php';
require 'adm/func_sistema.php';
require 'adm/conexao.php';


?>
<div class="container">
    <article>
        <div class="formularioCadastro">
            <form method="POST" action="processa-cadastro-estoque.php">
                <h5>Cadastro de Estoque</h5>
                <p> * Nome do Livro </p>
                <p> * Quantidade Por unidade </p>
                <p>

                    <input class="text-left" type="text" name="nome_livro" placeholder="Nome do Livro" required>
                </p>
                <p>
                <input class="text-left" type='number' min="1" name="qtd_livro" placeholder="Qtd Unidade" required>
                </p>


                </p>
                <button type="submit" name="cadastrar">Salvar</button>
            </form>

        </div>
</div>


<?php

require 'rodape.php';
