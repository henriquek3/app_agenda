<?php
/**
 * Created by PhpStorm.
 * User: jean
 * Date: 13/11/16
 * Time: 14:23
 */
class delete
{
    public static function grupos($idgrupo){
        $delgrupos = 'delete from grupos where id_grupo ='.$idgrupo;
        return $delgrupos;
    }
}