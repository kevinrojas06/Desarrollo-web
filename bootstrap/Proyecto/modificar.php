<?php require("conexionbasedatos.php"); ?>
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
    <title>TABLA DE DATOS</title>
  </head>
  <body style="background-color:#036bfc;">
    <?php
    if (isset($_POST['modificar'])) {
      $cod=$_POST['id'];
      $nom=$_POST['nom'];
      $ape1=$_POST['apell1'];
      $ape2=$_POST['apell2'];
      $dir=$_POST['direcc'];
      $tel=$_POST['telef'];
      $corr=$_POST['em'];
      $pas=$_POST['pass'];

      $consulta="update usuarios set Nombres='$nom', Primer_apellido='$ape1', Segundo_apellido='$ape2', Direccion='$dir', Telefono='$tel', Correo='$corr', Password='$pas' where Id_usuario='$cod'";

      $result=mysqli_query($conexion,$consulta);
    }
    header('location:datos.php');
    ?>

    <div class="container">
      <button style="margin-top:-60px;" class="btn btn-success btn-lg btn-block" type="button" onclick="window.location.href='http://localhost/bootstrap/Proyecto/datos.php'" name="button"><font style="vertical-align:inherit;">Volver a la tabla</font></button>
    </div>

  </body>
</html>
