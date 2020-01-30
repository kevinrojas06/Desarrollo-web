
<?php
$conexion=mysqli_connect("localhost","kevin","","descuentos") or
die("Problemas con la conexion");

mysqli_query($conexion,"insert into descuentos(Codigo_descuento, Empresa, Descripcion, Fecha_emision, Caducidad) values
              ('$_REQUEST[codigo]','$_REQUEST[empresa]','$_REQUEST[descripcion]','$_REQUEST[fecha]','$_REQUEST[caducidad]')")
              or die("Problemas".mysqli_error($conexion));
mysqli_close($conexion);
echo "El usuario fue dado de alta.";

 ?>







  </body>
</html>
