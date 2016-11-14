<?php
/**
 * Created by PhpStorm.
 * User: jean
 * Date: 12/11/16
 * Time: 18:57
 */

function executa($sql){
    include ('pdo.php');
    $pdo = new pdoinit();
    $result = $pdo->prepare($sql);
    $result->execute();
    return $result;
}

function crud($arg){
    include ('pdo.php');
    $pdo = new pdoinit();
    $result = $pdo->prepare($arg);
    $result->execute();
    $resultado = $result->fetch();
    return $resultado;
}