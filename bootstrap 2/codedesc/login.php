<?php
require("conexionbd.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
<link rel="stylesheet" href="css/login.css">
<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
<meta charset="utf-8">
<title>Inicio de Sesión</title>
</head>
<body>
<div class="contenedor">
<div class="login-log">
  <form action="iniciosesion.php" method="post">
    <img class="imagen" src="img/hombre.png" alt="Logo">
    <h1 class=texto >Inicia Sesión Aqui</h1>
    <!--USERNAME-->
    <label for="nombredeusuario">Nombre de Usuario</label>
    <input type="text" placeholder="Ingresa correo" required name="usuario">

    <!--PASSWORD-->
    <label for="contraseña">Contraseña</label>
    <input type="password" placeholder="Ingresa Contraseña" required name="password">

    <input class="boton" type="submit" value="Inicia Sesión" name="iniciarsesion">

    <a class="text-final" href="reset/password-reset.php">¿Olvidaste tu contraseña?</a>
    <a class="text-final" href="register/register-page.php">¿Aun no tienes una cuenta?</a>
  </form>
</div>
</div>
</body>
</html>
