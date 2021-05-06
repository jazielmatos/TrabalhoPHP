<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>

<?php
    $login = $_REQUEST['login'];
    $senha = $_REQUEST['senha'];
    if ($login == "etecia" && $senha == "etecia238"){
        echo "Autenticação realizada com sucesso :)";
    }else{
        echo "Você não tem permissão de visualizar essa página :(";
    }

    ?>
</body>
</html>