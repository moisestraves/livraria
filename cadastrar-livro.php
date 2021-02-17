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

            <div class="row">

                <form method="POST" id="inserir-capa" action="processa-cadastro-livro.php">


                    <p>
                        <label>Editora</label>
                        <input type='text' class="form-control form-control-sm" name="editora" placeholder="Nome da Editora" required>

                    </p>

                    <p>
                        <label>Titulo</label>
                        <input type="text" class="form-control form-control-sm" name="nomelivro" placeholder="Nome do Livro" required>
                    </p>


                    <p><label>Autor</label>
                        <input type="text" class="form-control form-control-sm" name="nomeautor" placeholder="Exemplo Jose da Silva" required>
                    </p>


                    <p><label>Preço Unitário</label>
                        <input type="text" class="form-control form-control-sm" name="preco" placeholder="22.00" required>
                    </p>


                    <p><label>Categoria</label>
                        <input type="text" class="form-control form-control-sm" name="categoria" placeholder="Administração" required>
                    </p>


                    <p><label>ISBN</label>
                        <input type="text" class="form-control form-control-sm" name="isbn" placeholder="002423" required>
                    </p>



                    <p><label>Ano</label>
                        <input type="text" class="form-control form-control-sm" name="ano" placeholder="Ano de Lançamento" required>
                    </p>

                    <p><label>Detalhes</label>
                        <input type="text" class="form-control form-control-sm" name="detalhes" placeholder="Detalhes sobre o livro" required>
                    </p>


                    <p>
                    <p><button name="cadastrar">Salvar</button></p>
                </form>
            </div>
        </div>
</div>
</div>


<?php

require 'rodape.php';
?>