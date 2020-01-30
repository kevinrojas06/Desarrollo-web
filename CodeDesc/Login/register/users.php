<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


<?php
$conexion=mysqli_connect("localhost","root","","users") or
die("Problemas con la conexion");

mysqli_query($conexion,"insert into users(nombre,apellido,correo,password) values
              ('$_REQUEST[nombre]','$_REQUEST[apellido]','$_REQUEST[email]','$_REQUEST[password]')")
              or die("Problemas".mysqli_error($conexion));
mysqli_close($conexion);
echo "El usuario fue dado de alta.";

 ?>




//Código Script para bloquear el clic derecho.  
<script type='text/javascript'>
	document.oncontextmenu = function(){return false}
</script>


  </body>
</html>
