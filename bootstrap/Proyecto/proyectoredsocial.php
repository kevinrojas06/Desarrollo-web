

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

    <title>Red social</title>
  </head>
  <body style="background:url(img/redsocial.jpg)fixed no-repeat center">

    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-primary">
      <a href="#" class="navbar-brand text-light"> <h2>Red Social</h2> </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item">
            <p class="text-light">Si no tienes cuenta: <a class="nav-link-active text-warning" href="proyectoredsocialregistro.php">Resgistrate</a> </p>
          </li>

        </ul>

        <form class="form-inline my-2 my-lg-0" action="codigoiniciarsesion.php" method="post">
          <input class="form-control mr-sm-2" type="text" placeholder="Usuario" name="usuario" required>
          <input class="form-control mr-sm-m2" type="password" name="Password" placeholder="Password" required>
          <button class="btn btn-success" type="submit" name="sesion">Inicia Sesión</button>
        </form>
      </div>
    </nav>


  </body>
</html>
