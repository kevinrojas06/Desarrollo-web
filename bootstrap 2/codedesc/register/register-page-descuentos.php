<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/register.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <meta charset="utf-8">
    <title>Registrate</title>
  </head>



  <body>
  <div class="contenedor">
  <div class="register">
    <form action="descuentos.php" method="post">
      <img src="img/user.png" alt="icono">
      <h1 class="texto">Registrate</h1>
      <h1 class="texto">Aqui</h1>
      <!--FORMALRIO DE REGISTRO-->
      <h4 class="texto">Llena los campos para completar tu registro</h4>
      <!--NOMBRE-->
      <label for="nombre">Código descuento</label>
      <input type="text" name="codigo" placeholder="DXC796" required>

      <label for="nombre">Empresa que emite</label>
      <input type="text" name="empresa" placeholder="Ej: SONY" required>
      <!--APELLIDO-->
      <label for="apellido">Descripción</label>
      <input type="text" name="descripcion" placeholder="EJ: DESCIENTO 50%" required required required required>
      <!--CORREO-->
      <label for="correo electronico">Fecha emisión</label>
      <input type="text" name="fecha" placeholder="AAAA-MM-DD" required required required>

      <label for="correo electronico">Fecha caducidad</label>
      <input type="text" name="caducidad" placeholder="AAAA-MM-DD" required required required>

      <input type="submit" name="boton" value="Terminar Registro">
    </form>

  </div>
  </div>
  </body>
</html>
