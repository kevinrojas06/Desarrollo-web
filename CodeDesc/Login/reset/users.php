<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>



<?php
$conexion=mysqli_connect("localhost","root","","users") or
die("Problemas con la conexion");

$registros=mysqli_query($conexion,"select nombre,apellido,correo,password
                        from users where correo='$_REQUEST[email]'") or
  die("Problemas en el select:".mysqli_error($conexion));

  echo "El Correo de Recuperacion a sido enviado";
  mysqli_close($conexion);

 ?>

//Código Script para bloquear el clic derecho.  
<script type='text/javascript'>
	document.oncontextmenu = function(){return false}
</script>


  </body>
</html>
