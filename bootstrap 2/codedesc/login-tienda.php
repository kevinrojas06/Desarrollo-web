<?php
require("conexionbd.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
<link rel="stylesheet" href="css/login-tienda.css">
<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
<meta charset="utf-8">
<title>Inicio de Sesión de Tienda</title>
</head>
<body>
<div class="contenedor">
<div class="login-log">
  <form action="iniciosesion-tienda.php" method="post">
    <img class="imagen" src="img/tienda-online.png" alt="Logo">
    <h1 class=texto >Inicia Sesión Aqui</h1>
    <!--USERNAME-->
    <label for="nombredeusuario">Tienda</label>
    <input type="text" placeholder="Ingresa correo tienda" required name="tienda">

    <!--PASSWORD-->
    <label for="contraseña">Contraseña</label>
    <input type="password" placeholder="Ingresa Contraseña" required name="password">

    <input class="boton" type="submit" value="Inicia Sesión" name="iniciarsesion">

    <a class="text-final" href="reset-tienda/password-reset.php">¿Olvidaste tu contraseña?</a>
    <a class="text-final" href="register/register-page-tiendas.php">¿Aun no tienes una cuenta?</a>
  </form>
</div>
</div>
</body>
</html>
