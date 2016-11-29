<?php require_once '../_controllers/start_sessao.php'; require_once '../_models/crud.php';
 require_once 'view.php';

    $modal ="";
    if (isset($_GET['action'])){
        $modal = 'error';
    }

?>
<!doctype html>
<html class="no-js" lang="pt_BR">
<?php
    view::header();
?>
<body>

<header>
    <nav class="navbar navbar-light bg-faded" style="background-color: lightsteelblue">
        <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"></button>
        <div class="collapse navbar-toggleable-md" id="navbarResponsive">
            <a class="navbar-brand" href="index.php"><img src="img/favicon" width="30" height="30" class="d-inline-block align-top" alt="Agenda"> Agenda</a>
            <ul class="nav navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="contatos.php">Contatos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="favoritos.php">Favoritos</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="grupos.php">Grupos <span class="sr-only">(current)</span></a>
                </li>
            </ul><!-- Form do NAV -->
            <form class="form-inline float-lg-right" method="post" name="frmPesquisar" action="pesquisar.php">
                <input class="form-control" type="text" placeholder="Pesquisar" name="contato">
                <button class="btn btn-success" type="submit">Buscar</button>
                <a href="../_controllers/sair.php"><button type="button" class="btn btn-info">Sair</button></a>
            </form><!-- Form do NAV FIM -->
        </div>
    </nav>
</header>

<br/><br/><br/>
<div class="col-xs-6">
    <h2>Cadastro de Grupos</h2>
    <fieldset class="form-control">
        <form name="frmGrupos" method="post" action="../_controllers/cgrupos.php">
            <div class="form-group row">
                <label for="grupos" class="col-xs-2 col-form-label">Nome: </label>
                <div class="col-xs-10">
                    <input class="form-control" type="text" placeholder="Grupos"
                           id="grupos" name="grupos">
                </div>
            </div>
            <div class="col-xs-12" align="right">
                <button type="submit" class="btn btn-outline-primary">Incluir</button>
                <button type="reset" class="btn btn-info">Limpar</button>
            </div>
        </form>
    </fieldset>
</div>

<section class="container">
    <div class="col-xs-6"></div>
    <div class="col-xs-6">
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
                    //while ($gridGrupo = $result->fetch()){
                    foreach (crud::select(select::grupos($id)) as $gridGrupo ){
                        echo '<tr>';
                        echo '<th scope="row">'.$gridGrupo['indice'].'</th>';
                        echo '<td>'.$gridGrupo['nome'].'</td>';
                        echo '<td>'.' '.'</td>';
                        echo '<td align="right">
                        <button type="button" class="btn btn-outline-primary btn-sm" 
                        data-toggle="modal" data-target="#modalGrupos" 
                        data-idgrupo="'.$gridGrupo['id_grupo'].'" data-nome="'.$gridGrupo['nome'].'">Alterar</button>'.
                            ' '.
                            '<a href="../_controllers/cgrupos.php?action=excluir&id='.$gridGrupo['id_grupo'].'">
                            <button type="button" class="btn btn-outline-danger btn-sm">Excluir</button><a/>'.'</td>';
                        echo '</tr>';
                    }
                ?>
            </tbody>
        </table>
    </div>
<?php include_once '../_views/grupos_modal.php'; ?>
</section>


<footer class="footer">
<div class="container">
<span class="text-muted">Usuário: <?php echo $_SESSION['login']; ?> </span>
</div>
</footer>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
    $('#modalGrupos').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var nome = button.data('nome') // Extract info from data-* attributes
        var idgrupo = button.data('idgrupo')
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('.modal-title').text('Alterar grupo: ' + nome)
        modal.find('#nome').val(nome)
        modal.find('#idgrupo').val(idgrupo)
    })
</script>

<?php
if ($modal == 'error'){
    ?>
    <script>
        $(document).ready(function () {
            $('#myModalGrupo').modal('show');
        });
    </script>
    <?php
}

?>
</body>
</html>