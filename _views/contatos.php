<?php require "../_controllers/start_sessao.php";

/*
    //Obtem parametros pelo GET para saber qual cmd executar
    if (isset($_GET['action'])){
        $idContato = $_GET['id'];
        $sqlDel = 'delete from contatos where id_contato ='.$idContato;
        $resultDel = executa($sqlDel);
    }

    $sqlContatos = 'select 		ct.id_contato,
                                ct.nome,
                                ct.telefone,
                                ct.email,
                                gp.nome grupo,
                                gp.id_grupo idgrupo,
                                cd.nome cidade,
                                cd.id_cidade idcidade,
                                ct.favorito,
                                ct.endereco,
                                ct.nascimento,
                                ct.observacoes
                    from 		contatos	ct,
                                grupos		gp,
                                cidades		cd
                    where       gp.id_grupo = ct.id_grupo
                    and         cd.id_cidade = ct.id_cidade
                    AND         ct.id_usuario ='.$id;
    $resultContatos = executaS($sqlContatos);

    $sqlselectGrupos='select * from grupos where id_usuario ='.$id;
    $resultSelectGrupos = executaS($sqlselectGrupos);
    $testeGrupo = executaS($sqlselectGrupos);
    $sqlCidades='select * from cidades';
    $resultCidades = executaS($sqlCidades);

*/
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
        <!-- <script src="js/vendor/modernizr-2.8.3.min.js"></script> -->
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
                        <a href="sair.php"><button type="button" class="btn btn-outline-info">Sair</button></a>
                    </form>
                </div>
            </nav>
        </header>

        <br/>

        <article class="container">
            <div class="row" style="font-size: 12px">
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
                    <?php
                        while($sql = pg_fetch_assoc($resultContatos))
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
                            echo '<td align="right">
                                    <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#modalContatos" data-nome="'.$sql['nome'].'" 
                                        data-id_contato="'.$sql['id_contato'].'"
                                        data-telefone="'.$sql['telefone'].'"
                                        data-email="'.$sql['email'].'"
                                        data-idgrupo="'.$sql['idgrupo'].'" 
                                        data-cidade="'.$sql['cidade'].'" 
                                        data-idcidade="'.$sql['idcidade'].'" 
                                        data-favorito="'.$sql['favorito'].'"
                                        data-endereco="'.$sql['endereco'].'"
                                        data-nascimento="'.$sql['nascimento'].'"
                                        data-observacoes="'.$sql['observacoes'].'"
                                        value=""
                                    > Alterar</button>'.
                                    ' '.
                                    '<a href="contatos.php?action=excluir&id='.$sql['id_contato'].'">
                                        <button type="button" class="btn btn-outline-danger btn-sm">Excluir</button>
                                    <a/>'.
                            '</td>';
                            echo '</tr>';
                        }
                    ?>
                    </tbody>
                </table>
            </div>

            <!--[Modal}-->
            <div class="bd-example">
                <div class="modal fade" id="modalContatos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <h4 class="modal-title" id="exampleModalLabel">New message</h4>
                            </div>

                            <div class="modal-body">

                                <form name="frmModal" method="post" action="update_contatos.php">

                                    <div class="form-group row">
                                        <div class="form-group">
                                            <input class="sr-only" id="id_contato" name="id_contato">
                                        </div>
                                        <label for="nome" class="col-sm-2 col-form-label">Nome: </label>
                                        <div class="col-sm-4">
                                            <input name="nome" class="form-control" type="text" id="nome">
                                        </div>
                                        <label for="celular" class="col-sm-2 col-form-label">Telefone: </label>
                                        <div class="col-sm-4">
                                            <input class="form-control" type="tel" id="celular" name="celular">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email" class="col-sm-2 col-form-label">Email: </label>
                                        <div class="col-sm-4">
                                            <input class="form-control" type="email" id="email" name="email">
                                        </div>
                                        <label for="endereco" class="col-sm-2 col-form-label">Endereço: </label>
                                        <div class="col-sm-4">
                                            <input class="form-control" type="text" id="endereco" name="endereco">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="aniversario" class="col-sm-2 col-form-label">Aniversário: </label>
                                        <div class="col-sm-4">
                                            <input class="form-control" type="date" id="nascimento" name="nascimento">
                                        </div>
                                        <label class="col-sm-2">Favorito: </label>
                                        <div class="col-sm-4">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" value="" type="checkbox"
                                                           name="favorito" id="favorito">
                                                    <a href="#" class="btn btn-primary btn-sm disabled" role="button" aria-disabled="true"> Ativo </a>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label" for="grupos">Grupos:   </label>
                                        <div class="col-sm-4">
                                            <select class="form-control" id="grupos" name="grupos">
                                                <?php
                                                    while($select = pg_fetch_assoc($resultSelectGrupos))
                                                    {
                                                        echo '<option value="'.$select['id_grupo'].'">'.$select['nome']."</option>";
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                        <label class="col-sm-2 col-form-label" for="idcidade">Cidade:   </label>
                                        <div class="col-sm-4">
                                            <select class="form-control" id="idcidade" name="idcidade">
                                                <?php
                                                    while($cidades = pg_fetch_assoc($resultCidades))
                                                    {
                                                        echo '<option value="'.$cidades['id_cidade'].'">'.$cidades['nome']."</option>";
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="observacoes" class="col-sm-2 col-form-label">Observações: </label>
                                        <div class="col-sm-6">
                                            <textarea class="form-control" id="observacoes" rows="2"
                                                      name="observacoes"></textarea>
                                        </div>
                                    </div>
                                    <!--[ Form Index End ]-->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                        <button type="submit" class="btn btn-primary">Gravar</button>
                                    </div>
                                </form>

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
            <script>
                $('#modalContatos').on('show.bs.modal', function (event) {
                    var button = $(event.relatedTarget) // Button that triggered the modal
                    var nome = button.data('nome') // Extract info from data-* attributes
                    var id_contato = button.data('id_contato')
                    var telefone = button.data('telefone')
                    var email = button.data('email')
                    var endereco = button.data('endereco')
                    var nascimento = button.data('nascimento')
                    var observacoes = button.data('observacoes')
                    var idgrupo = button.data('idgrupo')
                    var idcidade = button.data('idcidade')
                    var selec = $("#opt").val();
                    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
                    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
                    var modal = $(this)
                    modal.find('.modal-title').text('Contato: ' + nome)
                    modal.find('#id_contato').val(id_contato)
                    modal.find('#nome').val(nome)
                    modal.find('#celular').val(telefone)
                    modal.find('#email').val(email)
                    modal.find('#endereco').val(endereco)
                    modal.find('#nascimento').val(nascimento)
                    modal.find('#observacoes').val(observacoes)
                    modal.find('#grupos').val(idgrupo)
                    modal.find('#idcidade').val(idcidade)
                    //$("#grupos").val(selec);
                })


            </script>
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