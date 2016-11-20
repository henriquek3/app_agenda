<!doctype html>
<html class="no-js" lang="pt_BR">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Agenda</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="_views/img/favicon">
    <!-- Place favicon.ico in the root directory -->
    <link rel="stylesheet" href="_views/css/normalize.css">
    <link rel="stylesheet" href="_views/css/main.css">
    <link rel="stylesheet" href="_views/css/bootstrap.min.css">
    <link rel='stylesheet' href='_views/izimodal/css/iziModal.min.css'>
    <link rel="stylesheet" href="_views/izimodal/css/styleindex.css">
    <script src="_views/js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>
<nav class="navbar navbar-fixed-top navbar-light">
    <div class="form-inline float-xl-right">
    </div>
</nav>

<br/><br/>
<section class="container">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <div class="jumbotron">
            <h1 class="display-1" align="center">[A]genda</h1><br/>
            <hr class="my-2">
            <video class="container" autoplay loop poster="_views/img/gif/1415808038-animated-illustration-by-jing-zhang-and-james-wignall-16.gif" >
                <source src="_views/img" type="video/mp4">
            </video>
            <hr class="my-2"><br/>
            <button class="btn btn-primary btn-lg btn-block trigger-custom">Conectar</button>
        </div>
    </div>
    <div class="col-md-3"></div>
</section>


<div id="modal-custom" class="iziModal" data-iziModal-group="grupo1">
    <button data-iziModal-close class="icon-close">x</button>
    <header>
        <a href="" class="active" id="signin">Entrar</a>
        <a href="" >Cadastrar</a>
    </header>
    <section>
        <form name="frmLogin" method="post" action="_controllers/login_usuario.php">
            <input type="text" placeholder="Username" id="login" name="login" required="required"><!--[ Adicionado os campos required ]-->
            <input type="password" placeholder="Password" id="senha" name="senha" required="required">
            <footer>
                <button data-iziModal-close>Cancel</button>
                <button type="submit" class="submit">Log in</button>
            </footer>
        </form>
    </section>
    <section class="hide">
        <form class="form-group" name="frmUsuarios" method="post" action="_controllers/cusuarios.php">>
            <input type="text" placeholder="Nome" id="nome" name="nome" required="required">
            <input type="text" placeholder="Username" id="login" name="login" required="required">
            <input type="password" placeholder="Password" id="senha" name="senha" required="required">
            <label for="check"><input type="checkbox" name="checkbox" id="check" value="1" required="required"> Eu Aceito os <a href="https://github.com/henriquek3/app_agenda" target="_parent">Termos</a>.</label>
            <footer>
                <button data-iziModal-close>Cancel</button>
                <button class="submit">Create Account</button>
            </footer>
        </form>
    </section>
</div>


<script src='_views/izimodal/js/jquery-2.2.4.min.js'></script>
<script src='_views/izimodal/js/iziModal.min.js'></script>
<script src="_views/izimodal/js/index.js"></script>

</body>
</html>