<!DOCTYPE html> <!-- Tipo  de DOCUEMTO-->
<html lang="es"> <!-- lenguaje que estamos trabajando nuestro sitio-->

<head>
<link rel="stylesheet" href="estilos/estilos.css"> <!-- solo para archivos externos-->
<meta charset="utf-8"> <!-- la codificacion de nuestra pagina-->
<title>CodeDesc %</title> <!-- nombre de la pestaña de mi navegador-->
<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
<link rel="stylesheet" href="owl/owl.carousel.min.css">
<link rel="stylesheet" href="owl/owl.theme.default.min.css">

<meta name="viewport"
content="width=device-width,
user-scalable=no"><!--evita que se haga zoom a la pagina-->
</head>

<body>
  <a id="whatsapp"
   href="https://api.whatsapp.com/send?phone=527225802879"><img src="imagenes/whatsapp24.png"></a>
<header> <!--encabezado de mi pagina-->
  <div class="menu"><!--etiqueta que sirve para contener  un elemento-->
    <div class="contenedor">
      <p class="logo">CODEDESC %</p> <!-- crear un parrafo -->

      <img class="menu-icon" src="imagenes/menu2.png" alt="">
      <nav> <!-- navigation  Definir un menú de navegación-->
      <ul class="lista-menu"><!-- lista no ordenada y <ol> lista ordenada pero con numeros-->
          <li><a href="#sobre-code"> Sobre CodeDesc</a></li> <!-- item de la lista -->
          <!--<a></a>todos los links que ya forman parte del contenido html  -->
          <li><a href="#funciones">Funciones</a></li>
          <li><a href="#tiendas"> Tiendas de Productos o Servicios</a></li>
          <li><a href="#por-que-usar"> ¿Por que Usar CodeDesc?</a></li>
          <li><a href="#blog"> Blog</a></li>
          <li><a href="#contacto"> Contacto</a></li>
      </ul>
      </nav>
    </div>
  </div>

  <div class="contenedor" id="contenedor-titulo-flex">
    <div class="contenedor-titulo">
      <h1>CodeDesc %</h1> <!-- titulo principal-->
      <h2>Salvando tu bolsillo</h2>
      <a href="Login/login.php">Empieza Ya!</a>
    </div>
  </div>
</header>


<main><!--CONTENIDO PRINCIPAL DE LA PAGINA-->
  <section id="sobre-code">
    <div class="contenedor">
      <h3>Sobre CodeDesc</h3>
        <div class="contenedor-sobrecode">
          <div class="tiendas">
            <img class="principal"src="imagenes/tiendas.png">
          </div>
            <div class="texto">
              <p>
              CodeDesc, nacio como un proyecto escolar,
              y personal con el objetivo de brindar
              descuentos a estudiantes, pero, porque
              limitarlo a un proyecto escolar, cuando
              se puede brindar este servicio a miles
              de personas mas.
              </p>
              <p>
                Ahorra tiempo y  dinero con codedesc,
                evita busquedas largas buscando cupones,
                codedesc, lo hace por ti, tu solo tienes
                que dar clic y seleccionar para que platarfoma estas
                buscando tu cupon o descuento disponible en el momento.
              </p>
              <a href="menu/menu.php">Mira los descuentos</a>
            </div>
        </div>
    </div>
  </section>

  <section id="funciones">
    <div class="contenedor">
      <h3>Funciones</h3>
      <div class="contenedor-funciones">
        <div class="funcion azul">
          <h4>Tiempo</h4>
            <p>Ahorra tiempo con CodeDesc,
            evita las tediosas busquedas de
            productos al mejor precio, no
            esperes mas por la ofertas,porque
            nosotros las traemos hacia ti</p>
            <img class="ico" src="imagenes/reloj.png">
            <img class="ondas"src="imagenes/fondotodo.png">
        </div>
        <div class="funcion rojo">
          <h4>Energia</h4>
            <p>Ahora mismo la cantidad de
            concentracion que tenemos diario
            es mucho menor debido a las diversas
            tareas que realizamo, CodeDesc, te ofrece
            la facilidad de ahorrarte toda la energia
            que gastarias en revisar pagina tras pagina
            para encontrar la mejor oferta.</p>
            <img class="ico" src="imagenes/energia.png">
            <img class="ondas"src="imagenes/fondotodo.png">
        </div>
        <div class="funcion verde">
          <h4>Dinero</h4>
            <p>Con los descuentos a tu disposicion
            no busques mas, comienza a ahorrar
            tu dinero, compra todo lo que necesites
            con la seguridad de que lo hiciste ahorrando</p>
            <img src="imagenes/ahorrar.png" class="ico">
            <img src="imagenes/fondoverde.png" class="ondas">
        </div>
      </div>
    </div>
  </section>


  <section id="tiendas">
    <div class="contenedor">
      <h3>Tiendas de Productos o Servicios</h3>
      <div class="owl-carousel owl-theme">
        <div class="item"> <a href="menu/tiendas/ubereats.php"> <img src="imagenes/ubereats.png"> </a> </div>
        <div class="item"> <a href="menu/tiendas/didifood.php"> <img src="imagenes/didifood.png"> </a> </div>
        <div class="item"> <a href="menu/tiendas/uber.php"> <img src="imagenes/uber.png"> </a> </div>
        <div class="item"> <a href="menu/tiendas/didi.php"> <img src="imagenes/didi.png"> </a> </div>
        <div class="item"> <a href="menu/tiendas/mc.php"> <img src="imagenes/mc.png"> </a> </div>
        <div class="item"> <a href="menu/tiendas/king.php"> <img src="imagenes/king.png"> </a> </div>
        <div class="item"> <a href="menu/tiendas/cinepolis.php"> <img src="imagenes/cinepolis.png"> </a> </div>
        <div class="item"> <a href="menu/tiendas/cinemex.php"> <img src="imagenes/cinemex.png"> </a> </div>
        <div class="item"> <a href="menu/tiendas/steam.php"> <img src="imagenes/steam.png"> </a> </div>
        <div class="item"> <a href="menu/tiendas/xbox.php"> <img src="imagenes/xbox.png"> </a> </div>
        <div class="item"> <a href="menu/tiendas/play.php"> <img src="imagenes/play.png"> </a> </div>
        <div class="item"> <a href="menu/tiendas/g2a.php"> <img src="imagenes/g2a.png"> </a> </div>
      </div>

    </div>
  </section>


  <section id="por-que-usar">
    <div class="contenedor">
      <h3>¿Por que usar CodeDesc?</h3>
      <div class="contenedor-usar">
        <div class="item2">
        <ul>
          <li><img class="ico2" src="imagenes/feliz.png"></img>
          <li>Amigable</li>
          <li>Nuestra interfaz esta diseñada
          para que sea comoda y amigable de Usar,
          agradable tanto para usuarios principiantes
          como para los que son mas experimentados.
        </li>
        </ul>
      </div>

      <div class="item2">
        <ul>
          <li><img class="ico2" src="imagenes/abrir.png"></img>
          <li>Accesible</li>
          <li>Es importante la accesibilidad, y CodeDesc
              no se queda atras por supuesto, por eso
              puedes visitarnos descuelquier dispositivo
              mobil, o computadora.</li>
        </ul>
      </div>

        <div class="item2">
        <ul>
          <li><img class="ico2" src="imagenes/actualizado.png"></img>
          <li>Actualizada</li>
          <li>La principal caracteristica que gustaria destacar,
              son las constantes actualizaciones de informacion,
              para siempre tener al dia las mejores ofertas,
              solo para ustedes.</li>
        </ul>
      </div>


      </div>
    </div>
  </section>

<section id="blog">
<div class="contenedor">
  <h3>Blog</h3>
  <div class="contenedor-publicaciones">
    <div class="publicacion">
      <img class="ico3" src="imagenes/compartir.png" alt="">
      <div class="contenido">
      <h4>Comparte tus propias Ofertas!</h4>
      <p>Por que detenernos aqui, si juntos
         como una comunidad podemos crecer.</p>
      <a href="Login/login.php">Unete a la Comunidad →</a>
    </div>
    </div>
    <div class="publicacion">
      <img class="ico3" src="imagenes/registrar.png" alt="">
      <div class="contenido">
      <h4>Registra tu Negocio!</h4>
      <p>¿Quieres darle impulso extra
          a tu negocio?, ven y registralo,
          publica tus ofertas y obten mas clientes.</p>
      <a href="">Registrar negocio →</a>
    </div>
    </div>
  </div>
</div>
</section>

<section id="que-esperas">
  <div class="contenedor">
    <h3>¿Que esperas para comenzar a ahorrar?</h3>
    <a href="menu/menu.php">Empezar a ahorrar</a>
  </div>
</section>

<section id="contacto">
  <?php
      if(@$_GET['i']=='ok') { // QUIERE DECIR QUE EL FORMULARIO SE ENVIO CORRECTAMENTE ?>

      <h3>Mensaje Enviado!! Espera Nuestra Respuesta!!</h3>

      <?php
      } else{
      ?>
  <div class="contenedor">
    <h3>Contacto</h3>
    <form action="envio-formulario.php" method="post" enctype="multipart/form-data">
    <input type="text" placeholder="Nombre" name="nombre" required>
    <input type="email" placeholder="Correo Electronico" name="email" required>
    <textarea placeholder="Mensaje" name="mensaje" required></textarea>
    <input type="submit" value="ENVIAR MENSAJE">
  </form>
   <?php } ?>

<div class="contacto-info">
  <div class="mail">
    <img src="imagenes/mail-icon.png" alt="">diegofrancom99@gmail.com</div>
  <div class="whatsapp">
    <img src="imagenes/whatsapp-icon.png"alt="">+52 7225802879</div>
</div>


  </div>
</section>

</main>



<footer>
  <div class="contenedor">
    <div class="redes">
     <a href="#"><img src="imagenes/facebook2.png"alt="imagen de facebook"></a>
     <a href="#"><img src="imagenes/twitter.png"alt="imagen de twitter"></a>
     <a href="#"><img src="imagenes/instagram.png"alt="imagen de instagram"></a>
    </div>
    <div class="parrafo">
      <p>© 2019 CodeDesc. Todos los derechos reservados.</p>
    </div>
  </div>

</footer>



<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
<script src="owl/owl.carousel.min.js"></script>

<script>
$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    dots:false,
    responsive:{
        0:{
            items:2 /*celulares*/
        },
        600:{
            items:3 /*tablets*/
        },
        1000:{
            items:4 /*escritorio*/
        }
    }
})
</script>

<script>

$(document).ready(function(){

$(window).scroll(function(){
  scroll = $(window).scrollTop();
  if(scroll > 100) {
    $('.menu').css({"position":"fixed"})
    $('.menu').css({"width":"100%"})
    $('.menu').css({"top":"0"})
    $('.menu').css({"background":"#fff"})
    $('.menu a').css({"color":"#000"})
    $('.logo').css({"color":"#000"})
    $('.menu').css({"box-shadow":"rgba(0, 0, 0, 0.3) 1px 1px 1px"})
    $('.menu').css({"z-index":"100"})
  } else {
    $('.menu').css({"position":"relative"})
    $('.menu').css({"background":"transparent"})
    $('.menu').css({"box-shadow":"rgba(0, 0, 0, 0) 1px 1px 1px"})
    $('.menu a').css({"color":"#fff"})
    $('.logo').css({"color":"#fff"})
  }
})
$('.menu-icon').click(function(){
  $('header nav').slideToggle();/* efecto de deslizamiento menu telefono*/
})
})
</script>


//Código Script para bloquear el clic derecho.  
<script type='text/javascript'>
	document.oncontextmenu = function(){return false}
</script>

</body>

</html>
