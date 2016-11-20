<?php require_once '../_controllers/start_sessao.php'; require_once '../_models/crud.php';
?>

<!doctype html>
<html class="no-js" lang="pt_BR">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Contatos</title>
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
                <li class="nav-item active">
                    <a class="nav-link" href="contatos.php">Contatos <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="favoritos.php">Favoritos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="grupos.php">Grupos</a>
                </li>
            </ul>
            <form class="form-inline float-lg-right" method="post" name="frmPesquisar" action="pesquisar.php">
                <input class="form-control" type="text" placeholder="Pesquisar" name="contato">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
                <a href="../_controllers/sair.php"><button type="button" class="btn btn-outline-info">Sair</button></a>
            </form>
        </div>
    </nav>
</header>
<section class="container-fluid">
    <iframe src="contatos_iframe.php" class="col-xs-12" height="600" frameborder="no"></iframe>
</section>



<div>
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</div>
</body>
</html>