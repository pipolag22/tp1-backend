<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hola mundo!</title>
</head>
<body>
    
    <?php
   
   $saludo = "hola mundo y potrero";
   $var1 = 7;
   $var2 = 3;
   $gradoc = 20;
   $suma = $var1 + $var2;
   $resta = $var1 - $var2;
   $multiplicacion = $var1 * $var2;
   $division = $var1 / $var2;
   $resto = $var1 % $var2;
   $fahrenheit = $gradoc * 1.8 + 32;
   $base = 18;
   $altura = 12;
   $radio = 30;
   $area = $base * $altura;
   $perimetro = $base * 2 + $altura * 2;
   $circulo = 30;
   $diametro = $circulo / 2;

 print "<h1> $saludo </h1> <hr> <br>";
 print " 
 <h3>las variables a analizar son $var1 y $var2</h3> <hr> <br>
  <lo>
  <li>la suma de las variables es $suma</li>
  <li>la resta de las variables es $resta </li>
  <li>la multiplicacion de las variables es $multiplicacion </li>
  <li>la division de las variables es $division </li>
  <li>el resto de las variables es $resto </li>
  </lo> <hr> <br>
  <h3>La transformación de grados Celsius a Fahrenheit, para el valor $gradoc °C es $fahrenheit °F</h3><hr> <br>
  <h3>tenemos un rectangulo de base de $base cm y alto $altura cm</h3> <hr>
  <lo>
  <li>su area es de $area </li>
  <li>su perimetro es de $perimetro </li>
  </lo><hr> <br>
  <h3>tenemos un circulo de $circulo cm</h3>
  <lo>
  <li>su diametro es de $diametro</li>
  </lo>
  

  ";
//nose si queda bien asiohj


    ?>
    
</body>
</html>