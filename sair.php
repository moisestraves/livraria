<?php

// Fecha minha conexao com o banco
session_status();
session_destroy();// Destroy a sessão 

mysqli_close($conexao);

header('location:cliente_login.php');

?>
