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
        $grupos = 'SELECT id_grupo, id_usuario, nome, rank() OVER (ORDER BY id_grupo) indice FROM grupos WHERE id_usuario='.$id;
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
                                gp.nome      grupo,
                                gp.id_grupo  idgrupo,
                                cd.nome      cidade,
                                es.nome      estado,
                                cd.id_cidade idcidade,
                                cd.id_estado idestado,
                                ct.favorito,
                                ct.endereco,
                                ct.nascimento,
                                ct.observacoes,
                                rank() OVER (ORDER BY id_contato) indice
                    from 		contatos	ct,
                                grupos		gp,
                                cidades		cd,
                                estados     es
                    where       gp.id_grupo = ct.id_grupo
                    and         cd.id_cidade = ct.id_cidade
                    AND         cd.id_estado = es.id_estado
                    AND         ct.id_usuario ='.$id;
        return $contatos;
    }

    public static function favoritos($id){
        $favoritos = 'select 		ct.id_contato,
                                ct.nome,
                                ct.telefone,
                                ct.email,
                                gp.nome      grupo,
                                gp.id_grupo  idgrupo,
                                cd.nome      cidade,
                                es.nome      estado,
                                cd.id_cidade idcidade,
                                cd.id_estado idestado,
                                ct.favorito,
                                ct.endereco,
                                ct.nascimento,
                                ct.observacoes,
                                rank() OVER (ORDER BY id_contato) indice
                    from 		contatos	ct,
                                grupos		gp,
                                cidades		cd,
                                estados     es
                    where       gp.id_grupo = ct.id_grupo
                    and         cd.id_cidade = ct.id_cidade
                    AND         cd.id_estado = es.id_estado
                    AND         ct.favorito = \'on\'
                    AND         ct.id_usuario ='.$id;
        return $favoritos;
    }

    public static function pesquisarcontatos($contato,$id)
    {
        $pesquisarcontatos ='select * from 

                            (select 		ct.id_contato,
                                ct.nome,
                                ct.telefone,
                                ct.email,
                                gp.nome      grupo,
                                gp.id_grupo  idgrupo,
                                cd.nome      cidade,
                                es.nome      estado,
                                cd.id_cidade idcidade,
                                cd.id_estado idestado,
                                ct.favorito,
                                ct.endereco,
                                ct.nascimento,
                                ct.observacoes,
                                rank() OVER (ORDER BY id_contato) indice
                    from 		contatos	ct,
                                grupos		gp,
                                cidades		cd,
                                estados     es
                    where       gp.id_grupo = ct.id_grupo
                    and         cd.id_cidade = ct.id_cidade
                    AND         cd.id_estado = es.id_estado
                            and         ct.id_usuario ='.$id.'
                            )a where    a.nome LIKE \'%'.$contato.'%\'';
        return $pesquisarcontatos;
    }

    public static function usuarios($user)
    {
        $usuarios = "select * from usuarios where login = '$user'";
        return $usuarios;
    }
}
