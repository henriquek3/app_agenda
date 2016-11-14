<?php
	include_once("../_models/conexao.php");
	
	$titulo = $_POST['titulo'];
	$id_categoria = $_POST['id_categoria'];
	$id_sub_categoria = $_POST['id_sub_categoria'];
	
	echo "Titulo: $titulo <br>Id Categoria: $id_categoria <br> Id Subcategoria: $id_sub_categoria <br>";
	
	$result_post = "INSERT INTO post (titulo, sub_categorias_post_id) VALUES ('$titulo', '$id_sub_categoria')";
	$resultado_post = mysqli_query($conn, $result_post);
	
	if(mysqli_affected_rows($conn) > 0){ 
		echo "Artigo salvo com sucesso";	
	}else{
		echo "Artigo não foi salvo com sucesso";	
	} 