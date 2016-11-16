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
    <link rel="icon" href="_views/img/favicon">
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="_views/css/normalize.css">
    <link rel="stylesheet" href="_views/css/main.css">
    <link rel="stylesheet" href="_views/css/bootstrap.min.css">
    <script src="_views/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
<header>
    <nav class="navbar navbar-light bg-faded" style="background-color: lightsteelblue">
        <div class="nav navbar-nav">
            <a class="navbar-brand" href="#"><img src="_views/img/favicon" width="30" height="30" class="d-inline-block align-top" alt="Agenda"> Agenda</a>
            <ul class="nav navbar-nav">
            </ul>
            <form class="form-inline float-lg-right">
                <a href="_views/usuario.php" class="btn btn-primary btn-md" role="button" aria-pressed="true">Cadastrar</a>
            </form>
        </div>
    </nav>
</header>
<br/>
<section class="container">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <fieldset class="form-control">
            <form class="form-group" name="frmLogin" method="post" action="_controllers/login_usuario.php">
                <div class="form-group">
                    <label for="login" class="col-form-label">Usuário: </label>
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="login" id="login" name="login">
                    </div>
                </div>
                <div class="form-group">
                    <label for="senha" class="col-form-label">Senha: </label>
                    <div class="form-group">
                        <input class="form-control" type="password" placeholder="password" id="senha" name="senha">
                    </div>
                </div>
                <div class="form-group" align="right">
                    <button type="submit" class="btn btn-outline-success">Conectar</button>
                </div>
            </form>
        </fieldset>
    </div>
    <div class="col-md-4"></div>
</section>

<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script>window.jQuery || document.write('<script src="_views/js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
<script src="_views/js/plugins.js"></script>
<script src="_views/js/main.js"></script>
</body>
</html>