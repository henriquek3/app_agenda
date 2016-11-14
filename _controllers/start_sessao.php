<?php session_start();
$id = $_SESSION['id_usuario'];

/**
 * Created by PhpStorm.
 * User: jean
 * Date: 12/11/16
 * Time: 18:17
 */

if (!isset($_SESSION['id_usuario']) || !isset($_SESSION['login'])){
    header("location:/app_agenda/login.php");
    exit;
}
