<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>TP If, for, while</h3>
<?php
echo "<p> numeros del 1 al 100</p>";
 for ($i=1; $i <= 100 ; $i++) { 
    print"$i " ;
 }
   

?>
<?php
echo "<p> numeros del 100 al 1</p>";
 for ($i=100; $i >= 1 ; $i--) { 
    print"$i " ;
 }
?>
<?php
echo "<p> mostrar numeros pares del 1 al 100</p>";
 for ($i=0; $i <= 100 ; $i++) { 
    echo ($i++)." " ;
 }
?>
 <?php
$suma=0;
echo "<p> mostrar suma del 1 al 20</p>";
for ($i=1; $i <= 20; $i++){
$suma+= $i;} //suma = suma + i;

    echo "la suma de 1 al 20 es".$suma;
    echo "<br>";


?>
<?php
echo "<p> mostrar suma de numeros pares del 1 al 20</p>";
$suma=0;
for ($i=0; $i <= 20; $i+=2) // i = i + 2; 
$suma += $i; //suma = suma + i;
// for ($i=1; $i <= 20; $i++) { 
//     if($i%2==0)
//     $suma += $i; 

echo "la sume de los numeros pares del 1 al 20 da ".$suma;
    echo "<br>";
?>
    
    // habia entendido mal la consigna e hice esto..
<!-- <?php
echo "<p> mostrar suma del 1 al 20</p>";
$suma=0;
for ($i=0; $i <= 20; $i++) { 
    echo "la suma de $suma + $i es= ".$i;
    echo "<br>";
}

?>
<?php
echo "<p> mostrar suma de numeros pares del 1 al 20</p>";
$suma=0;
for ($i=1; $i <= 20; $i++) { 
    
 ($i++);
    echo "la suma de $suma + $i es= ".$i;
    echo "<br>";
}
?> -->


</body>
</html>
