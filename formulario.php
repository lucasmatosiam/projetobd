<?php

/*CONEXÃO DO BANCO DE DADOS  */
include("conexaobanco.php");
if (!$_con) {
    echo 'Não foi possível a conexão com o banco: ' . mysqli_error($_con);
}

$nome = $_POST['nome'];
$email = $_POST['email'];
$fone = $_POST['fone'];

//Insere registros no banco de dados
$_sql = "insert into formulario ( nome, email, fone) values('$nome', '$email', '$fone')";
$_res = $_con->query($_sql);
if($_res === FALSE){
    echo "Erro" . $_con->error . "<br/>";
} else {
    echo $_con->affected_rows . "Salvo<br/>";
}
$_con->close();
include("index.php")


?>
