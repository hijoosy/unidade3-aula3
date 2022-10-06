<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>questao15</title>
</head>
<body>
    <form action="lista15.php" method="get">
    Digite seu ganho por hora:
    <input type="number" name="numero1"/>
    <br/>
    Digite sua horas trabalhadas no mês:
    <input type="number" name="numero2"/>
    </br>
    <input type="submit" name="Calcular"/>
<?php
    $numero1 = $_GET["numero1"];
    $numero2 = $_GET["numero2"];

    $total = $numero1 * $numero2;

    echo " <br/>seu sálario bruto é de: " .$total. " reais";

    $IR = ($total * 11 / 100);

    echo " <br/> seu imposto de renda foi de: " .$IR. " reais.";

    $INSS = ($total *8 /100);

    echo "<br/> seu inss foi de: " .$INSS. " reais.";

    $sindicato = ($total *5 /100);

    echo "<br/> seu sindicato foi de: "  .$sindicato. " reais.";

    $descontos = ($IR + $INSS + $sindicato);

    $total1 = ($total - $descontos);

    echo "<br/> seu sálario liquido é de: " .$total1. " reais.";
    ?>
    </form>
    
</body>
</html>