<?php
include ("conexaobanco.php"); //faz a conexão ao banco de dados

$_sql = "select * from localmapa";
    $_res = $_con->query($_sql);
    if($_res === FALSE){
        echo "Erro na consulta do banco.".$_con->error."<br/>";
    } else{

       /* echo "Banco lido com sucesso <br/>";

        $_nr = $_res->num_rows;
        echo "A consulta retornou ".(int) $_nr . " registros <br/>";*/
    }

    $pontos = array();

    while($_localidades = $_res->fetch_assoc()){



        array_push($pontos, $_localidades);
    }
$_con->close();
?>
