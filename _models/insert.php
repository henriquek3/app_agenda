<?php

/**
 * Created by PhpStorm.
 * User: jean
 * Date: 13/11/16
 * Time: 14:23
 */
class insert
{
    public static function grupos($nome,$id) {
        $insertGrupo = "insert into grupos (nome, id_usuario) values ('$nome','$id')";
        return $insertGrupo;
    }

    public static function contatos($nome,$celular,$email,$endereco,$nascimento,$favorito,$grupos,$observacoes,$id,$cidade)
    {
        $contatos = "insert into contatos (nome,telefone,email,endereco,nascimento,favorito,id_grupo,observacoes,id_usuario,id_cidade) 
                                   values ('$nome','$celular','$email','$endereco','$nascimento','$favorito','$grupos','$observacoes','$id','$cidade')";
        return $contatos;
    }

    public static function usuarios($nome,$login,$password)
    {
        $usuarios = "insert into usuarios (nome,login,password) values ('$nome','$login','$password')";
        return $usuarios;
    }
}