<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $valor1 = 10;
    if ($valor1 > 0) {echo " $valor1 es un valor positivo";}
    else {echo "es un valor negativo";}?>
    <br>
    <hr>
    <?php 
    $valor2 = 8;
    if ($valor2 > 1 && $valor2 > 10) {echo " $valor2 es mayor a 1 y menor a 10";}
    else {echo " $valor2 no es mayor a 1 y menor a 10";}?>
    <br>
    <hr>
    <?php 
    $valor3 = 15;
    if ($valor3 > 10 || $valor3 < 2 ) {echo "$valor3 es mayor a 10";}
    else {echo "$valor3 no es menor a 2";}?>
    <br>
    <hr> 
    <?php
    $numero1 = 9;
    $numero2 = 8;
    if ($numero1 > $numero2) {echo  "suma:".($numero1 + $numero2)," resta:".($numero1 - $numero2);
    } else { "$numero1 no es mayor a $numero2";}
    if ($numero1 < $numero2) {echo  "multiplicacion:".($numero1 * $numero2)," division:".($numero1 / $numero2), " resto:".($numero1 % $numero2);}
    else { "$numero1 no es menor a $numero2";}?>
    <br>
    <hr>
    <?php
    if ($numero1 == $numero2) {echo " $numero1 y $numero2 son iguales";}
    else { echo " $numero1 y $numero2 no son iguales";}?>
</body>
</html>
