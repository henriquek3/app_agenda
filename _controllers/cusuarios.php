<?php include_once ('../_models/crud.php');

/**
 * Created by PhpStorm.
 * User: jean
 * Date: 13/11/16
 * Time: 16:24
 */


$nome = $_POST['nome'];
$login = $_POST['login'];
$password = $_POST['senha'];


//Testando se a variavel vem vazia do Form de cadastro
$test = $nome.$login.$password;

    if (empty($test)){
        echo "Dados informados estão incorretos";
        exit;
    }

$sql = "insert into usuarios (nome,login,password) values ('$nome','$login','$password')";

$resultado = crud::execquery($sql);

    if ($resultado) {
        echo "Dados inseridos com sucesso!";
        header("location:/app_agenda/_views/contatos.php");
        exit;
    }
    else{
        echo 'Houve um erro ao cadastrar o usuário';
    }