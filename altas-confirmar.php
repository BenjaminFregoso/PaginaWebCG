<?php
  include 'global/config.php';
  include 'global/conexion.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Casa Guerrero | Pagos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700, 900|Vollkorn:400i" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">

    <link rel="icon" type="image/png" href="images/logo.png" />
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300" id="home-section">

  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Cargando...</span>
    </div>
  </div>

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    <header class="site-navbar js-sticky-header site-navbar-target" role="banner" >

      <div class="container">
        <div class="row align-items-center">

          <div class="col-6 col-xl-2">
          <img src="images/logouno.png" onclick="window.location='index.html'" alt="Image" class="img-fluid cover-img"  width="40%" style="position: center; margin: auto;">
          </div>

          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="index.html" onclick="window.location='index.html'" class="nav-link">INICIO</a></li>
              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
    </header>

    <header class="site-navbar js-sticky-header site-navbar-target" role="banner" >

    </header>
<div class="site-wrap">

  <section class="site-section" id="pricing-section">
    <div class="container">
      <div class="row justify-content-center" data-aos="fade-up">
        <div class="col-lg-7 text-center heading-section mb-5">
        </br>
          <h2 class="mb-2 text-black heading">EL REGISTRO DE ARTICULOS</h2>
        </br>
          <?php
          $fnombre="";
          $fcodigo="";
          $fcredito="";
          $fcontado="";
          $fcantidad="";
          $fcorta="";
          $flarga="";
          $error="0";

          if(isset($_POST['btnAccion'])){
            switch($_POST['btnAccion']){
              case 'Guardar':
                try{

                  if(isset($_POST['fnombre'])){$fnombre = ($_POST['fnombre']);}else{$error="1";}
                  if(isset($_POST['fcodigo'])){$fcodigo = ($_POST['fcodigo']);}else{$error="1";}
                  if(isset($_POST['fcredito'])){$fcredito = ($_POST['fcredito']);}else{$error="1";}
                  if(isset($_POST['fcontado'])){$fcontado = ($_POST['fcontado']);}else{$error="1";}
                  if(isset($_POST['fcantidad'])){$fcantidad = ($_POST['fcantidad']);}else{$error="1";}
                  if(isset($_POST['fcorta'])){$fcorta = ($_POST['fcorta']);}else{$error="1";}
                  if(isset($_POST['flarga'])){$flarga = ($_POST['flarga']);}else{$error="1";}

                  if($error=="0"){
                    //Agregar guardado de articulos
                    echo '<h2 class="mb-2 text-black heading">SE REALIZÓ CON EXITO</h2>';
                  }else{
                    echo '<h2 class="mb-2 text-black heading">NO SE REALIZÓ</h2>';
                  }

                } catch (Exception $erro) {
                  echo '<h2 class="mb-2 text-black heading">NO SE REALIZÓ</h2>', $erro->getMessage(), "\n";
                }

              break;

              case "Eliminar":

              break;

            }
          }
           ?>
        </div>
      </div>
    </div>
  </section>

  </div>  <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/isotope.pkgd.min.js"></script>


  <script src="js/main.js"></script>


  </body>
</html>
