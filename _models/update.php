<?php

namespace InformativoIPB\Models;

class update
{
    public static function grupos($nome,$idg,$id){
        $sql = 'update grupos set nome = \''.$nome.'\' where id_grupo = '.$idg.' and id_usuario ='.$id;
        return $sql;
    }

    public static function contatos($nome,$telefone,$email,$grupo,$cidade,$favorito,$endereco,$nascimento,$observacoes,$idcontato)
    {
        $contatos = 'update  contatos 
                     set 
                             nome = \''.$nome.'\',
                             telefone = \''.$telefone.'\', 
                             email = \''.$email.'\', 
                             id_grupo = \''.$grupo.'\', 
                             id_cidade = \''.$cidade.'\',                             
                             favorito = \''.$favorito.'\', 
                             endereco = \''.$endereco.'\', 
                             nascimento = \''.$nascimento.'\', 
                             observacoes = \''.$observacoes.'\'             
                     where  id_contato = \''.$idcontato.'\'';
        return $contatos;
    }
}