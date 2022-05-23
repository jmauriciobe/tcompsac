<?php 
  $directoryURI = $_SERVER['REQUEST_URI'];
  $path = parse_url($directoryURI, PHP_URL_PATH);
  $components = explode('/', $path);
  $first_part = basename($_SERVER['PHP_SELF'], ".php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>TCOMP SAC</title>
    <link rel="icon" type="image/png" href="img/favicon.ico" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://maps.google.com/maps/api/js?key=AIzaSyBR_2mPF97bIjOpCpdSGr-xwk9NPm9WKFE"></script>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <style>
      body {
      font-family: 'Ubuntu', sans-serif;
      }
    </style>
  </head>
  <body oncontextmenu='return false' onselectstart='return false' ondragstart="return false">
    <header>
      <!-- Navbar -->
      <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
        <div class="container">
          <!-- Brand -->
          <a class="navbar-brand">
          <img src="img/logo_principal.png" height="50" alt="">
          </a>
          <!-- Collapse -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
          <!-- Links -->
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left -->
            <ul class="navbar-nav mr-auto">
              <li class="nav-item <?php if ($first_part=='welcome') {echo 'active'; } else  {echo '';}?>">
                <a class="nav-link" href="<?=base_url('welcome')?>">Inicio
                <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item <?php if ($first_part=='nosotros') {echo 'active'; } else  {echo '';}?>">
                <a class="nav-link" href="<?=base_url('nosotros')?>">Nosotros</a>
              </li>
              <li class="nav-item <?php if ($first_part=='cliente') {echo 'active'; } else  {echo '';}?>">
                <a class="nav-link" href="<?=base_url('cliente')?>">Clientes</a>
              </li>
              <li class="nav-item <?php if ($first_part=='producto') {echo 'active'; } else  {echo '';}?>">
                <a class="nav-link" href="<?=base_url('producto')?>">Productos</a>
              </li>
            </ul>
            <!-- Right -->
            <ul class="navbar-nav nav-flex-icons">
              <li class="nav-item">
                <a href="https://www.facebook.com/mdbootstrap" class="nav-link disabled" target="_blank">
                <i class="fa fa-facebook"></i>
                </a>
              </li>
              <li class="nav-item">
                <a href="https://twitter.com/MDBootstrap" class="nav-link disabled" target="_blank">
                <i class="fa fa-twitter"></i>
                </a>
              </li>
              <li class="nav-item">
                <a href="https://www.youtube.com/watch?v=7MUISDJ5ZZ4" class="nav-link disabled" target="_blank">
                <i class="fa fa-youtube mr-3"></i>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('contacto')?>" class="nav-link border border-light rounded">
                <i class="fa fa-phone mr-2"></i>Contáctanos
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- Navbar -->
      <!--Carousel Wrapper-->
      <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
        <!--Indicators-->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-1z" data-slide-to="1"></li>
          <li data-target="#carousel-example-1z" data-slide-to="2"></li>
          <li data-target="#carousel-example-1z" data-slide-to="3"></li>
        </ol>
        <!--/.Indicators-->
        <!--Slides-->
        <div class="carousel-inner" role="listbox">
          <!--First slide-->
          <div class="carousel-item active">
            <div class="view" style="background-image: url('img/fondo_01.jpg'); background-repeat: no-repeat; background-size: cover;">
              <!-- Mask & flexbox options-->
              <div class="mask rgba-black-light d-flex justify-content-center align-items-center">
                <!-- Content -->
                <div class="text-center white-text mx-5 wow fadeIn">
                  <h1 class="mb-4">
                    <strong>TCOMP SAC</strong>
                  </h1>
                  <p>
                    <strong>
                  <h3>"Verdaderas Soluciones Informáticas Confiables"</h3></strong>
                  </p>
                  <p class="mb-4 d-none d-md-block">
                    <strong>
                  <h5>Tenemos todo lo necesario para ayudarte a crecer.</h5></strong>
                  </p>
                  <a href="./contacto.php" class="btn btn-outline-white btn-lg">COTIZAR
                  <i class="fa fa-shopping-cart ml-2"></i>
                  </a>
                </div>
                <!-- Content -->
              </div>
              <!-- Mask & flexbox options-->
            </div>
          </div>
          <!--/First slide-->
          <!--Second slide-->
          <div class="carousel-item">
            <div class="view" style="background-image: url('img/fondo_02.jpg'); background-repeat: no-repeat; background-size: cover;">
              <!-- Mask & flexbox options-->
              <div class="mask rgba-black-light d-flex justify-content-center align-items-center">
                <!-- Content -->
                <div class="text-center white-text mx-5 wow fadeIn">
                  <h1 class="mb-4">
                    <strong>Asesoría Comercial Especializada</strong>
                  </h1>
                  <p>
                    <strong>
                  <h4>¿Necesitas un equipo para tu colaborador, para tu equipo de diseño o tal vez para tu gerente?</h4></strong>
                  </p>
                  <p class="mb-4 d-none d-md-block">
                    <strong>
                  <h5>Nosotros tenemos el equipo ideal para cada necesidad, solo necesitas brindarnos tus requisitos y te daremos la mejor alternativa.</h5></strong>
                  </p>
                  <a href="./contacto.php" class="btn btn-outline-white btn-lg">COTIZAR
                  <i class="fa fa-shopping-cart ml-2"></i>
                  </a>
                </div>
                <!-- Content -->
              </div>
              <!-- Mask & flexbox options-->
            </div>
          </div>
          <!--/Second slide-->
          <!--Third slide-->
          <div class="carousel-item">
            <div class="view" style="background-image: url('img/fondo_03.jpg'); background-repeat: no-repeat; background-size: cover;">
              <!-- Mask & flexbox options-->
              <div class="mask rgba-black-light d-flex justify-content-center align-items-center">
                <!-- Content -->
                <div class="text-center white-text mx-5 wow fadeIn">
                  <h1 class="mb-4">
                    <strong>Soporte Técnico Remoto y On Site</strong>
                  </h1>
                  <p>
                    <strong>
                  <h4>Solucionamos todo tipo de incovenientes con tus bienes informáticos</h4></strong>
                  </p>
                  <p class="mb-4 d-none d-md-block">
                    <strong>
                  <h5>No solo te ayudamos a reparar los desperfectos, tambien te asesoramos para que le saques el mayor provecho a tu inversión.</h5></strong>
                  </p>
                  <a href="./contacto.php" class="btn btn-outline-white btn-lg">COTIZAR
                  <i class="fa fa-shopping-cart ml-2"></i>
                  </a>
                </div>
                <!-- Content -->
              </div>
              <!-- Mask & flexbox options-->
            </div>
          </div>
          <!--/Third slide-->
          <!--Fourth slide-->
          <div class="carousel-item">
            <div class="view" style="background-image: url('img/fondo_04.png'); background-repeat: no-repeat; background-size: cover;">
              <!-- Mask & flexbox options-->
              <div class="mask rgba-black-light d-flex justify-content-center align-items-center">
                <!-- Content -->
                <div class="text-center white-text mx-5 wow fadeIn">
                  <h1 class="mb-4">
                    <strong>Sistemas de Videovigilancia</strong>
                  </h1>
                  <p>
                    <strong>
                  <h4>Las mejores soluciones en instalación y configuración de videovigilancia</h4></strong>
                  </p>
                  <p class="mb-4 d-none d-md-block">
                    <strong>
                  <h5>El mejor equipo especializado en instalación y configuración de sistemas de videovigilancia para la seguridad y tranquilidad de tu organización.</h5></strong>
                  </p>
                  <a href="./contacto.php" class="btn btn-outline-white btn-lg">COTIZAR
                  <i class="fa fa-shopping-cart ml-2"></i>
                  </a>
                </div>
                <!-- Content -->
              </div>
              <!-- Mask & flexbox options-->
            </div>
          </div>
          <!--/Fourth slide-->
        </div>
        <!--/.Slides-->
        <!--Controls-->
        <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
        </a>
        <!--/.Controls-->
      </div>
      <!--/.Carousel Wrapper-->
    </header>