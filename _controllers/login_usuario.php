<?php session_start(); include ('../_models/executa.php');
/**
 * Created by PhpStorm.
 * User: Jean Freitas
 * Date: 29/10/2016
 * Time: 23:34
 */

if (!empty($_POST['login'])){
    $user = $_POST['login'];
    if (!empty($_POST['senha'])){
        $pw = $_POST['senha'];

        $select = "select * from usuarios where login = '$user'";
        $result = executa($select);
        $sessao = $result->fetch();

        $login = $sessao['login'];
        $password = $sessao['password'];
        $id = $sessao['id_usuario'];

        if ($login == $user) {
            if ($pw == $password) {
                echo 'Usuário conectado com sucesso';
                $_SESSION['id_usuario'] = $id;
                $_SESSION['login'] = $login;
                header("location:/app_agenda/_views/index.php");
            } else {
                header('location:/app_agenda/_views/error_pass.php');
            }
            exit;
        }
        header('location:/app_agenda/_views/error_find_user.php');
    }
}
header("location:/app_agenda/login.php");