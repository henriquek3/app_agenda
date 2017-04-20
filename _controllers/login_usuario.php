<?php session_start();
require '../_models/crud.php';
//require '../_models/select.php';
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

        $sql = crud::select(select::usuarios($user));
        foreach ($sql as $sessao){
            $login = $sessao['login'];
            $password = $sessao['password'];
            $id = $sessao['id_usuario'];
        }

        if ($login == $user) {
            if ($pw == $password) {
                echo 'Usuário conectado com sucesso';
                $_SESSION['id_usuario'] = $id;
                $_SESSION['login'] = $login;
                header("location:/_views/index.php");
                exit;
            } else {
                header('location:/_views/error_pass.php');
                exit;
            }
        }
        header('location:/_views/error_find_user.php');
        exit;
    }
}
header('location:/index.html');