<!DOCTYPE html>
<html lang="es">
  <head>
    <link rel="stylesheet" href="css/reset.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <meta charset="utf-8">
    <title>Recupera tu Constraseña</title>
  </head>


  <body>

  <div class="contenedor">
    <div class="reset-password">
      <form action="users.php" method="post">
        <img class="imagen" src="img/logo-password.png" alt="Logo">
        <h1 class=texto >Recupera Tu Contraseña</h1>
        <h1 class=texto >Aqui</h1>
        <!--FORMULARIO DE RECUPERACION-->
        <h4 class=texto >Ingresa el correo que usaste para registrarte</h4>
        <label for="correo electronico">Correo electronico</label>
        <input type="email" placeholder="usuario@dominio.com" name="email" required>
        <input class="boton" type="submit" value="Enviar Solicitud">

      </form>

    </div>

  </div>
  </body>
</html>
