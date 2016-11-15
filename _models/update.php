<?php
/**
 * Created by PhpStorm.
 * User: jean
 * Date: 13/11/16
 * Time: 14:23
 */
class update
{
    public static function grupos($nome,$idg,$id){
        $sql = 'update grupos set nome = \''.$nome.'\' where id_grupo = '.$idg.' and id_usuario ='.$id;
        return $sql;
    }
}