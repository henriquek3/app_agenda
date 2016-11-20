<?php require_once '../_models/crud.php';
/**
 * Created by PhpStorm.
 * User: Jean Freitas
 * Date: 19/11/2016
 * Time: 10:41
 */
echo '<h1>Teste</h1>';
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
    <script src="https://code.jquery.com/jquery-3.1.0.min.js" defer></script>
    <script src="checkbox/dist/js/bootstrap-checkbox.min.js" defer></script>


    <title>Document</title>
</head>
<body>
<br/>
<div class="container">
<?php

foreach (crud::select('select * from contatos') as $row)
{
    echo 'Nome: '.$row['nome'].'<br/>';
    echo 'Favorito: ';
    $checked = $row['favorito'];
    ?>
    <input type="checkbox" id="favorito" name="favorito" <?php if ($checked == 'on'){ echo 'checked';} ?>/><?php
    echo '<br/>';
}


?>

    <hr/>

    <input class="form-check" id="este" type="checkbox">

    <script>
        $('.form-check').checkboxpicker().change(function() {
            $('#este').prop('checked', false);
        });
    </script>
</body>
</html>

