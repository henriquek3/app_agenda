<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="../_views/bs3/css/bootstrap.css" rel="stylesheet">

</head>
<body>
<h1>Hello, world!</h1>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Necessário Efetuar o pagamento</h4>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Pagar Agora</button>
                </div>
            </div>
        </div>
    </div>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../_views/js/jquery3.min.js"></script>
<script src="../_views/bs3/js/bootstrap.min.js"></script>
<?php
    $situacao_usuario = 'pendente';
    if ($situacao_usuario == 'pendente'){ ?>
        <script>
            $(document).ready(function () {
                $('#myModal').modal('show');
            )};
        </script><?php
    } ?>
</body>
</html>
