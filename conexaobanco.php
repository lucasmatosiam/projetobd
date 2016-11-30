<?php

    $_con = mysqli_connect('localhost','root','','projeto');
        if (!$_con) {
            echo 'Não foi possível a conexão com o banco: ' . mysqli_error($_con);
        } else {
           /* echo 'Conexão ok<br/>';*/
        }


?>
