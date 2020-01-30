<?php
require("conexionbasedatos.php");
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scalable=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <title>Registro</title>
  </head>
  <body class="text-center" style="background-color:#036bfc;">
    <br>
    <div class="container" align="center" >
      <div class="col-sm-4">
    <form action="codigoingresardatos.php" method="post">
      <img class="rounded-circle" width="100" height="100" src="img/redsocial.jpg" alt="logo">
      <h2 align="center">REGISTRATE</h2>
        <div class="form-group">
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nombres" name="nombres" required>
        </div>

        <div class="form-group">
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Primer apellido" name="apellido1" value="" required>
        </div>

        <div class="form-group">
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Segundo apellido" name="apellido2" value="" required>
        </div>

        <div class="form-group">
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Dirección" name="direccion" value="" required>
        </div>

        <div class="form-group">
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Número de teléfono" name="telefono" value="" required>
        </div>

        <div class="form-group">
          <input type="email" class="form-control" id="formGroupExampleInput" placeholder="E-mail" name="email" value="" required>
        </div>

        <div class="form-group">
          <input type="password" class="form-control" id="formGroupExampleInput" placeholder="Password" name="password" value="" required>
        </div>

        <button class="btn btn-lg btn-block btn-success" type="submit" name="registrar">
          <font style="vertical-align:inherit;">Resgistrarse</font>
        </button>
        <button class="btn btn-lg btn-block btn-success" type="button" onclick="window.location.href='http://localhost/bootstrap/Proyecto/proyectoredsocial.php'" name="button">
          <font style="vertical-align:inherit;">Ir al Login</font>
        </button>

    </form>
    </div>
    </div>

  </body>
</html>
