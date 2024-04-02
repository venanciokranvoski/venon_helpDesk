<?php

    session_start();
    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';



    //remover indices do array de sessão
    //unset()

    //destruir a varivel de sessão 
    //porem ao destruir a sessão sempre obrigar um novo request 
    // fazendo um novo redirecionamento



    //destruir a variavel de sessão
    session_destroy();
    header('location: index.php');


?>