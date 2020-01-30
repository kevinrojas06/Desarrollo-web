<?php

//declaracion de variables

$name = $_POST['name'];
$mail = $_POST['mail'];
$contrasena = $_POST['contrasena'];


$contrasena =sha1($contrasena);
$contrasena = md5($contrasena); //No es comveniente usar los dos porque son vulnerables//

//Es más seguro el sha1//

echo 'Ingresa tu nombre de registro: '.$name ;
echo '<br>';
echo 'Ingresa tu correo para el registro: '.$mail ;
echo '<br>';
echo 'Ingresa tu contraseña para el registro: '.$contrasena;

?>
