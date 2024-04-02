<?php


    session_start();

    print_r($_SESSION);
    echo '<hr />';


    $usuarios_app = array(
        array('email' => 'adm@teste.com.br', 'password' => '123456' ),
        array('email' => 'u@gmail.com', 'password' => '12345'),
    );

    // variavel que verifica se aautenticação foi realizada
    $usuario_autenticado = false; 


    foreach($usuarios_app as $user){

        // fazer validação para ver se os dados são compativeis
        if($user['email'] == $_POST['email'] 
        && $user['password'] == $_POST["password"]){
            $usuario_autenticado = true;
        }
    }

    if($usuario_autenticado){
        echo 'Usuario logado';
        $_SESSION['autenticado'] = 'SIM';
        $_SESSION['x'] = 'veve';
        $_SESSION['w'] = 'juju';
        header('location: home.php');
    }else {
        $_SESSION['autenticado'] = 'NAO';
        header('location: index.php?login=erro');
    }

    // echo $_POST['email'];
    // echo '<br />';
    // echo $_POST["password"];



?>