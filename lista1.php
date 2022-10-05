<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>questao1</title>
</head>
<body>
   <form action="lista1.php" method="get">
    Digite o valor do raio:
    <input type="number" name="raio"/>
    <br/></br>
    <input type="submit" value="Calcular Raio"/>
   </form>

   <?php
    $raio = $_GET["raio"];

    //area = pi * r ao quadrado
    $m_pi = 3.1415;
    //$area = $m_pi * $raio* $raio*;
    $area = $m_pi * $raio**2; 

    $perimetro = 2 * $m_pi * $raio;

        echo"o valor da Área  "  .$area."  Do raio informado " .$raio; 
        echo "  o valor do perimetro do raio  " .$raio. "  é  " .$perimetro;
    ?>



</body>
</html>