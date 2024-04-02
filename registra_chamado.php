<?php
    // recebo as infomarções do front
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';

    //abrindo um arquivo de text.txt
    $arquivo = fopen('chamado.hd', 'a');

    //pegando os arquivos
    $title = str_replace('#', '-', $_POST['titulo']);
    $categoria = str_replace('#', '-', $_POST['categoria']);
    $desc = str_replace('#', '-', $_POST['descricao']);

    // oque sera escrito no arquivo
    $texto = $title .'#'.  $categoria  .'#'.   $desc  . PHP_EOL;

    // escreve no arquivo
    fwrite($arquivo, $texto);

    // fecha o arquivo
    fclose($arquivo);
    header('location: consultar_chamado.php');




?>