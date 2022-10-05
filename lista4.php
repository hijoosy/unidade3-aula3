<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>questao4</title>
</head>
<body> <!--faça um script que peça as 3 notas de um aluno
        e mostre a média.-->
    
    <form action="">
    Nota 1: <input type="text" name="numero1"><br>
    Nota 2: <input type="text" name="numero2"><br>
    Nota 3: <input type="text" name="numero3"><br>
  <input type="submit" value="Calcular"/>
 </form>
 
 <?php 
  $numero1 = $_GET['numero1'];
  $numero2 = $_GET['numero2'];
  $numero3 = $_GET['numero3'];
  
  $media = ($numero1 + $numero2 + $numero3);
  
  echo "Média: " .$media;

?>

    </form>
</body>
</html>