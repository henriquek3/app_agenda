<?php
require_once '../_models/select.php';
require_once '../_models/crud.php';
require "../_models/conexao.php";

echo select::gridGrupos(10);
echo "<br/>";
echo "<br/>";
print_r( crud::select(select::gridGrupos(10)));
echo "<br/>";
echo "<br/>";

/* while ($arr = crud::select(select::gridGrupos(10))){
    echo $arr['nome'];
    echo "<br/>";
} */
//$arr = crud::select(select::gridGrupos(10));

$query = new crud();
$teste = $query->query('select * from grupos');
echo $teste;

echo "<br/>";
echo "<br/>";


$sqlConsGrupos = 'select * from grupos where id_usuario=10';
$resultGrupos = pg_query($conn, $sqlConsGrupos);
//$gridGrupos = pg_fetch_assoc($resultGrupos);
//print_r($gridGrupos);

echo "<br/>";

while ($row = $arr){
    echo "Teste -> ".$row['nome'];
    echo "<br/>";
}

