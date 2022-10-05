<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questao11</title>
</head>
<body>
    <form action="lista11.php" method="get">
    Digite a sua altura:
    <input type="text" name="altura"/>
    <input type="submit" value= "Calcular"/>

    </form>

    <?php
    $altura = $_GET["altura"];

    $peso = (72.7 *$altura)-58;

    echo "o seu peso ideal é: " .$peso. " kg.";


?>
    
</body>
</html>