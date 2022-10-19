<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>listar</title>
</head>
<body>
    <table border="1">
<h1>TIENDA DE ROPA</h1>
    <button type="submit"><a href="index.html">inicio</a></button>
    <button type="submit" ><a href="buzos.php">buzos</a></button>
    <button type="submit" ><a href="nike.php">nike</a></button>
    <button type="submit" ><a href="precio.php">mayores a 500usd</a></button>
    <h2>Lista de ropa</h2>
    <p><b>PRECIOS MAYORES A 500</b></p>
    <tr>
        <th>ID</th>
        <th>TIPO DE ROPA</th>
        <th>MARCA</th>
        <th>TALLE</th>
        <th>PRECIO</th>
    </tr>
    <?php
    $conexion=mysqli_connect("127.0.0.1","root","");
    mysqli_select_db($conexion,"tienda-ropa");

    $consulta= "SELECT*FROM ropa WHERE precio > 500";  

    $datos= mysqli_query ($conexion, $consulta);



    while ( $fila =mysqli_fetch_array($datos)) { ?>
        <tr>
        <td><?php echo $fila['id'];?></td>
        <td><?php echo $fila['prenda'];?></td>
        <td><?php echo $fila['marca'];?></td>
        <td><?php echo $fila['talle'];?></td>
        <td><?php echo $fila['precio'];?></td>
        </tr>
   <?php } ?>
    </table>
</body>
</html>