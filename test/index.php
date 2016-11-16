<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Celke - Popula o select conforme escolha anterior</title>		
		<style type="text/css">
			.carregando{
				color:#ff0000;
				display:none;
			}
		</style>
	</head>
	<body>
		<h1>Cadastrar Artigo</h1>
		<?php include_once("../_models/conexao.php"); ?>
		
		<form method="POST" action="salvar_post.php">
			<label>Titulo:</label>
			<input type="text" name="titulo" placeholder="Titulo do Artigo"> <br><br>
			
			<label>Categoria:</label>
			<select name="id_categoria" id="estados">
				<option value="">Escolha a Categoria</option>
				<?php
					$result_cat_post = "SELECT * FROM estados";
					$resultado_cat_post = pg_query($conn, $result_cat_post);
					while($row_cat_post = pg_fetch_assoc($resultado_cat_post) ) {
						echo '<option value="'.$row_cat_post['id_estado'].'">'.$row_cat_post['nome'].'</option>';
					}
				?>
			</select><br><br>
			
			<label>Subcategoria:</label>
			<span class="carregando">Aguarde, carregando...</span>
			<select name="id_sub_categoria" id="cidades">
				<option value="">Escolha a Subcategoria</option>
			</select><br><br>
			
			<input type="submit" value="Cadastrar">
		</form>
		
		<script type="text/javascript" src="https://www.google.com/jsapi"></script>
		<script type="text/javascript">
		  google.load("jquery", "1.4.2");
		</script>
		
		<script type="text/javascript">
		$(function(){
			$('#estados').change(function(){
				if( $(this).val() ) {
					$('#cidades').hide();
					$('.carregando').show();
					$.getJSON('../_controllers/sub_categorias_post.php?search=',{estados: $(this).val(), ajax: 'true'}, function(j){
						var options = '<option value="">Escolha Subcategoria</option>';	
						for (var i = 0; i < j.length; i++) {
							options += '<option value="' + j[i].id + '">' + j[i].cidades + '</option>';
						}	
						$('#cidades').html(options).show();
						$('.carregando').hide();
					});
				} else {
					$('#cidades').html('<option value="">– Escolha Subcategoria –</option>');
				}
			});
		});
		</script>		
	</body>
</html>
