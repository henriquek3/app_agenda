<?php require_once "../_controllers/start_sessao.php"; require_once '../_models/crud.php';

?>

<!doctype html>
<html class="no-js" lang="pt_BR">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Favoritos</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="icon" href="img/favicon">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>

<body>
    <header>
        <nav class="navbar navbar-light bg-faded" style="background-color: lightsteelblue">
            <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse"
                    data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                    aria-label="Toggle navigation"></button>
            <div class="collapse navbar-toggleable-md" id="navbarResponsive">
                <a class="navbar-brand" href="index.php"><img src="img/favicon" width="30" height="30" class="d-inline-block align-top" alt="Agenda"> Agenda</a>
                <ul class="nav navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="contatos.php">Contatos</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="favoritos.php">Favoritos <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="grupos.php">Grupos</a>
                    </li>
                </ul>
                <!-- Form do NAV -->
                <form class="form-inline float-lg-right" method="post" name="frmPesquisar" action="pesquisar.php">
                    <input class="form-control" type="text" placeholder="Pesquisar" name="contato">
                    <button class="btn btn-success" type="submit">Buscar</button>
                    <a href="../_controllers/sair.php"><button type="button" class="btn btn-info">Sair</button></a>
                </form>
                <!-- Form do NAV FIM-->
            </div>
        </nav>
    </header>

    <br/>

<section class="container">
    <div class="row">
        <table class="table table-hover table-bordered">
            <thead>
            <tr">
            <th>#</th>
            <th>Nome</th>
            <th>Telefone</th>
            <th>E-mail</th>
            <th>Grupo</th>
            <th> </th>
            </tr>
            </thead>
            <tbody>
            <?php require_once 'contatos_modal.php'; /* Caso este modal fique no inicio ele ira dar load nas cidades antes de carregar o html da pagina. */
                foreach( crud::select(select::favoritos($id)) as $sql )
                {
                    echo '<tr>';
                    echo '<th scope="row">'.$sql['indice'].'</th>';
                    echo '<td>'.$sql['nome']."</td>";
                    echo "<td>".$sql['telefone']."</td>";
                    echo "<td>".$sql['email']."</td>";
                    echo "<td>".$sql['grupo']."</td>";
                    echo '<td align="right">
                            <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#modalContatos" data-nome="'.$sql['nome'].'" 
                                data-id_contato="'.$sql['id_contato'].'"
                                data-telefone="'.$sql['telefone'].'"
                                data-email="'.$sql['email'].'"
                                data-idgrupo="'.$sql['idgrupo'].'" 
                                data-cidade="'.$sql['cidade'].'"
                                data-estado="'.$sql['estado'].'" 
                                data-idcidade="'.$sql['idcidade'].'"
                                data-idestado="'.$sql['idestado'].'"
                                data-favorito="'.$sql['favorito'].'"
                                data-endereco="'.$sql['endereco'].'"
                                data-nascimento="'.$sql['nascimento'].'"
                                data-observacoes="'.$sql['observacoes'].'"
                                value=""
                            > Alterar</button>'.
                        ' '.
                        '<a href="../_controllers/ccontatos.php?action=excluir&id='.$sql['id_contato'].'">
                                <button type="button" class="btn btn-outline-danger btn-sm">Excluir</button>
                            <a/>'.
                        '</td>';
                    echo '</tr>';
                }
            ?>
            </tbody>
        </table>
    </div>
</section>

<div>
    <script>window.jQuery || document.write('<script src="js/jquery-2.2.4.min.js"><\/script>')</script>
    <script src="js/plugins.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery3.min.js"></script>
    <script>
        $('#modalContatos').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var nome = button.data('nome') // Extract info from data-* attributes
            var id_contato = button.data('id_contato')
            var telefone = button.data('telefone')
            var email = button.data('email')
            var endereco = button.data('endereco')
            var nascimento = button.data('nascimento')
            var observacoes = button.data('observacoes')
            var idgrupo = button.data('idgrupo')
            var idcidade = button.data('idcidade')
            var idestado = button.data('idestado')
            var selec = $("#opt").val();
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('.modal-title').text('Contato: ' + nome)
            modal.find('#id_contato').val(id_contato)
            modal.find('#nome').val(nome)
            modal.find('#celular').val(telefone)
            modal.find('#email').val(email)
            modal.find('#endereco').val(endereco)
            modal.find('#nascimento').val(nascimento)
            modal.find('#observacoes').val(observacoes)
            modal.find('#grupos').val(idgrupo)
            modal.find('#idcidade').val(idcidade)
            modal.find('#idestado').val(idestado)
            //$("#grupos").val(selec);
        })
    </script>
</div>
</body>
</html>