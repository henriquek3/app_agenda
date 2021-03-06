<?php require_once '../_controllers/start_sessao.php';
require_once '../_models/crud.php';
require_once 'view.php';

/**
 * Created by PhpStorm.
 * User: jean
 * Date: 12/11/16
 * Time: 18:27
 */
?>

<!doctype html>
<html lang="pt-br">
<head>
<?php  $style = '<style type="text/css">
                    .carregando{
                    color:#ff0000;
                    display:none;
                }
                </style>';
view::header($style) ?>
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
            <!-- Form do NAV FIM -->
        </div>
    </nav>
</header>
<br/>
<br/>
<section class="container">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <h2>Cadastro de Contatos</h2>
        <fieldset class="form-control">
            <form name="frmCadastro" method="post" action="../_controllers/ccontatos.php">
                <input type="hidden" name="form_name" value="frmCadastro"/>
                <div class="form-group row">
                    <label for="nome" class="col-xs-2 col-form-label">Nome: </label>
                    <div class="col-xs-5">
                        <input class="form-control" type="text" placeholder="Nome" id="nome" name="nome" required="required">
                    </div>
                    <label for="celular" class="col-xs-1 col-form-label">Fone: </label>
                    <div class="col-xs-4">
                        <input class="form-control" type="tel" placeholder="Celular" id="celular" name="celular" required="required">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="endereco" class="col-xs-2 col-form-label">Endereço: </label>
                    <div class="col-xs-5">
                        <input class="form-control" type="text" placeholder="Endereço" id="endereco" name="endereco" required="required">
                    </div>
                    <label for="email" class="col-xs-1 col-form-label">Email: </label>
                    <div class="col-xs-4">
                        <input class="form-control" type="email" placeholder="seu@email.com" id="email" name="email" required="required">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="aniversario" class="col-xs-2 col-form-label">Aniversário: </label>
                    <div class="col-xs-5">
                        <input class="form-control" type="date"  id="aniversario" name="nascimento" required="required">
                    </div>
                    <label class="col-sm-2 col-form-label">Favorito: </label>
                    <div class="col-xs-1">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="favorito">
                                <a href="#" class="btn btn-primary btn-sm disabled" role="button" aria-disabled="true"> Ativo </a>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-xs-1 col-form-label" for="grupos">Grupo:</label>
                    <div class="col-xs-3">
                        <select class="form-control" id="grupos" name="grupos" required="required">
                            <option selected>selecione</option>
                            <?php
                                foreach (crud::select(select::grupos($id)) as $grupos)
                                {
                                    echo '<option value="'.$grupos['id_grupo'].'">'.$grupos['nome']."</option>";
                                }
                            ?>
                        </select>
                    </div>
                    <label class="col-xs-1 col-form-label" for="estados">Estado:</label>
                    <div class="col-xs-3">
                        <select class="form-control" id="estados" name="estados" required="required">
                            <option selected>selecione</option>
                            <?php
                                foreach (crud::select(select::estados()) as $estados)
                                {
                                    echo '<option value="'.$estados['id_estado'].'">'.utf8_encode($estados['nome'])."</option>";
                                }
                            ?>
                        </select>
                    </div>
                    <label class="col-xs-1 col-form-label" for="cidades">Cidade:</label>
                    <div class="col-xs-3">
                        <span class="carregando">Aguarde, carregando...</span>
                        <select class="form-control" id="cidades" name="cidades" required="required">
                            <option value="">selecione</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleTextarea" class="col-xs-2 col-form-label">Observações: </label>
                    <div class="col-xs-10">
                        <textarea class="form-control" id="exampleTextarea" rows="3" placeholder="O conheço de algum lugar.." name="observacoes"></textarea>
                    </div>
                </div>
                <div class="col-xs-12" align="right">
                    <button type="submit" class="btn btn-outline-primary">Incluir</button>
                    <button type="reset" class="btn btn-info">Limpar</button>
                </div>
            </form>
        </fieldset>
    </div>
    <div class="col-md-2"></div>
</section>

<footer class="footer">
    <div class="container">
        <span class="text-muted">Usuário: <?php echo $_SESSION['login']; ?> </span>
    </div>
</footer>

<script>window.jQuery || document.write('<script src="js/jquery-2.2.4.min.js"><\/script>')</script>
<script src="js/plugins.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery3.min.js"></script>
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
                $.getJSON('../_controllers/ccontatos.php?search=',{id_estado: $(this).val(), ajax: 'true'}, function(j){
                    var options = '<option value="">- Escolha -</option>';
                    for (var i = 0; i < j.length; i++) {
                        options += '<option value="' + j[i].id + '">' + j[i].nome + '</option>';
                    }
                    $('#cidades').html(options).show();
                    $('.carregando').hide();
                });
            } else {
                $('#cidades').html('<option value="">– Escolha –</option>');
            }
        });
    });
</script>

</body>
</html>
