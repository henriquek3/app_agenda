<?php
/**
 * Created by PhpStorm.
 * User: jean
 * Date: 12/11/16
 * Time: 12:17
 */

include ('../_models/pdo.php');
$sqlEstados = 'select * from estados';
$resultEstados = $pdo->prepare($sqlEstados);
$resultEstados->execute();

?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../_views/css/bootstrap.min.css">
    <style type="text/css">
        .carregando{
            color: tomato;
            display: none;
        }
    </style>
    <title>Select</title>
</head>
<body>
<br/>
    <div class="container">
        <div class="form-control">
            <h1>Selecionando Cidades de acordo com o Estado</h1>
            <form class="form-group" method="post" action="../_controllers/select.php">
                <label for="estado">Estado: </label>
                <select class="custom-select" name="id_categoria" id="id_categoria">
                    <option selected>Escolha o Estado</option>
                    <?php
                        while ($estados = $resultEstados->fetch()){
                            echo '<option value="'.$estados['id_estado'].'">'.$estados['nome'].'</option>';
                        }
                    ?>
                </select>
                <label for="cidade">Cidade: </label>
                <span class="carregando">Aguarde, carregando</span>
                <select class="custom-select" name="id_sub_categoria" id="id_sub_categoria">
                    <option value="">Escolha a  Cidade</option>
                </select>
                <button type="submit" class="btn btn-success">Cadastrar</button>
            </form>
        </div>
    </div>

    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
        google.load("jquery", "1.4.2");
    </script>
<script type="text/javascript">
    $(function(){
        $('#id_categoria').change(function(){
            if( $(this).val() ) {
                $('#id_sub_categoria').hide();
                $('.carregando').show();
                $.getJSON('sub_categorias_post.php?search=',{id_categoria: $(this).val(), ajax: 'true'}, function(j){
                    var options = '<option value="">Escolha Subcategoria</option>';
                    for (var i = 0; i < j.length; i++) {
                        options += '<option value="' + j[i].id + '">' + j[i].nome_sub_categoria + '</option>';
                    }
                    $('#id_sub_categoria').html(options).show();
                    $('.carregando').hide();
                });
            } else {
                $('#id_sub_categoria').html('<option value="">– Escolha Subcategoria –</option>');
            }
        });
    });
</script>
</body>
</html>
