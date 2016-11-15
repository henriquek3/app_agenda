<?php
require_once '../_models/select.php';
require_once '../_models/pdo.php';

$pdo = new pdoinit();

$result = $pdo->prepare(select::gridGrupos(10));
$result->execute();



echo '<hr/>';
?>
<table class="table table-hover">
    <thead>
    <tr>
        <th>#</th>
        <th>Grupos</th>
        <th> </th>
        <th> </th>
    </tr>
    </thead>
    <tbody>
    <?php
    while ($arr = $result->fetch()){
        echo "<tr>";
        echo '<th scope="row">'.$arr['id_grupo'].'</th>';
        echo '<td>'.$arr['nome'].'</td>';
        echo '<td>'.' '.'</td>';
        echo '<td align="right"><button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#modalGrupos" data-idgrupo="'.$arr['id_grupo'].'" data-whatever="'.$arr['nome'].'">Alterar</button>'.
            ' '.
            '<a href="grupos.php?action=excluir&id='.$arr['id_grupo'].'"><button type="button" class="btn btn-outline-danger btn-sm">Excluir</button><a/>'.'</td>';
        echo '</tr>';
    }

?>
    </tbody>
    </table>
