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
    <button type="submit"><a href="insert.html">agregar</a></button>
   
    <h2>Lista de ropa</h2>
    <p><b>ROPA EN STOCK</b></p>
    <tr>
        <th>ID</th>
        <th>TIPO DE ROPA</th>
        <th>MARCA</th>
        <th>TALLE</th>
        <th>PRECIO</th>
        <th>IMAGEN</th>
        <th>MODIFICAR</th>
        <th>ELIMINAR</th>
    </tr>
    <?php
    $conexion=mysqli_connect("127.0.0.1","root","");
    mysqli_select_db($conexion,"tienda-ropa");

    $consulta= "SELECT*FROM ropa";

    $datos= mysqli_query ($conexion, $consulta);



    while ( $fila =mysqli_fetch_array($datos)) { ?>
        <tr>
        <td><?php echo $fila['id'];?></td>
        <td><?php echo $fila['prenda'];?></td>
        <td><?php echo $fila['marca'];?></td>
        <td><?php echo $fila['talle'];?></td>
        <td><?php echo $fila['precio'];?></td>
        <td><img src="data:imagen/jpg;base64, <?php echo base64_encode($fila['imagen'])?>" alt="" width="100px" height="100px"></td>
        <td><button onclick="location.href='modificar.php?id=<?php echo $fila['id'];?>'">modificar</button></td>   
        <td><button onclick="location.href='delete.php?id=<?php echo $fila['id'];?>'">borrar</button></td>
        </tr>
   <?php } ?>
    </table>
</body>
</html>