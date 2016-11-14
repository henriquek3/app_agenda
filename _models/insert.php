<?php

/**
 * Created by PhpStorm.
 * User: jean
 * Date: 13/11/16
 * Time: 14:23
 */
class insert
{
    public static function insertgrupos($nome,$id) {
        $insertGrupo = "insert into grupos (nome, id_usuario) values ('$nome','$id')";
        return $insertGrupo;
    }
}