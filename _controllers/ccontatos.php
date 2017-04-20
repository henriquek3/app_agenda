<?php require_once '../_controllers/start_sessao.php'; require_once '../_models/crud.php';

/**
 * Created by PhpStorm.
 * User: Jean Freitas
 * Date: 29/10/2016
 * Time: 23:34
 */

$id_estado = $_REQUEST['id_estado']; //Recebe o idEstado por request
foreach (crud::select(select::cidadesIdEstado($id_estado)) as $row)
{
    $selectCidades[] = array( //Transforma o $row em outro array pegando somente os campos necessarios
        'id'	=> $row['id_cidade'],
        'nome' => utf8_encode($row['nome']),
    );
}
echo(json_encode($selectCidades)); //Exibe o resultado do _request para que possa ser capturado pela pagina que enviou

if (isset($_GET['action'])) //Obtem parametros pelo GET para saber qual cmd executar
{
    $idContato = $_GET['id'];
    crud::deleta(delete::contatos($idContato));
    header("location:/_views/contatos.php");
    exit;
}

if (isset($_POST['form_name']))
{
    if ($_POST['form_name'] == 'frmCadastro'){ //quando colocado sem o isset, da erro no algoritmo JSON
        $nome = $_POST['nome'];
        $celular = $_POST['celular'];
        $email = $_POST['email'];
        $endereco = $_POST['endereco'];
        $nascimento = $_POST['nascimento'];
        $favorito = $_POST['favorito'];
        $grupos = $_POST['grupos'];
        $cidade = $_POST['cidades'];
        $observacoes = $_POST['observacoes'];

        $resultado = crud::insert(insert::contatos($nome,$celular,$email,$endereco,$nascimento,$favorito,$grupos,$observacoes,$id,$cidade));

        if ($resultado) {
            header("location:/_views/contatos.php");
            exit;
        }
    }
}