
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questao3</title>
</head>
<body> <!--faça um script que peça dois numeros e imprima a soma.-->


    <form action="lista3.php" method="get">
    Primeiro Número:<br/>
    <input type="number" name="numero1" placeholder="Digite o 1ª numero"/>
    <br/> <br/>

    Segundo Número:<br/>
    <input type="number" name="numero2" placeholder="Digite o 2ª numero"/>
    <br/> <br/>

    <input type="submit" value="Calcular">
    </form>

    <?php
    //pegar dados do formulário
    $numero1 = $_GET ["numero1"];
    $numero2 = $_GET ["numero2"];

    //processando
    $somar = $numero1 + $numero2 ;

    //Saída 
    echo" A soma é: " .$somar;

    ?>

</body>
</html>