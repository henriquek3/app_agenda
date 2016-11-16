<?php
/**
 * Created by PhpStorm.
 * User: jean
 * Date: 13/11/16
 * Time: 14:23
 */
class delete
{
    public static function grupos($id){
        $grupos = 'delete from grupos where id_grupo ='.$id;
        return $grupos;
    }

    public static function contatos($id){
        $contatos = 'delete from contatos where id_contato ='.$id;
        return $contatos;
    }
}