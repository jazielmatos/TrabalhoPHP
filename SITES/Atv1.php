<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <title>Area e Perimetro</title>
</head>
<body>
    <h3>
        AREA E PERIMETRO DO RETANGULO
        <BR>
    </h3>
<?php
    $altura = $_GET['altura'];
    $base = $_GET['base'];

    $perimetro;
    $area;
    if($altura == '' || $base==''){
        echo "Sem valor em Base ou Altura...";

    }else{
    
        $area = $base * $altura;
        $perimetro = ($base * 2) + ($altura*2);
    
    if(isset($_GET['unidade'])){
        if($_GET['unidade']=='cm'){
            echo "<br>Altura do retângulo é: ".$_GET['altura'], " cm";
            echo "</br>A base do retângulo é: ".$_GET['base']," cm";
            echo "</br><br>Perimetro: ".$perimetro," cm";
            echo "<br>Area: ".$area," cm²";
        }else if ($_GET['unidade']=='m'){
            echo "<br>Altura do retângulo é: ".$_GET['altura']," m";
            echo "</br>A base do retângulo é: ".$_GET['base'], " m";
            echo "</br><br>Perimetro: ".$perimetro," m";
            echo "<br>Area: ".$area," m²";
        }
    }
    

    
    }


?>
</body>
</html>