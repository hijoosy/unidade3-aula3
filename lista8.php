<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questao8</title>
</head>
<body>
    <form action="lista8.php" method="get">
    Digite em Farenheit:
    <input type="number" name="F"/>
    <input type="submit" value= "Calcular"/>
    </form>

    <?php
    $F = $_GET["F"];
    
    $C = ($F-32)*5/9;

    echo" o valor informado em graus Celsius é: " .$C. "°";




    ?>




</body>
</html>