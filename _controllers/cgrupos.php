<?php
/**
 * Created by PhpStorm.
 * User: jean
 * Date: 13/11/16
 * Time: 17:06
 */

require_once '../_models/select.php';
require_once '../_models/insert.php';
require_once '../_models/crud.php';
require_once '../_models/delete.php';



if(isset($_POST['grupos'])){
    $nome = $_POST['grupos'];
    if (empty($nome)){
        header('location:/app_agenda/_views/cgrupos.php?action=error');
        exit;
    }
    echo $nome.' '.$id;
    crud::insert(insert::grupos($nome,$id));
    header('location:/app_agenda/_views/cgrupos.php');
}

//Verifica se o post veio prenchido pelo modal
if(isset($_POST['nomegrupo'])){
    $nome = $_POST['nomegrupo'];
    $idg = $_POST['grupoid'];
    if (empty($nome)){
        echo "Dados informados estão incorretos";
        exit;
    }

    $resultado = executa($sql);
}

//Obtem parametros pelo GET para saber qual cmd executar
    if (isset($_GET['action'])){
        $id = $_GET['id'];
        crud::deleta(delete::grupos($id));
        header('location:/app_agenda/_views/cgrupos.php');
    }