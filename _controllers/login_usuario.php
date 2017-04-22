<?php session_start();

require '../vendor/autoload.php';

//require '../_models/crud.php';
//require '../_models/select.php';


if (!empty($_POST['login'])){
    $user = $_POST['login'];
    if (!empty($_POST['senha'])){
        $pw = $_POST['senha'];

        $sql = InformativoIPB\Models\crud::select(InformativoIPB\Models\select::usuarios($user));
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