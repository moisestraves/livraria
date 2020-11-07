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

    $teste = ValidarUsuarioCadastro($conexao, $cliente);

    //Verificação de Cliente já cadastrado

    if ($teste > 0) {


        echo "<div class='alert alert-danger' role='alert'>
    <h5 class='text-center'>E-mail já Cadastrado !</h5>";
    }


    $senhaCliente = $_POST['senha'];


    //Aqui faço a verificação do tamanho da senha Requisito para ser aceito é 8 caracteres
    $senha = strlen($senhaCliente);

    if ($senha > 8) {

        echo "<div class='alert alert-danger' role='alert'>
        <h5 class='text-center'>A senha só pode Ter 8 caracteres !</h5>";
    }


    var_dump($cliente);
    var_dump($senhaCliente);

    $resultado = cadastroCliente($conexao, $cliente, $senhaCliente);

    if ($resultado > 0) {

        echo "<div class='alert alert-success' role='alert'>
        <h5 class='text-center'>Cadastro Efetuado com Sucesso !</h5>";

        header('location: painel_cliente.php');
    }
}



?>
<?php



require 'rodape.php';

?>