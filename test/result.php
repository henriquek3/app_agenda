<?php
require_once '../_models/select.php';
require_once '../_models/crud.php';
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
    /*while ()){
        echo "<tr>";
        echo '<th scope="row">'.$arr['id_grupo'].'</th>';
        echo '<td>'.$arr['nome'].'</td>';
        echo '<td>'.' '.'</td>';
        echo '<td align="right"><button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#modalGrupos" data-idgrupo="'.$arr['id_grupo'].'" data-whatever="'.$arr['nome'].'">Alterar</button>'.
            ' '.
            '<a href="cgrupos.php?action=excluir&id='.$arr['id_grupo'].'"><button type="button" class="btn btn-outline-danger btn-sm">Excluir</button><a/>'.'</td>';
        echo '</tr>';
    }*/


    $var = crud::select(select::contatos(7));
    //ve o que retorna
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
    echo '<hr/>';
    echo '<br/>';

    foreach($var as $sql){
        echo '<tr>';
        echo '<th scope="row">'.$sql['id_contato'].'</th>';
        echo '<td>'.$sql['nome']."</td>";
        echo "<td>".$sql['telefone']."</td>";
        echo "<td>".$sql['email']."</td>";
        echo "<td>".$sql['grupo']."</td>";
        echo "<td>".$sql['cidade']."</td>";
        echo "<td>".$sql['favorito']."</td>";
        echo "<td>".$sql['endereco']."</td>";
        echo "<td>".$sql['nascimento']."</td>";
        echo "<td>".$sql['observacoes']."</td>";
        echo '<td align="right">
                                    <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#modalContatos" data-nome="'.$sql['nome'].'" 
                                        data-id_contato="'.$sql['id_contato'].'"
                                        data-telefone="'.$sql['telefone'].'"
                                        data-email="'.$sql['email'].'"
                                        data-idgrupo="'.$sql['idgrupo'].'" 
                                        data-cidade="'.$sql['cidade'].'" 
                                        data-idcidade="'.$sql['idcidade'].'" 
                                        data-favorito="'.$sql['favorito'].'"
                                        data-endereco="'.$sql['endereco'].'"
                                        data-nascimento="'.$sql['nascimento'].'"
                                        data-observacoes="'.$sql['observacoes'].'"
                                        value=""
                                    > Alterar</button>'.
            ' '.
            '<a href="contatos.php?action=excluir&id='.$sql['id_contato'].'">
                                        <button type="button" class="btn btn-outline-danger btn-sm">Excluir</button>
                                    <a/>'.
            '</td>';
        echo '</tr>';
    }



?>
    </tbody>
    </table>
