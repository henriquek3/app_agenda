<?php include_once("conexao.php");

$id_categoria = $_REQUEST['id_categoria'];

$result_sub_cat = "SELECT * FROM sub_categorias_post WHERE categorias_post_id=$id_categoria ORDER BY nome_sub_categoria";
$resultado_sub_cat = mysqli_query($conn, $result_sub_cat);

while ($row_sub_cat = mysqli_fetch_assoc($resultado_sub_cat) ) {
    $sub_categorias_post[] = array(
        'id'	=> $row_sub_cat['id'],
        'nome_sub_categoria' => utf8_encode($row_sub_cat['nome_sub_categoria']),
    );
}

echo(json_encode($sub_categorias_post));
