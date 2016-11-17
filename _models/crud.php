<?php require_once 'pdo.php'; require_once 'delete.php'; require_once 'insert.php'; require_once 'select.php'; require_once 'update.php';
/**
 * Created by PhpStorm.
 * User: jean
 * Date: 13/11/16
 * Time: 16:24
 */

class crud
{
    public static function select($arg){
        $pdo = new pdoinit();
        $result = $pdo->prepare($arg);
        $result->execute();
        $resultado = $result->fetchAll(PDO::FETCH_ASSOC);
        return $resultado;
    }

    public static function insert($sql){
        $pdo = new pdoinit();
        $result = $pdo->prepare($sql);
        $result->execute();
        return $result;
    }
    public static function deleta($sql){
        $pdo = new pdoinit();
        $result = $pdo->prepare($sql);
        $result->execute();
    }

    public static function update($sql){
        $pdo = new pdoinit();
        $result = $pdo->prepare($sql);
        $result->execute();
        return $result;
    }
}