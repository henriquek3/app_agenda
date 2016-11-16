<?php

/**
 * Created by PhpStorm.
 * User: jean
 * Date: 13/11/16
 * Time: 14:23
 */
class select
{
    public static function grupos($id){
        $grupos = 'select * from grupos where id_usuario='.$id;
        return $grupos;
    }

    public static function cidades(){
        $cidades ='select * from cidades';
        return $cidades;
    }

    public static function estados(){
        $estados ='select * from estados';
        return $estados;
    }

    public static function contatos($id){
        $contatos = 'select 		ct.id_contato,
                                ct.nome,
                                ct.telefone,
                                ct.email,
                                gp.nome grupo,
                                gp.id_grupo idgrupo,
                                cd.nome cidade,
                                cd.id_cidade idcidade,
                                ct.favorito,
                                ct.endereco,
                                ct.nascimento,
                                ct.observacoes
                    from 		contatos	ct,
                                grupos		gp,
                                cidades		cd
                    where       gp.id_grupo = ct.id_grupo
                    and         cd.id_cidade = ct.id_cidade
                    AND         ct.id_usuario ='.$id;
        return $contatos;
    }

    public static function pesquisarcontatos($contato,$id)
    {
        $pesquisarcontatos ='select * from 

                            (select 	ct.id_contato,
                                        ct.nome,
                                        ct.telefone,
                                        ct.email,
                                        gp.nome         grupo,
                                        cd.nome         cidade,
                                        ct.favorito,
                                        ct.endereco,
                                        ct.nascimento,
                                        ct.observacoes
                            from 		contatos	    ct,
                                        grupos		    gp,
                                        cidades		    cd
                            where       gp.id_grupo =   ct.id_grupo
                            and         cd.id_cidade =  ct.id_cidade
                            )a where    a.nome LIKE \'%'.$contato.'%\'
                            and         ct.id_usuario ='.$id;
        return $pesquisarcontatos;
    }

    public static function usuarios($user)
    {
        $usuarios = "select * from usuarios where login = '$user'";
        return $usuarios;
    }
}
