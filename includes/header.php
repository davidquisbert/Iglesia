<?php
ob_start();
include('init.php');
?>

<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="css/normalize.css">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=PT+Sans:wght@700&family=Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/colorbox.css">
  <link rel="stylesheet" href="../css/">
  <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" data-auto-replace-svg="nest"></script>
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <script src="js/vendor/modernizr-3.11.2.min.js"></script>

</head>

<body>

  <header class="site-header">
    <div class="hero">
      <div class="contenido-header">
        <nav class="redes-sociales">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
        </nav>
        <div class="informacion-evento">
          <p class="fecha"><i class="fas fa-calendar-alt" aria-hidden="true"></i> 10-12</p>
          <p class="ciudad"><i class="fas fa-map-marker-alt" aria-hidden="true"></i> Santa Cruz, BO</p>
        <h1 class="nombre-sitio">Paz de Dios</h1>
        <p class="slogan">El Mejor lugar para encontrarse con <span>Dios</span></p>
      </div>
      </div>

    </div>
  </header>

  <div class="barra">
    <div class="contenedor clearfix">
        <div class="logo">
            <a href="../church">
                <img src="img/logo.png" alt="logo Paz de Dios">
            </a>

        </div>


    <div class="menu-movil">
        <span></span>
        <span></span>
        <span></span>
    </div>

    <nav class="navegacion-principal">
        <a href="conferencia.php">Conferencia</a>
        <a href="calendario.php">Calendario</a>
        <a href="invitados.php"">Invitado</a>
        <a href="registro.php">Reservaciones</a>

        <?php if (!$session->is_signed_in()) {?>
            <a href="#mc_embed_signup" class="boton_newsletter"><i class="fas fa-user-circle"></i> Iniciar Sesion</a>
            <?php }else{?>
            <a href="logout.php" ><i class="fas fa-user-circle"></i> Cerrar Sesion</a>
        <?php } ?>
    </nav>
  </div> <!--contenedor-->
  </div> <!--barra-->
