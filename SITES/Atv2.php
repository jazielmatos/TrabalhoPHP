<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <title>IMC</title>
</head>
<body>
        <?php
            $peso = $_GET['peso'];
            $Altura = $_GET['Altura'];
            
            if($peso==''||$Altura==''){
                echo "<br>Peso ou Altura Inválidos!! Preencha os campos solicitados...";
            }else{
            $imc = ($peso)/($Altura * $Altura);
            echo "Sua altura é de: ".$_GET['Altura'] , " m";
            echo "<br> Você pesa:  ".$_GET['peso'], " Kg";
            printf ("<br>Seu imc é de : %.2f ",$imc);
            if ($imc > 25){
                echo "<br>Você esta acima do peso!!";
                
            }
            else{
                echo "<br>Você esta saudavel!!";
                
            }
            
        }
        
        ?>
        <br>
        <br>
        <br>
        <img src="../IMAGENS/imagem1.jpg" alt="imagem" width="300dp" height="200dp">
        
</body>
</html>