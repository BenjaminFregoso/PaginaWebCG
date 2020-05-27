<!doctype html>
<html lang="en">
  <head>
    <title>Casa Guerrero | Historial</title>
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
                  <li><a href="#home" class="nav-link">INICIO</a></li>
                  <li><a href="#ayuda" class="nav-link">AYUDA</a></li>
                  <li><a href="pagos.html" onclick="window.location='pagos.html'" class="nav-link">SALIR</a></li>
                </ul>
              </nav>
            </div>


            <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>

          </div>
        </div>
        </div>
      </header>

<!-- SECCION DESGLOSE-->
<section class="site-section " id="home">
  <div class="container">
    <div class="row justify-content-center" data-aos="fade-up">
      <div class="col-lg-6 text-center heading-section mb-5">
<h2 class="text-black mb-2"><br>HISTORIAL DE ÚLTIMO ABONO</br></br></h2>
<div style="overflow-x:auto;">
          <table class="table" align="center">
  <thead>
    <tr align="center">
      <th scope="col">Cuenta</th>
      <th scope="col">Nombre</th>
      <th scope="col">Fecha</th>
      <th scope="col">Abono</th>
    </tr>
  </thead>
  <tbody>

<!-- SECCION PHP -->
<?php
 $dia="";
 $mes="";
 $anio="";
 $diaaux="";
 $mesaux="";
 $anioaux="";
 $fecha="";
 $operacion="";
 $cantidad="";
 $nombre="";
 $paterno="";
 $materno="";
 $ultimoabono=0;
 $ultimafecha="";
 $cuenta="00285-04-1";

 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "dbcredito";

 /*
 $servername = "localhost";
 $username = "casaguer_consultar";
 $password = "mCF5T[wctL*G";
 $dbname = "casaguer_dbcredito";
 */
  function obtenerCuentas()
  {
      global $servername, $username, $password,$dbname,$cuenta,$nombre,$paterno,$materno,$ultimoabono,$ultimafecha;
      $conn = new mysqli($servername, $username, $password,$dbname);
      // Check connection
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }

      $sql = "SELECT Cuenta, Nombre, Paterno, Materno FROM clientes";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
              $cuenta = $row["Cuenta"];
              $nombre = $row["Nombre"];
              $paterno = $row["Paterno"];
              $materno =$row["Materno"];
              $ultimoabono=0;
              ultimoAbono($cuenta);
              ?>
              <tr align="center">
              <th scope="row"><?php echo "$cuenta";?></th>
              <td><?php echo "$nombre $paterno $materno";?></td>
              <td><?php echo "$ultimafecha";?></td>
              <td><?php echo "$ultimoabono";?></td>
              </tr>
              <?php
          }
          //IMPRIMIR SOLO RECIENTES
          $result->close();
          $conn->close();
      }

  }

  function ultimoAbono($cuenta)
  {
    global $servername, $username, $password,$dbname,$cuenta,$nombre,$paterno,$materno,$ultimoabono,$anio,$mes,$dia,$ultimafecha;
    $conn = new mysqli($servername, $username, $password,$dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT Feabono, Operacion FROM movtos WHERE Cuenta='$cuenta' ORDER BY Operacion asc";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $fecha = $row["Feabono"];
            $operacion = $row["Operacion"];

            $anioaux = substr($fecha, 6, 4);
            $mesaux = substr($fecha, 3, 2);
            $diaaux = substr($fecha, 0, 2);
            //echo "Dia: $diaaux Mes: $mesaux Anio: $anioaux </br>";

            if($anioaux >= $anio AND $mesaux >= $mes AND $diaaux >= $dia){
              $dia = $diaaux;
              $mes = $mesaux;
              $anio = $anioaux;
            }else if($anioaux > $anio){
              $dia = $diaaux;
              $mes = $mesaux;
              $anio = $anioaux;
            }else if($anioaux == $anio AND $mesaux > $mes){
              $dia = $diaaux;
              $mes = $mesaux;
              $anio = $anioaux;
            }else if($anioaux == $anio AND $mesaux == $mes AND $diaaux > $dia){
              $dia = $diaaux;
              $mes = $mesaux;
              $anio = $anioaux;
            }else{
              //echo "NO ES MAYOR $dia $mes $anio</br>";
            }
            //echo "$operacion ||  $fecha || $dia $mes $anio </br></br></br>";
        }
        //IMPRIMIR SOLO RECIENTES
        $result->close();
        $conn->close();
        $conn = new mysqli($servername, $username, $password,$dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT Operacion, Cantidad, Feabono FROM movtos WHERE Cuenta='$cuenta' ORDER BY Operacion asc";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $fecha = $row["Feabono"];
                $cantidad = $row["Cantidad"];
                $operacion = $row["Operacion"];

                $anioaux = substr($fecha, 6, 4);
                $mesaux = substr($fecha, 3, 2);
                $diaaux = substr($fecha, 0, 2);

                if($anioaux == $anio AND $mesaux == $mes AND $diaaux == $dia){
                  $fechamostrar = substr($fecha, 0, 10);
                  $cantidadmostrar = substr($cantidad, 0, -2);
                  $ultimoabono += intval($cantidad);
                  $ultimafecha=$fechamostrar;
                }
              }
            }

    } else {
        //echo "0 results";
    }

    $result->close();
    $conn->close();
  }



obtenerCuentas();

?>
</tbody>
</table>
</br></br>
<button onclick="goBack()" class="btn btn-dark btn-md text-white">REGRESAR</button>

<script>
function goBack() {
  window.history.back();
}
</script>
</div>
</div>
</div>

</section>

</div>

<script src="js/jquery-3.3.1.js"></script>
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
