<?php require "../_controllers/start_sessao.php"; require_once '../_models/crud.php';


    if (!empty($_POST['contato'])){
        $contato = $_POST['contato'];
    }
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
                        <li class="nav-item">
                            <a class="nav-link" href="contatos_iframe.php">Contatos</a>
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
        <article class="container-fluid">
            <div class="row">
                <table class="table table-hover table-bordered">
                    <thead>
                    <tr">
                    <th>#</th>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>E-mail</th>
                    <th>Grupo</th>
                    <th>Cidade</th>
                    <th>Favorito</th>
                    <th>Endereco</th>
                    <th>Nascimento</th>
                    <th>Observacoes</th>
                    <th> </th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php require_once 'contatos_modal.php'; /* Caso este modal fique no inicio ele ira dar load nas cidades antes de carregar o html da pagina. */
                    foreach( crud::select(select::pesquisarcontatos($contato,$id)) as $sql )
                    {
                        echo '<tr>';
                        echo '<th scope="row">'.$sql['indice'].'</th>';
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

        </article>
        <div>
        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        </div>
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