<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>questao5</title>
</head>
<body><!--faça um script que converta metros para centimetros-->

    <form action="lista5.php" method="get">
    Metros: <input type="text" name="numero1"/>
    <br/>
    <input type="submit" value="Calcular"/>

    </form>
 
<?php 
$metros = $_GET ["numero1"];       

$centimetro = $metros * 100;

echo"o Resultado em centímetros é:   " .$centimetro; 
?>

</body>
</html>