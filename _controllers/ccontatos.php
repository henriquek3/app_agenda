<?php require_once '../_controllers/start_sessao.php'; require_once '../_models/crud.php';

/**
 * Created by PhpStorm.
 * User: Jean Freitas
 * Date: 29/10/2016
 * Time: 23:34
 */

    //Obtem parametros pelo GET para saber qual cmd executar
    if (isset($_GET['action']))
    {
        $idContato = $_GET['id'];
        crud::deleta(delete::contatos($idContato));
        header("location:/app_agenda/_views/contatos.php");
        exit;
    }

$nome = $_POST['nome'];
$celular = $_POST['celular'];
$email = $_POST['email'];
$endereco = $_POST['endereco'];
$nascimento = $_POST['nascimento'];
$favorito = $_POST['favorito'];
$grupos = $_POST['grupos'];
$cidade = $_POST['cidades'];
$observacoes = $_POST['observacoes'];

$resultado = crud::insert(insert::contatos($nome,$celular,$email,$endereco,$nascimento,$favorito,$grupos,$observacoes,$id,$cidade));

if ($resultado) {
    header("location:/app_agenda/_views/contatos.php");
    exit;
}