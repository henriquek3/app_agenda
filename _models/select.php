<?php //require_once '../_controllers/start_sessao.php';
/**
 * Created by PhpStorm.
 * User: jean
 * Date: 13/11/16
 * Time: 14:23
 */
class select
{
    public static function gridGrupos($id){
        $gridGrupos = 'select * from grupos where id_usuario='.$id;
        return $gridGrupos;
    }
}
