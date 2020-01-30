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
    <title>Login</title>
  </head>
  <body style="background-color:#036bfc;">
    <?php
    session_start();
    require("conexionbasedatos.php");
    if (isset($_POST['sesion'])) {
      if ($_POST['usuario']!="" && $_POST['Password']!="") {
        $usuario=$_POST['usuario'];
        $password=$_POST['Password'];

        $consulta="select *from usuarios where Correo='$usuario' and Password='$password'";

        $conexionyconsulta=mysqli_query($conexion, $consulta);

        $llamarcolumnas=mysqli_num_rows($conexionyconsulta);

        if ($llamarcolumnas==1) {
           $_SESSION['usuario']=$usuario;
           header('location:sesionusuario.php');

        }else {
          ?>
          <div class="container text-light" align="center">
           <h1 style="margin:230px;">¡Contraseña o Usuario incorrecto!</h1>
          </div>


          <?php
        }
      }
    }
    ?>

  </body>
</html>
