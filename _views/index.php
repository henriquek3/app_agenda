<?php require_once '../_controllers/start_sessao.php'; require_once '../_models/crud.php';

/**
 * Created by PhpStorm.
 * User: jean
 * Date: 12/11/16
 * Time: 18:27
 */
?>

<!doctype html>
<html class="no-js" lang="pt_BR">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Agenda</title>
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
        <div class="nav navbar-nav">
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
                <button class="btn btn-outline-success" type="submit">Buscar</button>
                <a href="../_controllers/sair.php"><button type="button" class="btn btn-outline-info">Sair</button></a>
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
                <div class="form-group row">
                    <label for="nome" class="col-xs-2 col-form-label">Nome: </label>
                    <div class="col-xs-5">
                        <input class="form-control" type="text" placeholder="Nome" id="nome" name="nome">
                    </div>
                    <label for="celular" class="col-xs-1 col-form-label">Fone: </label>
                    <div class="col-xs-4">
                        <input class="form-control" type="tel" placeholder="Celular" id="celular" name="celular">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="endereco" class="col-xs-2 col-form-label">Endereço: </label>
                    <div class="col-xs-5">
                        <input class="form-control" type="text" placeholder="Endereço" id="endereco" name="endereco">
                    </div>
                    <label for="email" class="col-xs-1 col-form-label">Email: </label>
                    <div class="col-xs-4">
                        <input class="form-control" type="email" placeholder="seu@email.com" id="email" name="email">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="aniversario" class="col-xs-2 col-form-label">Aniversário: </label>
                    <div class="col-xs-5">
                        <input class="form-control" type="date"  id="aniversario" name="nascimento">
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
                        <select class="form-control" id="grupos" name="grupos">
                            <option selected>selecione</option>
                            <?php
                                foreach (crud::select(select::grupos($id)) as $grupos)
                                {
                                    echo '<option value="'.$grupos['id_grupo'].'">'.$grupos['nome']."</option>";
                                }
                            ?>
                        </select>
                    </div>
                    <label class="col-xs-1 col-form-label" for="cidades">Estado:</label>
                    <div class="col-xs-3">
                        <select class="form-control" id="cidades" name="cidades">
                            <option selected>selecione</option>
                            <?php
                                foreach (crud::select(select::estados()) as $estados)
                                {
                                    echo '<option value="'.$estados['id_cidade'].'">'.$estados['nome']."</option>";
                                }
                            ?>
                        </select>
                    </div>
                    <label class="col-xs-1 col-form-label" for="cidades">Cidade:</label>
                    <div class="col-xs-3">
                        <select class="form-control" id="cidades" name="cidades">
                            <option selected>selecione</option>
                            <?php
                                foreach (crud::select(select::cidades()) as $cidades)
                                {
                                    echo '<option value="'.$cidades['id_cidade'].'">'.$cidades['nome']."</option>";
                                }
                            ?>
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
                    <button type="reset" class="btn btn-outline-info">Limpar</button>
                </div>
            </form>
        </fieldset>
    </div>
    <div class="col-md-2"></div>
</section>

<footer>
    <div class="container">
        <br/>
        <hr/>
        <?php
        echo '<span class="blockquote-footer">'."Usuário:<em> ". $_SESSION['login']."</em>".'</span>';
        ?>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>

;


<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='https://www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-XXXXX-X','auto');ga('send','pageview');
</script>
</body>
</html>
