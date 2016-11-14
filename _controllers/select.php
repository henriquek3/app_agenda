<?php
/**
 * Created by PhpStorm.
 * User: jean
 * Date: 12/11/16
 * Time: 15:08
 */

include ('../_models/pdo.php');

    $id_categoria = $_REQUEST['id_categoria'];

$sqlCidades = 'select * from cidades where id_estado = '.$id_categoria;
$resultCidades = $pdo->prepare($sqlCidades);
$resultCidades->execute();


while ($cidades = $resultCidades->fetch()) {
    $sub_categorias_post[] = array(
        'id'	=> $row_sub_cat['id_cidade'],
        'nome_sub_categoria' => utf8_encode($row_sub_cat['nome']),
    );
}

echo(json_encode($sub_categorias_post));