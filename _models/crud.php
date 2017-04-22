<?php
/*
require_once 'pdo.php';
require_once 'delete.php';
require_once 'insert.php';
require_once 'select.php';
require_once 'update.php';
 */

namespace InformativoIPB\Models;

use \InformativoIPB\Models\Pdoinit as pdo;

class crud
{
    public static function select($arg){
        $pdo = new pdo;
        $result = $pdo->prepare($arg);
        $result->execute();
        $resultado = $result->fetchAll(PDO::FETCH_ASSOC);
        return $resultado;
    }

    public static function insert($sql){
        $pdo = new  pdo();
        $result = $pdo->prepare($sql);
        $result->execute();
        return $result;
    }

    public static function deleta($sql){
        $pdo = new  pdo();
        $result = $pdo->prepare($sql);
        $result->execute();
    }

    public static function update($sql){
        $pdo = new  pdo();
        $result = $pdo->prepare($sql);
        $result->execute();
        return $result;
    }
}