<?php require "../_controllers/start_sessao.php";

if (file_exists("executa.php")){
        include ("executa.php");
    }
    if (!file_exists("executa.php")){
        echo "Arquivo executa.php não existe";
        exit;
    }

    $contato = $_POST['contato'];

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
        <article class="container-fluid">
            <div class="row">
                <table class="table table-hover table-bordered">
                    <thead>
                    <tr">
                        <th>#</th>
                        <th>Nome</th>
                        <th>telefone</th>
                        <th>email</th>
                        <th>Grupo</th>
                        <th>Cidade</th>
                        <th>favorito</th>
                        <th>endereco</th>
                        <th>nascimento</th>
                        <th>observacoes</th>
                        <th> </th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php

                    $sqlG='select * from 

                            (select 		ct.id_contato,
                                        ct.nome,
                                        ct.telefone,
                                        ct.email,
                                        gp.nome grupo,
                                        cd.nome cidade,
                                        ct.favorito,
                                        ct.endereco,
                                        ct.nascimento,
                                        ct.observacoes
                            from 		contatos	ct,
                                        grupos		gp,
                                        cidades		cd
                            where       gp.id_grupo = ct.id_grupo
                            and         cd.id_cidade = ct.id_cidade
                            )    a where a.nome LIKE \'%'.$contato.'%\'
                            and         ct.id_usuario ='.$id;

                    $resultadoG = executaS($sqlG);

                    while($sql = pg_fetch_assoc($resultadoG))
                    {
                        echo '<tr>';
                        echo '<th scope="row">'.$sql['id_contato'].'</th>';
                        echo '<td>'.$sql['nome']."</td>";
                        echo "<td>".$sql['telefone']."</td>";
                        echo "<td>".$sql['email']."</td>";
                        echo "<td>".$sql['grupo']."</td>";
                        echo "<td>".$sql['cidade']."</td>";
                        echo "<td>".$sql['favorito']."</td>";
                        echo "<td>".$sql['endereco']."</td>";
                        echo "<td>".$sql['nascimento']."</td>";
                        echo "<td>".$sql['observacoes']."</td>";
                        echo "<td>"."<button type=\"button\" class=\"btn btn-outline-primary btn-sm\" data-toggle=\"modal\" data-target=\"#exampleModal\" data-whatever=\"alterar\">Editar</button>".
                            ' '.'<button type="button" class="btn btn-outline-danger btn-sm">Excluir</button>'."</td>";
                        echo '</tr>';
                    }
                    ?>
                    </tbody>
                </table>
            </div>
            <!--[Modal}-->
            <div class="bd-example">
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <h4 class="modal-title" id="exampleModalLabel">Grupos</h4>
                            </div>
                            <div class="modal-body">

                                <form name="frmGrupos" method="post" action="grupos.php">
                                    <div class="form-group row">
                                        <label for="grupos" class="col-xs-2 col-form-label">Nome: </label>
                                        <div class="col-xs-4">
                                            <input class="form-control" type="text" value="<?php
                                            $sqlGr='select * from grupos order by id_grupo desc limit 1';
                                            $resultadoG = executaS($sqlGr);
                                            while($sql = pg_fetch_assoc($resultadoG))
                                            {
                                                echo $sql['nome'];
                                            }
                                            ?>" id="grupos" name="grupos">
                                        </div>
                                    </div>
                                </form>

                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-outline-primary">Gravar</button>
                                <button type="submit" class="btn btn-secondary" data-dismiss="modal">Sair</button>
                            </div>
                        </div>
                    </div>
                </div>
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