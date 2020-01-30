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
    <title>DATOS</title>
  </head>
  <body style="background-color:#036bfc;">
<br>
<h2 align="center" class="text-light">TABLA DE DATOS</h2>
<br>
    <div class="container">
    <div class="row">
      <div class="col-sm-20">
        <form class="" action="eliminar.php" method="post">
    <table class="table">
      <thead class="thead-dark" align="center">
        <tr>
          <th scope="col"></th>
          <th scope="col">Id usuario</th>
          <th scope="col">Nombres</th>
          <th scope="col">Primer apellido</th>
          <th scope="col">Segundo apellido</th>
          <th scope="col">Dirección</th>
          <th scope="col">Teléfono</th>
          <th scope="col">Correo</th>
          <th scope="col">Password</th>
        </tr>
      </thead>

      <tbody>
       <?php $sql="select *from usuarios";
          $resultado=mysqli_query($conexion,$sql);
          while ($mostrar=mysqli_fetch_array($resultado)) {
       ?>
       <tr align="center">
         <td>
           <div class="input-group mb-4">
             <div class="input-group-prepend">
             <div class="">
           <input type="checkbox" name="seleccion[]" aria-label="Checkbox for following text input" value="<?php echo $mostrar['Id_usuario']; ?>">
           </div>
           </div>
           </div>
          </td>
         <th scope="row" class="text-light"> <?php echo $mostrar['Id_usuario']; ?> </th>
         <td class="text-light"><?php echo $mostrar['Nombres']; ?></td>
         <td class="text-light"><?php echo $mostrar['Primer_apellido']; ?></td>
         <td class="text-light"><?php echo $mostrar['Segundo_apellido']; ?></td>
         <td class="text-light"><?php echo $mostrar['Direccion']; ?></td>
         <td class="text-light"><?php echo $mostrar['Telefono']; ?></td>
         <td class="text-light"><?php echo $mostrar['Correo']; ?></td>
         <td class="text-light"><?php echo $mostrar['Password']; ?></td>
       </tr>
       <?php
          }
          mysqli_close($conexion);
          ?>

      </tbody>

    </table>
    <div class="container">
      <button class="btn btn-success btn-lg btn-block" type="submit" name="eliminar"><font style="vertical-align:inherit;">Eliminar dato</font></button>
    </div>
    </form>
    </div>
      </div>
      </div>

<br>
      <div class="container" align="center" >
        <div class="col-sm-5">
      <form action="ingresardatosproyectobd.php" method="post">
        <button class="btn btn-lg btn-block btn-success" type="submit" name="registrar">
          <font style="vertical-align:inherit;">Resgistrarse</font>
        </button>
        <br>
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

      </form>
      </div>
      </div>

      <div class="container" align="center" >
        <div class="col-sm-5">
      <form action="modificar.php" method="post">
        <br>
        <h2 align="center">MODIFICAR</h2>

        <div class="form-group">
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Id Usuario" name="id" required>
        </div>

          <div class="form-group">
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nombres" name="nom" required>
          </div>

          <div class="form-group">
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Primer apellido" name="apell1" value="" required>
          </div>

          <div class="form-group">
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Segundo apellido" name="apell2" value="" required>
          </div>

          <div class="form-group">
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Dirección" name="direcc" value="" required>
          </div>

          <div class="form-group">
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Número de teléfono" name="telef" value="" required>
          </div>

          <div class="form-group">
            <input type="email" class="form-control" id="formGroupExampleInput" placeholder="E-mail" name="em" value="" required>
          </div>

          <div class="form-group">
            <input type="password" class="form-control" id="formGroupExampleInput" placeholder="Password" name="pass" value="" required>
          </div>

          <button class="btn btn-lg btn-block btn-success" type="submit" name="modificar">
            <font style="vertical-align:inherit;">Modificar</font>
          </button>

      </form>
      </div>
      </div>

  </body>
</html>
