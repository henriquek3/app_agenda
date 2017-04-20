<?php require_once '../_models/crud.php'; require "start_sessao.php";
/**
 * Created by PhpStorm.
 * User: Jean Freitas
 * Date: 29/10/2016
 * Time: 23:34
 */


        $idcontato = $_POST['id_contato'];
        $nome = $_POST['nome'];
        $telefone = $_POST['celular'];
        $email = $_POST['email'];
        $grupo = $_POST['grupos'];
        $cidade = $_POST['idcidade'];
        $favorito = $_POST['favorito'];
        $endereco = $_POST['endereco'];
        $nascimento = $_POST['nascimento'];
        $observacoes = $_POST['observacoes'];
        $resultado = crud::update(update::contatos($nome,$telefone,$email,$grupo,$cidade,$favorito,$endereco,$nascimento,$observacoes,$idcontato));

    if ($resultado) {
        echo "Dados inseridos com sucesso!";
        header("location:/_views/contatos_iframe.php");
        exit;
    }
    else{
        echo 'Houve um erro ao cadastrar o usuário ';
        echo "erro :O";
        //header("location:/agenda/contatos_iframe.php");
        exit;
    }