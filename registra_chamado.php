<?php
    require_once "validator.php";

        //pegando os arquivos
        $title =  str_replace('#', '-', $_POST['titulo']);
        $categoria = str_replace('#', '-', $_POST['categoria']);
        $desc = str_replace('#', '-', $_POST['descricao']);

    // oque sera escrito no arquivo
    $texto = $_SESSION['id'] . '#' .  $title .'#'.  $categoria  .'#'.   $desc  . PHP_EOL;


    //abrindo um arquivo de text.txt
    $arquivo = fopen('chamado.hd', 'a');

    // escreve no arquivo
    fwrite($arquivo, $texto);

    // fecha o arquivo
    fclose($arquivo);
    header('location: consultar_chamado.php');




?>