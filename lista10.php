<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questao10</title>
</head>
<body>
    <form action="lista10.php" method="get">
    Digite o número 1:
    <input type="number" name="numero1"/>
    <br/>
    Digite o número 2:
    <input type="number" name="numero2"/>
</br><br/>
    Digite o número real:
    <input type="number" name="real"/>
</br>
    <input type="submit" value="Calcular"/>
    </form>

    <?php
    $n1 = $_GET["numero1"];
    $n2 = $_GET["numero2"];
    $real = $_GET["real"];

    $p1 = ($n1 *2) + ($n2 /2);
    $p2 = (($n1 *3)+$real);
    $p3 = ($real **3);

    echo "<br/> resultado 1: " .$p1;
    echo "<br/> resultado 2: " .$p2;
    echo "<br/> resultado 3: " .$p3;





?>

</body>
</html>