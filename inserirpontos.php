<?php
include("conexaobanco.php");
if (!$_con) {
    echo 'Não foi possível a conexão com o banco: ' . mysqli_error($_con);
}

$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];


$_sql = "insert into localmapa ( nome, descricao, latitude, longitude) values('$nome', '$descricao', '$latitude', '$longitude')";
$_res = $_con->query($_sql);
if($_res === FALSE){
    echo "Erro na inclusão dos registros..." . $_con->error . "<br/>";
} else {
    echo $_con->affected_rows . " Registros incluidos com sucesso<br/>";
}
$_con->close();
include("index.php")


?>
