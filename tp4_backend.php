<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tp4_backend.php</title>
</head>
<body>
  <h3>ejercicio uno: Almacenar en un array los 10 primeros números pares y mostrar en pantalla uno debajo del otro</h3> 
    <?php
    
    $tp1 = [2, 4, 6, 8 , 10, 12, 14, 16, 18, 20];
  foreach ($tp1 as $par) {
    echo "<p>$par</p>\n";
  }?>
<br><hr>
<h3>ejercicio dos: Crear un array e introducir los siguientes valores: Pedro, Ana, 34 y 1, sin asignar el índice de la
matriz. Mostrar el esquema del array con print_r().</h3>
<?php

$tp2 = ["Pedro", "Ana", 34, 1];
print "<pre>\n";
print_r($tp2);
print "<pre>\n";
?>
<br><hr>
<h3>ejercicio tres: Crear un array asociativo e introducir los siguientes valores:
Nombre: Pedro
Apellido: Torres
Dirección: Av. Mayor 3703
Teléfono: 1122334455</h3>


<?php

$asociativo = [
    "nombre" => "Pedro",
    "apellido" => "torres",
    "direccion" => "Av. Mayor 370",
    "telefono" => 1122334455
]
?>
<br><hr>
<h3>ejercicio cuatro: Crear un array introduciendo las ciudades: Madrid, Barcelona, Londres, New York, Los Ángeles y
Chicago, sin asignar índices al array. A continuación, muestra el contenido del array.
Ejemplo: La ciudad con el índice 0 tiene el nombre Madrid.</h3> 

<?php

$ciudades = ["madrid", "barcelona", "londres","new york", "los angeles","chicago"];
$i = 0;
 foreach ($ciudades as $city )  {
    print "El índice de ".$i++." es $city\n"; 
 }
?>
<br><hr>
<h3>ejercicio cinco: Repite el ejercicio anterior pero ahora se ha de crear índices, MD para Madrid, BCL para Barcelona,
LD para Londres, NY para New York, LA para Los Ángeles y CCG para Chicago.
Ejemplo: El índice de Madrid es MD.</h3>
<?php


$cityss = [
  "MD" => "Madrid",
  "BCL" => "Barcelona",
  "LD" => "Londres",
  "NY" => "New York",
  "La" => "Los Angeles",
  "CCG" => "Chicago"
];
  foreach ($cityss as $city => $value) {
    print "El índice de $city es $value.\n";
  };
?>

    
</body>
</html>