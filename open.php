<?php

session_start();

$login = $_POST['user'];
$senha = $_POST['senha'];

    include('conexao.php');

        $sql = mysqli_query($connectdb, "SELECT * FROM tlogin WHERE user = '$login' AND senha = '$senha'");

            if(mysqli_num_rows($sql) > 0) {
                $_SESSION['user'] = $login;
                $_SESSION['senha'] = $senha;

               header('location: site.php');
               

            } else {

                unset($_SESSION['user']);
                unset($_SESSION['senha']);
               // header('location: index.php');
               echo "nao";
            }


?>