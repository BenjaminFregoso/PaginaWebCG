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
    <script type="text/javascript">
    function checkCuenta(textbox) {
    var textInput = document.getElementById(textbox).value;
    if(textInput.length == 5){
      textInput = textInput + "-";
      document.getElementById(textbox).value = textInput;
    }
    if(textInput.length == 8){
      textInput = textInput + "-";
      document.getElementById(textbox).value = textInput;
    }
    //alert(textInput);
    }

    function validaNumericos(event) {
        if(event.charCode >= 48 && event.charCode <= 57){
          return true;
         }
         return false;
    }
    </script>
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
          <h2 class="mb-2 text-black heading">PORTAL DE ENTRADAS A INVENTARIO</h2>
        </div>
      </div>
    </div>
  </section>

    <!-- Formulario -->
    <section class="" id="contact-section">
      <div class="container">
        <div class="row no-gutters">

          <div class="bg-primary">
            <form action="altas-confirmar.php" class="p-5 contact-form" align="center" method="post" autocomplete="off" >
                <h4 class="h4 mb-5 heading">POR FAVOR RELLENA TODOS LOS CAMPOS</br></br></h4>
                  <div class="row form-group">
                    <div class="col-md-12">
                      <label for="fcuenta">NOMBRE DEL PRODUCTO</label>
                      <input type="text"  required id="fnombre" name="fnombre" maxlength="50" title="Nombre del árticulo" type="text" class="form-control">
                    </div>
                  </div>
                </br>
                  <div class="row form-group">
                                        <div class="col-md-12">
                                          <label for="fdepartamento">DEPARTAMENTO</label>
                                        </br>
                                          <select name="fdepartamento">
                                          <?php
                                            $sentencia=$pdo->prepare("SELECT * FROM tbldepartamentos");
                                            $sentencia->execute();
                                            $listaDepartamentos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
                                            //print_r($listaProductos);
                                          ?>
                                          <?php foreach($listaDepartamentos as $r){?>
                                            <option value="<?php echo $r['id'];?>"><?php echo $r['nombre']; ?></option>
                                          <?php } ?>
                                          </select>
                                          </div>
                                    </div>
                                  </br>
                  <div class="row form-group">
                    <div class="col-md-12">
                      <label for="fcuenta">CÓDIGO</label>
                      <input type="text" required id="fcodigo"  name="fcodigo" maxlength="10" title="Código interno de árticulo" type="number" class="form-control" onkeypress="return validaNumericos(event);">
                    </div></br>

                  </div>
                    </br>


                    <div class="row form-group">
                    <div class="col-md-6">
                      <label for="foperacion">PRECIO DE CRÉDITO</label>
                      <input type="text" required id="fcredito" size="100%" name="fcredito" type="number" maxlength="10" class="form-control" onkeypress='return validaNumericos(event)' title="Precio de crédito Casa Guerrero">
                    </div>
                    <div class="col-md-6">
                      <label for="foperacion">PRECIO DE CONTADO</label>
                      <input type="text" required id="fcontado" size="100%" name="fcontado" type="number" maxlength="10" class="form-control" onkeypress='return validaNumericos(event)' title="Precio de contado">
                    </div>
                    </div>
                      </br>

                  <div class="row form-group">
                    <div class="col-md-12">
                      <label for="fmaterno">CANTIDAD DE ARTICULOS</label>
                      <input type="text" required id="fcantidad" name="fcantidad" type="text" title="Cantidad" maxlength="5" class="form-control" type="number" onkeypress="return validaNumericos(event);">
                    </div>
                  </div>
                </br>
                  <div class="row form-group">
                  <div class="col-md-12">
                    <label for="fpaterno">DESCRIPCIÓN CORTA</label>
                    <input type="text" required id="fcorta" name="fcorta" type="text" maxlength="50" class="form-control" title="Descripción corta">
                  </div>
                  </div>
                </br>
                  <div class="row form-group">
                    <div class="col-md-12">
                      <label for="fnombre">DESCRIPCIÓN LARGA</label>
                      <input type="text" required id="flarga" name="flarga" type="text" maxlength="255" class="form-control" title="Descripción larga">
                      </div>
                  </div>
                  </br>
                <div class="row form-group" >
                  <div class="col-md-12">
                    <p></p>
                    <input type="submit" name="btnAccion" value="Guardar" class="btn btn-dark btn-md text-white">
                  </div>
                </div>
              </form>

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
