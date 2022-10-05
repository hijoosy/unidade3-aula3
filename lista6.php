<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questao6</title>
</head>
<body> <!--faça um script que calcule a área de um quadrado e em seguida 
        mostre o dobrpo desta área.-->

        <form action="lista6.php" method="get" >
    Digite a área: 
    <input type="number" name="area"/>
   
    <input type="submit" value="calcular"/>

        </form>

        <?php
        $area = $_GET["area"];

        $total = $area * $area;

     echo "A área do quadrado é: " .$total;

        



        ?>
</body>
</html>