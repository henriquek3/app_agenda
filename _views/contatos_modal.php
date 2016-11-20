<?php
/**
 * Created by PhpStorm.
 * User: jean
 * Date: 15/11/16
 * Time: 20:12
 */
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
</head>
<body>
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
                    <form name="frmModal" method="post" action="../_controllers/update_contatos.php">
                        <div class="form-group row">
                            <div class="form-group">
                                <input class="sr-only" id="id_contato" name="id_contato">
                            </div>
                            <label for="nome" class="col-sm-2 col-form-label">Nome: </label>
                            <div class="col-sm-4">
                                <input name="nome" class="form-control" type="text" id="nome" title="Preencha o nome do contato" required>
                            </div>
                            <label for="celular" class="col-sm-2 col-form-label">Telefone: </label>
                            <div class="col-sm-4">
                                <input class="form-control" type="tel" id="celular" name="celular" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-sm-2 col-form-label">Email: </label>
                            <div class="col-sm-4">
                                <input class="form-control" type="email" id="email" name="email" required>
                            </div>
                            <label for="endereco" class="col-sm-2 col-form-label">Endereço: </label>
                            <div class="col-sm-4">
                                <input class="form-control" type="text" id="endereco" name="endereco" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="aniversario" class="col-sm-2 col-form-label">Aniversário: </label>
                            <div class="col-sm-4">
                                <input class="form-control" type="date" id="nascimento" name="nascimento" required>
                            </div>
                            <label class="col-sm-2">Favorito: </label>
                            <div class="col-sm-4">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox"
                                               name="favorito" id="favorito">
                                        <a href="#" class="btn btn-primary btn-sm disabled" role="button" aria-disabled="true"> Ativo </a>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="grupos">Grupos:   </label>
                            <div class="col-sm-4">
                                <select class="form-control" id="grupos" name="grupos" required>
                                    <?php
                                        foreach (crud::select(select::grupos($id)) as $grupo)
                                        {
                                            echo '<option value="'.$grupo['id_grupo'].'">'.$grupo['nome']."</option>";
                                        }
                                    ?>
                                </select>
                            </div>
                            <label class="col-sm-2 col-form-label" for="idestado">Estado:   </label>
                            <div class="col-sm-4">
                                <select class="form-control" id="idestado" name="idestado" required>
                                    <?php
                                        foreach (crud::select(select::estados()) as $estados)
                                        {
                                            echo '<option value="'.$estados['id_estado'].'">'.$estados['nome']."</option>";
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="observacoes" class="col-sm-2 col-form-label">Observações: </label>
                            <div class="col-sm-4">
                                    <textarea class="form-control" id="observacoes" rows="4" name="observacoes"></textarea>
                            </div>
                            <label class="col-sm-2 col-form-label" for="idcidade">Cidade:</label>
                            <div class="col-sm-4">
                                <select class="form-control" id="idcidade" name="idcidade" required>
                                    <?php
                                        foreach (crud::select(select::cidades()) as $cidades)
                                        {
                                            echo '<option value="'.$cidades['id_cidade'].'">'.$cidades['nome']."</option>";
                                        }
                                    ?>
                                </select>
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
</body>
</html>