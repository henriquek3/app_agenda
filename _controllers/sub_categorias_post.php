<?php include_once("../_models/conexao.php");

	$id_categoria = $_REQUEST['estados'];
	
	$result_sub_cat = "SELECT * FROM cidades WHERE id_estado=$id_categoria ORDER BY nome";
	$resultado_sub_cat = pg_query($conn, $result_sub_cat);
	
	while ($row_sub_cat = pg_fetch_assoc($resultado_sub_cat) ) {
		$sub_categorias_post[] = array(
			'id'	=> $row_sub_cat['id_cidade'],
			'cidades' => $row_sub_cat['nome'],
		);
	}
	
	echo(json_encode($sub_categorias_post));

