<?php
        
        require 'controle/conexao.php';
        require 'controle/funcoes-dosistema.php';

             /* Validação  do login informado */
        if ((isset($_POST['login'])) && (isset($_POST['senha']))) {
            $usuario = mysqli_real_escape_string($conexao, $_POST['login']);
            $senha = mysqli_real_escape_string($conexao, $_POST['senha']);

            $query = "SELECT * FROM usuario WHERE email =('{$usuario}') AND senha = ('{$senha}')";

            $sqlquery = mysqli_query($conexao, $query);

            //Criação do Array e Leitura dos dados do usuário
            $dadosusuario = array();
            while ($usuario = mysqli_fetch_assoc($sqlquery)) {
                $dadosusuario[] = $usuario;
            }

            //var_dump($sqlquery);

            $encontrou = mysqli_fetch_row($sqlquery);

            //var_dump($encontrou);
        }

           //Aqui neste bloco é salvo os dados da execução da Query Sqlquery
        if ($encontrou = $dadosusuario) {
            //  var_dump($dadosusuario);
            // Criação da Sessão com os dados do usuário
            // print_r($dadosusuario[0]['adm']);

            $_SESSION['id_usuario'] = $dadosusuario[0]['id_usuario'];
            $_SESSION['usuario'] = $dadosusuario[0]['nome']; // Atribuindo valores com indice para a sessão com
            $_SESSION['custo'] = $dadosusuario[0]['centrodecusto'];
            $_SESSION['area'] = $dadosusuario[0]['area'];
            $_SESSION['status'] = $dadosusuario[0]['ativo']; // Verifica o Status do perfil do usuário
            $_SESSION['perfil'] = $dadosusuario[0]['adm'];

            // Criação da variavel que salva o tipo do perfil do usuário
            $perfilusuario = $dadosusuario[0]['adm'];
            $perfilusuario = $dadosusuario[0]['ativo'];
            $perfilusuario = $dadosusuario[0]['id_usuario'];

            //AQUI CRIADO ID PARA FAZER O LOGIN E SALVAR O ULTIMO ACESSO  DO USUÁRIO
            // $idLogin = $dadosusuario[0]['id_usuario'];
            //$registro = atualizaLogin($conexao ,$idLogin);

            

            // print_r($id);

            //print_r($perfilusuario);
            //  print_r($_SESSION);

            /*Aqui é feita a verificação do tipo de perfil do usuário para liberar
              O PAINEL DE ADMINISTRAÇÃO CORRETO*/

            //********validação do perfil do usuário
            
              $perfilDeAcesso = $dadosusuario[0]['adm'];

            // var_dump($prf);
            
            //Aqui é Feito o direcinando do acesso conforme o perfil do usuário

              switch($perfilDeAcesso){ // VARIAVEL DE CONTROLE DO PERFIL
                case 'S':
                header('location:painel-admin.php');
                break;
                case 'N':
                header('location:painel-usuario.php');
                break;
              }
           
           
              // if ($perfilusuario == "S") { 
               
             //   header('location:painel-usuario.php');
              // exit;

            //} else {
               

              //  header('location:painel-admin.php');
                //exit;
               // header('location:painel-usuario.php');
            }
        //}

  echo ' <h3>Usuário não Cadastrado';
  echo' <h3> <br> Entre em  contato com o suporte';
  echo'<br>Clique para voltar para tela de login <a href="index-logar.php">Sair</a>';