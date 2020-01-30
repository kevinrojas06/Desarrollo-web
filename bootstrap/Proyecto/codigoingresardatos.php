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
   <body style="background-color:#036bfc;">

     <?php
     require("conexionbasedatos.php");
     if (isset($_POST['registrar']) && $_POST['email']) {
       $comparacion="select *from usuarios where Correo='".$_POST["email"]."'";

       $resultado=mysqli_query($conexion,$comparacion);
       $contador=mysqli_num_rows($resultado);


       if ($contador==1) {
      ?>
         <div class="container text-light" align="center">
          <h1 style="margin:230px;">¡El usuario ya existe!</h1>
         </div>
         <?php
       }
       else
       {
         mysqli_query($conexion, "insert into usuarios(Nombres, Primer_apellido, Segundo_apellido, Direccion, Telefono, Correo, Password)values('$_REQUEST[nombres]', '$_REQUEST[apellido1]', '$_REQUEST[apellido2]', '$_REQUEST[direccion]', '$_REQUEST[telefono]', '$_REQUEST[email]', '$_REQUEST[password]')") or die("Error".mysqli_error($conexion));
       }
          ?>
          <div class="container text-light" align="center">
           <h1 style="margin:230px;">¡HAS SIDO REGISTRADO!</h1>
          </div>
      <?php
       }
       mysqli_close($conexion);
       ?>

       <div class="container">
         <button style="margin-top:-60px;" class="btn btn-success btn-lg btn-block" type="button" onclick="window.location.href='http://localhost/bootstrap/Proyecto/proyectoredsocial.php'" name="button"><font style="vertical-align:inherit;">Ir al Inicio</font></button>

       </div>

   </body>
 </html>
