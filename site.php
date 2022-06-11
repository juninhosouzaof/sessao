<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SITE - BEM VINDO</title>
</head>
<body>

    <header>
        <h1>echo "Site - Bem vindo $logado!"</h1>
    </header>
<hr>
    <?php
    include ('logado.php');
        echo "Site - Bem vindo $logado!"
    ?>
    <a href="logout.php">Logout</a>
</body>
</html>