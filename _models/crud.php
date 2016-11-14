<?php include ('pdo.php');
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
        $resultado = $result->fetch(PDO::FETCH_ASSOC);
        return $resultado;
    }

    public static function execquery($sql){
        $pdo = new pdoinit();
        $result = $pdo->prepare($sql);
        $result->execute();
        return $result;
    }
}