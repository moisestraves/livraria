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

    $cliente = $_POST['login'];

    $usuario = ValidarUsuarioCadastro($conexao, $cliente);

    if ($usuario >= 1) {

        echo "<div class='alert alert-danger' role='alert'>
    <h5>E-mail já Cadastrado no Sistema!</h5>";
    //var_dump($usuario);
    
        die;
    }
    

    // var_dump($usuario);
    $senhaCliente = $_POST['senha'];



    //Aqui faço a verificação do tamanho da senha Requisito para ser aceito é 8 caracteres
    $senha = strlen($senhaCliente);

    if ($senha > 8) {

        echo "<div class='alert alert-danger' role='alert'>
        Senha Maior que a Parmitida pelo Sistema  !<br> O tamanho máximo é de 8 Caracteres";
        die;
    }


    //  var_dump($cliente);
    //var_dump($senhaCliente);

    $resultado = cadastroCliente($conexao, $cliente, $senhaCliente);

    if ($resultado > 0) {

        echo "<div class='alert alert-success' role='alert'>
        <h5 class='text-center'>Cadastro Efetuado com Sucesso <a href='cliente-login.php'>Clique Para Acessar !</a></h5>";
        
    }
}

?>
<?php



require 'rodape.php';

?>