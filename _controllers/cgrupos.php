<?php require_once 'start_sessao.php'; require_once '../_models/crud.php';

    if(isset($_POST['grupos'])){
        $nome = $_POST['grupos'];
        if (empty($nome)){
            header('location:/app_agenda/_views/grupos.php?action=error');
            exit;
        }
        echo $nome.' '.$id;
        crud::insert(insert::grupos($nome,$id));
        header('location:/app_agenda/_views/grupos.php');
    }

    //Verifica se o post veio prenchido pelo modal
    if(isset($_POST['nomegrupo'])){
        $nome = $_POST['nomegrupo'];
        $idg = $_POST['grupoid'];
        if (empty($nome)){
            header('location:/app_agenda/_views/grupos.php?action=error');
            exit;
        }
        crud::update(update::grupos($nome, $idg, $id));
        header('location:/app_agenda/_views/grupos.php');
    }

    //Obtem parametros pelo GET para saber qual cmd executar
    if (isset($_GET['action'])){
        $id = $_GET['id'];
        crud::deleta(delete::grupos($id));
        header('location:/app_agenda/_views/grupos.php');
    }