<?php
/**
 * Created by PhpStorm.
 * User: jean
 * Date: 15/11/16
 * Time: 19:02
 */
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
</head>
<body>
<div class="bd-example">
    <div class="modal fade" id="myModalGrupo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Erro na Inclusão</h4>
                </div>
                <div class="modal-body col-form-label">
                    <div class="col-form-label">
                        <p>O nome do <b>Grupo</b> não pode estar em branco</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="bd-example">
    <div class="modal fade" id="modalGrupos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="exampleModalLabel">New message</h4>
                </div>
                <div class="modal-body">
                    <form name="frmModal" method="post" action="../_controllers/cgrupos.php">
                        <div class="form-group row">
                            <div class="col-md-2 col-form-label">
                                <label for="recipient-name" class="form-control-label">Grupo:</label>
                            </div>
                            <div class="col-md-5">
                                <input type="text" class="form-control" id="recipient-name" name="nomegrupo">
                            </div>
                            <textarea class="sr-only" id="message-text" name="grupoid"></textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Sair</button>
                            <button type="submit" class="btn btn-primary">Gravar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>