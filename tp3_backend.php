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
?>

</body>
</html>
