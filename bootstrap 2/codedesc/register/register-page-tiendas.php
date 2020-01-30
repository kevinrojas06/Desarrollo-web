<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/register-tienda.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <meta charset="utf-8">
    <title>Registra Tu Tienda</title>
  </head>



  <body>
  <div class="contenedor">
  <div class="register">
    <form action="tiendas.php" method="post">
      <img src="img/user-tienda.png" alt="icono">
      <h1 class="texto">Registrate</h1>
      <h1 class="texto">Aqui</h1>
      <!--FORMALRIO DE REGISTRO-->
      <h4 class="texto">Llena los campos para completar tu registro</h4>
      <!--NOMBRE-->
      <label for="nombre">Nombre</label>
      <input type="text" name="nombre" placeholder="EJ: EMPRESA" required>
      <!--APELLIDO-->
      <label for="apellido">Dirección</label>
      <input type="text" name="direccion" placeholder="EJ: CLL. JUAN ALDAMA" required required required required>
      <!--CORREO-->
      <label for="correo electronico">Teléfono</label>
      <input type="text" name="telefono" placeholder="722-112-5463" required required required>
      <!--CORREO ELECTRÓNICO-->
      <label for="correo electronico">Correo electrónico</label>
      <input type="email" name="email" placeholder="tienda@dominio.com" required required>
      <!--CONTRASEÑA-->
      <label for="contraseña">Contraseña</label>
      <input type="password" name="password" placeholder="Ingresa tu Contraseña" required required>

      <input type="submit" name="boton" value="Terminar Registro">
    </form>

  </div>
  </div>
  </body>
</html>
