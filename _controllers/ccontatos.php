<?php
/**
 * Created by PhpStorm.
 * User: Jean Freitas
 * Date: 29/10/2016
 * Time: 23:34
 */
require "start_sessao.php";
$id = $_SESSION['id_usuario'];

if (file_exists("executa.php")){
    include ("executa.php");
}
if (!file_exists("executa.php")){
    echo "Arquivo executa.php não existe";
    exit;
}

$nome = $_POST['nome'];
$celular = $_POST['celular'];
$email = $_POST['email'];
$endereco = $_POST['endereco'];
$nascimento = $_POST['nascimento'];
$favorito = $_POST['favorito'];
$grupos = $_POST['grupos'];
$cidade = $_POST['cidades'];
$observacoes = $_POST['observacoes'];


$sql = "insert into contatos (nome,telefone,email,endereco,nascimento,favorito,id_grupo,observacoes,id_usuario,id_cidade) 
        values ('$nome','$celular','$email','$endereco','$nascimento','$favorito','$grupos','$observacoes','$id','$cidade')";

$resultado = executa($sql);

if ($resultado) {
    header("location:/agenda/contatos.php");
}