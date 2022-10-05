<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>questao2
    </title>
</head>
<body> <!--faça um programa que peça um número e então mostre 
        a mensagem o número infomado foi [numero].-->

    <form action="">
    Digite um número:
    <input type="number" name="numero"/>
    <input type="submit" value="Enviar">

    </form>

    <?php
    $numero = $_GET["numero"];
    echo"o número informado foi: " .$numero;
    ?>
    
</body>
</html>