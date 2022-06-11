<?php

session_start();

    if ((!isset ($_SESSION['user']) == true) and (!isset ($_SESSION['senha']) == true)) {
        unset($_SESSION['user']);
        unset($_SESSION['senha']);

        header('location: index.php');
    }

    $logado = $_SESSION['user'];
    
?>