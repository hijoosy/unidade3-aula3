<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>questao7</title>
</head>
<body> <!-- faça um script que pergunte quanto voce ganha por hora 
        e o numero de horas trabalhadas no mes. calcule e mostre o total 
        do seu salário no referido mes.-->

        <form action="lista7.php" method="get">
        Digite seu ganho por hora: 
        <input type="number" name="numero1"/>
        <br/>
        Digite suas horas trabalhadas no mês: 
        <input type="number" name="numero2" />
        </br>
        <input type="submit" value="Calcular"/> 


        <?php
        $numero1 = $_GET["numero1"];
        $numero2 = $_GET["numero2"];

        $total = $numero1 * $numero2;

    
        echo"<br/>o seu sálario bruto é de: " .$total. " reais.";
        ?>


       








        </form>

        

       
</body>
</html>