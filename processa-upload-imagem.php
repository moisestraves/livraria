<?php 

require 'adm/conexao.php';
require 'adm/func_sistema.php';


//Aqui foi Recebido o codigo do livro, que sera usado para escolher a capa do livro
$id_livro = $_POST['select_capa'];

//print_r($id_livro);



if(isset($_FILES['arquivo'])){

    //var_dump($_FILES);
    //Aqui estou listando os tipos de arquivos válidos
    $tipoValidodeArquivos  = array("jpg","png","jpeg","gif");

    //Aqui estou pegando as informações do arquivo e nome
    $extensaoArquivo = pathinfo($_FILES['arquivo']['name'],PATHINFO_EXTENSION); 

    // Aqui o If Esta verificando se dentro do arquivo tem uma extensão valida de arquivo
    if(in_array($extensaoArquivo , $tipoValidodeArquivos)){

        $pasta = "capas/"; // Aqui foi Definido o diretório de armazenamento do arquivo
        
        // Aqui Foi salvo o arquivo temporario com o nome 
        $temporario = $_FILES['arquivo']['tmp_name'];

        //Aqui  uniqid vai Atribuir um nome único ao arquivo, concatenando com o formato do arquivo
        $novoNomeDoArquivo = uniqid() .".$extensaoArquivo";

        //var_dump($novoNomeDoArquivo);
        //Aqui é movido o arquivo e com o novo nome
        if(move_uploaded_file($temporario, $pasta.$novoNomeDoArquivo)){


            //Aqui sql  que  vai inserir os dados da capa e o livro no banco
             $sql = "INSERT INTO capa_livro (LIVRO_Cod_livro,nome_imagem, `Data_cadastro`) VALUES ('$id_livro','$novoNomeDoArquivo',NOW())";
             $queryCap = mysqli_query($conexao,$sql);   


            echo "Arquivo carredo com Sucesso <a href='carregar-capa.php'><br>Clique para Cadastra nova capa</a>";
        
       
        }else{

            
        echo "Não foi possivel Carregar o arquivo";
       }

    }
   
    }



?>