<?php
/**
 * Created by PhpStorm.
 * User: jean
 * Date: 12/11/16
 * Time: 17:29
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
                <a class="navbar-brand" href="#"><img src="img/favicon" width="30" height="30" class="d-inline-block align-top" alt="Agenda"> Agenda</a>
                <ul class="nav navbar-nav">
                </ul>
            </div>
        </nav>
    </header>
<br/>
<section class="container">
    <div class="col-md-3"></div>

    <div class="col-md-6">
        <div class="jumbotron">
            <h1 class="display-3">Usuário Desconhecido!</h1>
            <hr class="my-2">
            <p>Verifique o login utilizado. Caso ainda não tenha, clique no botão abaixo e cadastre-se.</p>
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="../login.php" role="button">Tentar Novamente</a>
                <a class="btn btn-primary btn-lg" href="../login.php" role="button">Quero me Cadastrar</a>
            </p>
        </div>
    </div>

    <div class="col-md-3"></div>
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

