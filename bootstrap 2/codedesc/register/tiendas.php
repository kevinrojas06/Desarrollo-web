
<?php
$conexion=mysqli_connect("localhost","kevin","","descuentos") or
die("Problemas con la conexion");

mysqli_query($conexion,"insert into tiendas(Nombre, Direccion, Telefono, Correo_electronico, Password) values
              ('$_REQUEST[nombre]','$_REQUEST[direccion]','$_REQUEST[telefono]', '$_REQUEST[email]', '$_REQUEST[password]'")
              or die("Problemas".mysqli_error($conexion));
mysqli_close($conexion);
echo "El usuario fue dado de alta.";

 ?>







  </body>
</html>
