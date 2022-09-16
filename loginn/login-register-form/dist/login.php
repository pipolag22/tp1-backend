<?php
$usuario = $_POST ["user"];
$contraseña = $_POST ["pass"];

$pipouser = "pipolag";
$pipopass = "123456";

if ($usuario == $pipouser && $contraseña == $pipopass) {
   header ("location:correcto.html");
}else {
    header ("location:error.html");
}
?>