
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

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
    <link rel="stylesheet" href="css/selector.css">
    <link rel="stylesheet" href="css/carousel.css">
    <link rel="icon" type="image/png" href="images/logo.png" />
    <title> Tienda Casa Guerrero</title>
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
                    <li><a href="index.php" onclick="window.location='pagos.php'" class="nav-link">INICIO</a></li>
                    <li><a href="index.php" onclick="window.location='index.php'" class="nav-link">TIENDA</a></li>
                    <li><a href="pagos.php" onclick="window.location='pagos.php'" class="nav-link">MI CRÉDITO</a></li>
                    <li><a href="abona-credito.php" onclick="window.location='abona-credito.php'" class="nav-link">COMO ABONAR</a></li>
                    <li><a href="" onclick="" class="nav-link">MI CUENTA</a></li>
                    <li><a href="mostrarCarrito.php" class="nav-link">CARRITO (<?php
                      echo (empty($_SESSION['carrito']))?0:count($_SESSION['carrito']);
                    ?>)</a></li>
                  </ul>
                </nav>
              </div>


              <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>

            </div>
          </div>
</div> <!-- Div de site-wrap -->
<br><br>
    <div class="container">
