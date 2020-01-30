<?php
require('conexionbd.php');
?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/didifood.css">
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <title>DidiFood</title>
  </head>





  <body>
    <header>
    <div class="menu">
      <a href="../../index.php" class="logo">CODEDESC %</a>

      <!--<img class="menu-icon" src="img/fondo.jpg" alt="">-->
      <nav>
      <ul class="lista-menu">
          <li class="m" ><a href="../../index.php #sobre-code"> Sobre CodeDesc</a></li>
          <li class="m" ><a href="../../index.php #funciones">Funciones</a></li>
          <li class="m" ><a href="../../index.php #tiendas"> Tiendas de Productos o Servicios</a></li>
          <li class="m"  class="m"  class="m" ><a href="../../index.php #por-que-usar"> ¿Por que Usar CodeDesc?</a></li>
          <li class="m"  class="m" ><a href="../../index.php #blog"> Blog</a></li>
          <li class="m" ><a href="../../index.php #contacto"> Contacto</a></li>
      </ul>
      </nav>
    </header>

    </div>
    <div class="contenido">
      <div class="contenedor">
         <ul>
           <li><h3>DESCUENTOS DIDIFOOD</h3></li>
           <img src="img/didifood.png" alt="">
           <li><h4> <a href="#">NUEVOS</a> </h4></li>
           <li><h4> <a href="#">POPULARES</a> </h4></li>
           <li><h4> <a href="#">AGREGAR (+)</a> </h4></li>
         </ul>
      </div>





        <div class="descuentos">
          <ul>
            <li class="desc">
            <table cellspacing="70">
                <thead>
                <tr>
                  <td><h2>CÓDIGO DESCUENTO</h2></td>
                  <td> <h2>DESCRIPCIÓN</h2> </td>
                  <td> <h2>FECHA EMISIÓN</h2> </td>
                  <td> <h2>CADUCIDAD</h2> </td>
                </tr>
                </thead>
                  <tbody>
                <?php
                $sql="select *from descuentos where Empresa='didifood'";
                $resultado=mysqli_query($conexion,$sql);
                while ($mostrar=mysqli_fetch_array($resultado)) {
                ?>
                <tr>
                  <td><?php echo $mostrar['Codigo_descuento']; ?></td>
                  <td><?php echo $mostrar['Descripcion']; ?></td>
                  <td><?php echo $mostrar['Fecha_emision']; ?></td>
                  <td><?php echo $mostrar['Caducidad']; ?></td>
                </tr>
                <?php
              }
              mysqli_close($conexion);
              ?>
                </tbody>
            </table>
            </li>


          </ul>
        </div>

      </div>


  </body>





</html>
