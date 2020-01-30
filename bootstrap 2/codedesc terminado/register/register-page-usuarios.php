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
    <form action="users.php" method="post">
      <img src="img/user.png" alt="icono">
      <h1 class="texto">Registrate</h1>
      <h1 class="texto">Aqui</h1>
      <!--FORMALRIO DE REGISTRO-->
      <h4 class="texto">Llena los campos para completar tu registro</h4>
      <!--NOMBRE-->
      <label for="nombre">Nombre(s)</label>
      <input type="text" name="nombre" placeholder="Juan Ernesto" required>
      <!--APELLIDO-->
      <label for="apellido">Apellido(s)</label>
      <input type="text" name="apellido" placeholder="Perez Garcia" required required required required>
      <!--CORREO-->
      <label for="correo electronico">Correo electronico</label>
      <input type="email" name="email" placeholder="usuario@dominio.com" required required required>
      <!--CONTRASEÑA-->
      <label for="correo electronico">Contraseña</label>
      <input type="password" name="password" placeholder="Ingresa tu Contraseña" required required>

      <input type="submit" name="boton" value="Terminar Registro">
    </form>

  </div>
  </div>
  </body>
</html>
