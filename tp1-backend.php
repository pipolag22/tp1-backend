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
$saludo = "hola mundo";
echo $saludo;
 ?> 
 <br>
 <hr>  
 <h3>hagamos varias ecuaciones de 7 y 3</h3>
 
 <li>suma:
 <?php
 $var1 = 7;
 $var2 = 3;
 $suma = $var1 + $var2;
 echo $suma
 ?> 
 <br>
 <hr>  
 </li>
 <li>resta:
 <?php
 $resta = $var1 - $var2;
 echo $resta
 ?> 
 <br>
 <hr>  
 </li>
 <li>multiplicacion:
 <?php
 $multiplicacion = $var1 * $var2;
 echo $multiplicacion
 ?> 
 <br>
 <hr>  
 </li>
 <li>division:
 <?php
 $division = $var1 / $var2;
 echo $division
 ?> 
 <br>
 <hr>  
 </li>
 <li>resto:
 <?php
 $resto = $var1 % $var2;
 echo $resto
 ?> 
 <br>
 <hr>  
 </li>
 <h2>Realizar la transformación de grados Celsius a Fahrenheit, para el valor 20°C</h2>
 <?php
 $gradoc = 20;
 $fahrenheit = $gradoc * 1.8 + 32;
 echo " $fahrenheit ºF "
 ?> 
 <br>
 <hr>  
 </li> 
 <h2>tenemos un rectangulo de base de 18cm y alto 12cm</h2>
 </li> 
 <?php
$base = 18;
$altura = 12;
$area = $base * $altura;
$perimetro = $base * 2 + $altura * 2;
 ?> 
 <br>
 <hr>  
 <li>
 <?php
 echo "su area es de $area"
 ?> 
 <br>
 <hr>  
 </li>
 <li>
 <?php
 echo "su perimetro es de $perimetro"
 ?> 
 <br>
 <hr>  
 </li>
 <h2>Calcular el perímetro y el área de un círculo dado que su radio es de 30cm.</h2>

 <?php
 $pi =  3.1416;
 $circulo = 30;
 $diametro = $circulo / 2;
 $area = ($circulo * $circulo) * $pi;

 echo "<li> 
 su radio es de $area
 </li>
 "
 ?> 
 <br>
 <hr>  
 





    
<!--    
//    $saludo = "hola mundo y potrero";
//    $var1 = 7;
//    $var2 = 3;
//    $gradoc = 20;
//    $suma = $var1 + $var2;
//    $resta = $var1 - $var2;
//    $multiplicacion = $var1 * $var2;
//    $division = $var1 / $var2;
//    $resto = $var1 % $var2;
//    $fahrenheit = $gradoc * 1.8 + 32;
//    $base = 18;
//    $altura = 12;
//    $radio = 30;
//    $area = $base * $altura;
//    $perimetro = $base * 2 + $altura * 2;
//    $circulo = 30;
//    $diametro = $circulo / 2;

//  print "<h1> $saludo </h1> <hr> <br>";
//  print " 
//  <h3>las variables a analizar son $var1 y $var2</h3> <hr> <br>
//   <lo>
//   <li>la suma de las variables es $suma</li>
//   <li>la resta de las variables es $resta </li>
//   <li>la multiplicacion de las variables es $multiplicacion </li>
//   <li>la division de las variables es $division </li>
//   <li>el resto de las variables es $resto </li>
//   </lo> <hr> <br>
//   <h3>La transformación de grados Celsius a Fahrenheit, para el valor $gradoc °C es $fahrenheit °F</h3><hr> <br>
//   <h3>tenemos un rectangulo de base de $base cm y alto $altura cm</h3> <hr>
//   <lo>
//   <li>su area es de $area </li>
//   <li>su perimetro es de $perimetro </li>
//   </lo><hr> <br>
//   <h3>tenemos un circulo de $circulo cm</h3>
//   <lo>
//   <li>su diametro es de $diametro</li>
//   </lo>
  

//   "; -->
    
</body>
</html>