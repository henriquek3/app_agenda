<?php

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
                    <a class="navbar-brand" href="#"><img src="img/favicon" width="30" height="30" class="d-inline-block align-top" alt="Agenda"> Agenda</a>
                    <ul class="nav navbar-nav">
                    </ul>
                    <form class="form-inline float-lg-right">
                        <a href="../_controllers/sair.php"><button type="button" class="btn btn-outline-info">Sair</button></a>
                    </form>
                </div>
            </nav>
        </header>
        <br/>
        <section class="container">
            <form name="frmUsuarios" method="post" action="../_controllers/cusuarios.php">
                <div class="form-group row">
                    <label for="nome" class="col-xs-2 col-form-label">Nome: </label>
                    <div class="col-xs-4">
                        <input class="form-control" type="text" placeholder="Nome" id="nome" name="nome">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="login" class="col-xs-2 col-form-label">Usuário: </label>
                    <div class="col-xs-4">
                        <input class="form-control" type="text" placeholder="login" id="login" name="login">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="senha" class="col-xs-2 col-form-label">Senha: </label>
                    <div class="col-xs-4">
                        <input class="form-control" type="password" placeholder="password" id="senha" name="senha">
                    </div>
                </div>
                <div class="col-xs-6" align="right">
                    <button type="submit" class="btn btn-outline-primary">Incluir</button>
                    <button type="reset" class="btn btn-outline-info">Limpar</button>
                </div>
            </form>
        </section>

        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

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
