<?php
session_start();
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

    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="fuenteletras.css">
    <title>RED SOCIAL</title>
  </head>
  <body style="background-color:#036bfc;">
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-primary">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item">
          <p></p>
        </li>

      </ul>
    <form class="form-inline my-2 my-lg-0" action="codigocerrarsesion.php" method="post">
      <button class="btn btn-success" type="submit" name="cerrarsesion">Cerrar Sesión</button>
    </form>
    </div>
    </nav>
    <div class="jumbotron">
     <h1 class="text-success titulo">Bienvenido(@)</h1>
     <h3 class="text-success titulo"><?php echo $_SESSION['usuario'];?></h3>
     <hr class="my-4">
     <p class="titulo parrafo1">Usted ha ingresado a su interfaz de usuario. Sientase cómodo y disfrute de la mejor experiencia navegando.</p>
   </div>

<div class="container">
  <div class="row">

<div class="col-sm-4">
     <div class="card bg-success" style="width:18rem;">
        <img src="img/kremlin.jpg" alt="fotoperfil" class="card-img-top">
      <div class="card-body">
        <ul class="list-group list-group-flush">
          <li class="list-group-item bg-success"> <a class="nav-link text-light" href="#">PERFIL</a></li>
          <li class="list-group-item bg-success"> <a class="nav-link text-light" href="#">NOTICIAS</a></li>
          <li class="list-group-item bg-success"> <a class="nav-link text-light" href="#">CONFIGURACIÓN</a></li>
        </ul>
      </div>
     </div>
    </div>

    <div class="col-sm-5" style="margin-top:135px;">
    <div class="card bg-success" style="width:50rem;">
      <div class="card-body">
        <p class="card-text text-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sagittis at orci sit amet dapibus. Quisque dignissim eros sed convallis pretium. Mauris felis mauris, imperdiet sed erat quis, ultricies ultrices sapien. Fusce pulvinar aliquet nisi, a suscipit tellus suscipit ut. Nullam nec sapien vulputate, sollicitudin orci nec, vulputate dolor. Aliquam posuere lectus erat, et accumsan mi consectetur lacinia. Mauris tellus tellus, maximus nec dui at, dictum maximus tellus. Sed est est, suscipit nec tincidunt quis, lobortis at metus. Nullam imperdiet eros leo, a egestas quam fermentum at. Etiam non purus ex. Etiam nec mi purus. Quisque eget sollicitudin nunc. Curabitur nec risus ut mauris pellentesque eleifend sit amet sed est. Maecenas pharetra metus sit amet lorem scelerisque, finibus tincidunt nibh tristique. Mauris erat quam, lacinia quis sollicitudin eget, mollis vitae urna.<p>
      </div>
    </div>
    </div>

    <div class="col-sm-7" style="margin-left:380px; margin-bottom:20px;">
    <div class="card bg-success" style="width:50rem;">
      <div class="card-body">
        <p class="card-text text-light">Maecenas fermentum justo vitae ex eleifend volutpat. Aliquam quam ligula, commodo sit amet maximus vitae, laoreet a tellus. Curabitur pellentesque, risus sit amet elementum malesuada, erat justo rutrum nibh, a mollis tortor nisl dignissim est. Etiam sit amet vehicula nibh, nec tincidunt ipsum. Ut lobortis vulputate sem at fringilla. Nam ut odio viverra, rhoncus nisl nec, semper tellus. Aenean sed lacus consequat metus pellentesque convallis.<p>
      </div>
    </div>
    </div>

    <div class="col-sm-7" style="margin-left:380px; margin-bottom:20px;">
    <div class="card bg-success" style="width:50rem;">
      <div class="card-body">
        <p class="card-text text-light">Morbi lobortis tellus arcu, ut vestibulum odio venenatis ac. Proin efficitur, nunc vitae interdum viverra, purus nisl finibus diam, non laoreet quam odio id massa. Phasellus condimentum velit at ante ultrices luctus. Nam luctus, ex sit amet laoreet vehicula, lectus justo laoreet odio, at cursus est massa ut nisi. Praesent libero erat, vulputate eget est sed, pharetra tempus nulla. Nullam vulputate mauris nec velit euismod, quis consectetur metus sagittis. Mauris finibus consequat facilisis. Morbi in justo a purus malesuada malesuada at ut elit. Nulla facilisi. Aenean commodo leo non quam porttitor efficitur. Nunc ac sagittis erat, nec ultricies mi. Aliquam nunc sem, eleifend vitae efficitur in, semper et ligula. Vestibulum quis ligula in sapien interdum finibus. Mauris magna libero, tempor ac ipsum tempor, lobortis euismod risus.<p>
      </div>
    </div>
    </div>

    <div class="col-sm-7" style="margin-left:380px; margin-bottom:20px;">
    <div class="card bg-success" style="width:50rem;">
      <div class="card-body">
        <p class="card-text text-light">Integer porta ligula sit amet velit cursus aliquam. Etiam sed nibh a elit vulputate consectetur. Curabitur mollis lorem in suscipit vulputate. Nam quis metus non magna mattis efficitur. Mauris suscipit, nunc bibendum interdum lacinia, velit ipsum dapibus nisi, ac semper orci nulla at justo. In feugiat laoreet metus, eget dictum massa. Aliquam erat volutpat. Suspendisse quis ligula purus. Vestibulum nec viverra lacus, quis eleifend libero. Sed bibendum, augue vitae varius cursus, dui metus ornare lectus, in hendrerit turpis velit in dui. Etiam gravida, turpis sit amet volutpat ornare, est quam tempus nisl, et finibus lorem massa eget ligula. Nulla efficitur convallis luctus. Morbi placerat luctus felis eget bibendum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin semper sagittis interdum.<p>
      </div>
    </div>
    </div>

</div>
</div>

  </body>
</html>
