<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questao9</title>
</head>
<body>
    <form action="lista9.php" method="get">
    Digite em Celsius:
    <input type="number" name="C"/>
    <input type="submit" value= "Calcular"/>
    </form>

    <?php
        $C = $_GET["C"];
        $F = (9/5)*$C + 32;

    echo" o valor informado em graus Fahrenheit é: " .$F. "°";




    ?>




</body>
</html>