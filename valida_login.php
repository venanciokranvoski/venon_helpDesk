<?php


    session_start();

    print_r($_SESSION);
    echo '<hr />';


    //Perfil ADM
    $perfil = array(1 => 'Administrativo', 2 => 'Usuario');


    $usuarios_app = array(
        array('id' => 1, 'email' => 'adm@teste.com.br', 'password' => '123456', 'perfil_id' => 1 ),
        array('id' => 2, 'email' => 'u@gmail.com', 'password' => '12345', 'perfil_id' => 1),
        array('id' => 3, 'email' => 'venancio@gmail.com', 'password' => '123456', 'perfil_id' => 2 ),
        array('id' => 4, 'email' => 'l@gmail.com', 'password' => '12345', 'perfil_id' => 2),
    );

    // variavel que verifica se aautenticação foi realizada
    $usuario_autenticado = false; 

    $usuario_id = null;
    $usuario_perfil_id = null;


    foreach($usuarios_app as $user){

        // fazer validação para ver se os dados são compativeis
        if($user['email'] == $_POST['email'] 
        && $user['password'] == $_POST["password"]){
            $usuario_autenticado = true;
            // recebe valor do id do usuario da sessão!         
            $usuario_id = $user['id'];
            $usuario_perfil_id = $user['perfil_id'];
        }
    }

    if($usuario_autenticado){
        echo 'Usuario logado';
        $_SESSION['autenticado'] = 'SIM';
        $_SESSION['id'] = $usuario_id;
        $_SESSION['perfil_id'] = $usuario_perfil_id;
        header('location: home.php');
    }else {
        $_SESSION['autenticado'] = 'NAO';
        header('location: index.php?login=erro');
    }

    // echo $_POST['email'];
    // echo '<br />';
    // echo $_POST["password"];



?>