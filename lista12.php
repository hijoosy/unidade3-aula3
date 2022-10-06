<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>questao12</title>
</head>
<body>
    <form action="lista12.php" method="get"> 
    Digite a sua altura:
    <input type="nymber" name="altura"/>
    <input type="submit" value="Calcular"/>

    </form>
    <?php
    $altura = $_GET["altura"];

    $pesom = (72.7 *$altura)-58;
    $pesof = (62.1 *$altura)-44.7;

    echo "o seu peso ideal Masculino é: " .$pesom. " kg.";
    echo "<br/> o seu peso ideal Feminino é: " .$pesof. " kg.";



    ?>

    
</body>
</html>