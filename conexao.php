<?php

    $connectdb = new mysqli('localhost', 'root', '', 'petshop');

        if (!$connectdb) {
            die("Não foi possível conectar: " .mysqli_error(). "<br>");
        }


?>