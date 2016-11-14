<?php
/**
 * Created by PhpStorm.
 * User: jean
 * Date: 13/11/16
 * Time: 17:06
 */

require "../_controllers/start_sessao.php";
require_once '../_models/select.php';
require_once '../_models/insert.php';
require_once '../_models/crud.php';



if(isset($_POST['grupos'])){
    $nome = $_POST['grupos'];
    if (empty($nome)){
        echo "Dados informados estão incorretos";
        exit;
    }
    echo $nome.' '.$id;
    crud::execquery(insert::insertgrupos($nome,$id));
    header('location:/app_agenda/_views/grupos.php');
}

//Verifica se o post veio prenchido pelo modal
if(isset($_POST['nomegrupo'])){
    $nome = $_POST['nomegrupo'];
    $idg = $_POST['grupoid'];
    if (empty($nome)){
        echo "Dados informados estão incorretos";
        exit;
    }
    $sql = 'update grupos set nome = \''.$nome.'\' where id_grupo = '.$idg.' and id_usuario ='.$id;
    $resultado = executa($sql);
}

//Obtem parametros pelo GET para saber qual cmd executar
if (isset($_GET['action'])){
    $idGrupo = $_GET['id'];
    $sqlDel = 'delete from grupos where id_grupo ='.$idGrupo;
    $resultDel = executa($sqlDel);
}