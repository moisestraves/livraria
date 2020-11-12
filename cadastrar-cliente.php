<?php

require 'cabecadapagina.php';
require 'adm/conexao.php';
require 'adm/func_sistema.php';



?>

<div class="cliente_login">

    <form method="post" action="">

        <p>Faça o seu Cadastro</p>
        <p>
            <input type="e-mail" name="login" required placeholder="email"></p>

        <p><input type="password" name="senha" required placeholder="senha"></p>
        <button name="cadastrar" type="submit">Cadastrar</button>
    </form>
</div>

<?php

// Dados para o Cadastro Inicial do Cliente

if (isset($_POST['cadastrar'])) {

    $login = $_POST['login'];
    $senha = $_POST['senha'];
   
    //Aqui faço a verificação do usuário no sistema
    $resultado = ValidarUsuarioCadastro($conexao, $login);

    if ($resultado != 0) {


        echo "<div class='alert alert-danger' role='alert'>Este e-mail já esta em uso </div>";

        
    }elseif//Aqui estou verificando a quantidade de caracteres da senha
    ((strlen($senha) < 8) OR (strlen($senha) >8)){

        echo "<div class='alert alert-danger' role='alert'>A senha informada não atende os requisitos do sistema <br> A sua senha deve conter 8 caracteres !";
    } else {

        cadastroCliente($conexao, $login, $senha);
        
        header('location:sucesso.php');
         
    }
   
}

require 'rodape.php';


?>