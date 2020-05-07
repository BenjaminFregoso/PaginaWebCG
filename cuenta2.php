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
                  <li><a href="#home" class="nav-link">INICIO</a></li>
                  <li><a href="#paynet" class="nav-link">DEPOSITOS</a></li>
                  <li><a href="#bancos" class="nav-link">CUENTAS</br>BANCARIAS</a></li>
                  <li><a href="#ayuda" class="nav-link">AYUDA</a></li>
                  <li><a href="pagos.html" onclick="window.location='pagos.html'" class="nav-link">SALIR</a></li>
                </ul>
              </nav>
            </div>


            <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>

          </div>
        </div>
      </header>

<!-- SECCION DESGLOSE-->
<section class="site-section " id="home">
  <div class="container">
    <div class="row justify-content-center" data-aos="fade-up">
      <div class="col-lg-6 text-center heading-section mb-5">
<h2 class="text-black mb-2"><br>DESGLOSE DE CUENTA </br></br></h2>


<script type="text/javascript">
function validaNumericos(event) {
    if(event.charCode >= 48 && event.charCode <= 57){
      return true;
     }
     return false;
}
</script>
<!-- SECCION PHP -->
<?php
$mostrarnombre = "";
$mostraroperacion = "";
$mostrarultultfecha = "";
$mostrarabono = "";
$mostrarsigfecha = "";
$mostrarsaldoactual = "";
$mostrarimporte = "";
$mostrarinteres ="";


if(isset($_POST['fcuenta'])){$cuenta = ($_POST['fcuenta']);}else{$cuenta ="";}
if(isset($_POST['foperacion'])){$operacion = ($_POST['foperacion']);}else{$operacion ="";}
if(isset($_POST['fnombre'])){$fnombre = ($_POST['fnombre']);}else{$fnombre ="";}
if(isset($_POST['fpaterno'])){$fpaterno = ($_POST['fpaterno']);}else{$fpaterno ="";}
if(isset($_POST['fmaterno'])){$fmaterno = ($_POST['fmaterno']);}else{$fmaterno ="";}
if(isset($_POST['fcorreo'])){$fcorreo = ($_POST['fcorreo']);}else{$fcorreo ="";}
if(isset($_POST['fcel'])){$fcel = ($_POST['fcel']);}else{$fcel ="";}
if(isset($_POST['ftel'])){$ftel = ($_POST['ftel']);}else{$ftel ="";}
if(isset($_POST['fdom'])){$fdom = ($_POST['fdom']);}else{$fdom ="";}
if(isset($_POST['fdomnum'])){$fdomnum = ($_POST['fdomnum']);}else{$fdomnum ="";}
if(isset($_POST['fcol'])){$fcol = ($_POST['fcol']);}else{$fcol ="";}
if(isset($_POST['fmuni'])){$fmuni = ($_POST['fmuni']);}else{$fmuni ="";}

$mostrarnombre = "";
$mostraroperacion = "";
$mostrarultultfecha = "";
$mostrarabono = "";
$mostrarsigfecha = "";
$mostrarfechacompra = "";
$mostrarvence ="";
$aniovence = "";
$mesvence = "";
$diavence= "";
$diahoy ="";
$aniocompra="";
$mescompra = "";
$diacompra = "";
$mestotal = 0;
$mensualidadvecida = 0;
$abonototal = 0;
$ponderacion = 0;
$operacionvalida = 0;
$cuentavalida = 0;
$casounovalida = 0;
$casodosvalida = 0;
$casotresvalida = 0;
$abonoanttotal=0;
$interestotal = 0;
$mostrarliquidar = 0;
$total=0;
$cuentaux ="";
$referenciapaynet="";
/*
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbcredito";
*/
$servername = "localhost";
$username = "casaguer_consultar";
$password = "mCF5T[wctL*G";
$dbname = "casaguer_dbcredito";

  if($cuenta!=""){$ponderacion += 10;}
  if($operacion!=""){$ponderacion += 10;}
  if($fnombre!=""){$ponderacion += 6;}
  if($fpaterno!=""){$ponderacion += 6;}
  if($fmaterno!=""){$ponderacion += 6;}
  if($fcorreo!=""){$ponderacion += 1;}
  if($fcel!=""){$ponderacion += 1;}
  if($ftel!=""){$ponderacion += 1;}
  if($fdom!=""){$ponderacion += 1;}
  if($fdomnum!=""){$ponderacion += 1;}
  if($fcol!=""){$ponderacion += 1;}
  if($fmuni!=""){$ponderacion += 1;}

  //echo "Ponderacion: $ponderacion , $fdom , $fmuni , $cuenta </br>";

  //-----------------------------------------------------------------------------
  $user_agent = $_SERVER['HTTP_USER_AGENT'];


function getPlatform($user_agent) {
   $plataformas = array(
      'Windows 10' => 'Windows NT 10.0+',
      'Windows 8.1' => 'Windows NT 6.3+',
      'Windows 8' => 'Windows NT 6.2+',
      'Windows 7' => 'Windows NT 6.1+',
      'Windows Vista' => 'Windows NT 6.0+',
      'Windows XP' => 'Windows NT 5.1+',
      'Windows 2003' => 'Windows NT 5.2+',
      'Windows' => 'Windows otros',
      'iPhone' => 'iPhone',
      'iPad' => 'iPad',
      'Mac OS X' => '(Mac OS X+)|(CFNetwork+)',
      'Mac otros' => 'Macintosh',
      'Android' => 'Android',
      'BlackBerry' => 'BlackBerry',
      'Linux' => 'Linux',
   );
   foreach($plataformas as $plataforma=>$pattern){
      if (preg_match('/(?i)'.$pattern.'/', $user_agent))
         return $plataforma;
   }
   return 'Otras';
}
$SO = getPlatform($user_agent);
//echo "".$SO;

  //-----------------------------------------------------------------------------

  if($ponderacion<=19){header("Location: error.html"); //Poner pagina de error
  exit();}


  // CUENTAVALIDA-------------------------------
  if($cuenta!=""){
  $conn = new mysqli($servername, $username, $password,$dbname);

  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT Cuenta FROM clientes WHERE Cuenta='$cuenta'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
          //echo "Cuenta: " . $row["Cuenta"]. "</br>";
          $cuentavalida = 1;
      }
  } else {
    $cuentavalida = 0;
      //echo "0 results";
  }
  $result->close();
  $conn->close();
  }

  // OPERACIONVALIDA------------------------------
  if($operacion!="" AND $cuenta!=""){
  $conn = new mysqli($servername, $username, $password,$dbname);
  $sql = "SELECT opearcion FROM cargos WHERE opearcion='$operacion' AND cuenta = '$cuenta'";
  $result = $conn->query($sql);
  if (!$result) {
      trigger_error('Invalid query: ' . $conn->error);
  }
  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
          //echo "Cuenta: " . $row["Cuenta"]. "</br>";
          $operacionvalida = 1;
      }
  } else {
    $operacionvalida = 0;
      //echo "0 results";
  }
  $result->close();
  $conn->close();
  }

  //CASOUNOVALIDA -----------------------------------
  if($operacion=="" AND $cuenta==""){
  $puntos = 0;
  $conn = new mysqli($servername, $username, $password,$dbname);
  $sql = "SELECT Cuenta, Correo, telcel, telcasa, Domicilio, Interior, Colonia, municipio  FROM clientes WHERE Paterno='$fpaterno' AND Materno = '$fmaterno' AND Nombre = '$fnombre'";

  $result = $conn->query($sql);
  if (!$result) {
      trigger_error('Invalid query: ' . $conn->error);
  }
  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {

        if($fcorreo == $row["Correo"]){$puntos += 1;}
        if($ftel == $row["telcasa"]){$puntos += 1;}
        if($fcel == $row["telcel"]){$puntos += 1;}
        if($fdom == $row["Domicilio"]){$puntos += 1;}
        if($fdomnum == $row["Interior"]){$puntos += 1;}
        if($fcol == $row["Colonia"]){$puntos += 1;}
        if($fmuni == $row["municipio"]){$puntos += 1;}
          if($puntos >= 2 AND $cuenta == ""){
            $cuenta = $row["Cuenta"];
            $casounovalida = 1;
          }

      }
  } else {
    $casounovalida = 0;
      //echo "0 results";
  }
  $result->close();
  $conn->close();
}
  //CASODOSVALIDA -----------------------------------
  if($operacion=="" AND $cuenta!=""){
  $conn = new mysqli($servername, $username, $password,$dbname);
  $sql = "SELECT Cuenta FROM clientes WHERE Paterno='$fpaterno' AND Materno = '$fmaterno' AND Nombre = '$fnombre' AND Cuenta = '$cuenta'";

  $result = $conn->query($sql);
  if (!$result) {
      trigger_error('Invalid query: ' . $conn->error);
  }
  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        $casodosvalida = 1;
      }
  } else {
    $casodosvalida = 0;
      //echo "0 results";
  }
  $result->close();
  $conn->close();
}
  //CASOTRESVALIDA -----------------------------------
  if($operacion!="" AND $cuenta==""){

  $conn = new mysqli($servername, $username, $password,$dbname);
  $sql = "SELECT cuenta FROM cargos WHERE opearcion = $operacion";

  $result = $conn->query($sql);
  if (!$result) {
      trigger_error('Invalid query: ' . $conn->error);
  }
  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        $cuentaux=$row["cuenta"];
      }
  } else {
      //echo "0 results";
  }
  $result->close();
  $conn->close();

  $conn = new mysqli($servername, $username, $password,$dbname);
  $sql = "SELECT Cuenta FROM clientes WHERE Paterno='$fpaterno' AND Materno = '$fmaterno' AND Nombre = '$fnombre'";

  $result = $conn->query($sql);
  if (!$result) {
      trigger_error('Invalid query: ' . $conn->error);
  }
  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        if($cuentaux==$row["Cuenta"]){
          $cuenta=$row["Cuenta"];
          $casotresvalida=1;
        }
      }
  } else {
    $casotresvalida=0;
      //echo "0 results";
  }
  $result->close();
  $conn->close();

}
//VALIDACIONES



    if(($cuentavalida==1 and $operacionvalida == 1) or $casounovalida == 1 or $casodosvalida == 1 or $casotresvalida == 1){



      // Create connection
      $conn = new mysqli($servername, $username, $password,$dbname);
      $sql = "SELECT Nombre, Paterno, Materno FROM clientes WHERE Cuenta = '$cuenta'";
      $result = $conn->query($sql);
      if (!$result) {
          trigger_error('Invalid query: ' . $conn->error);
      }
      if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
            $fnombre= $row["Nombre"];
            $fpaterno=$row["Paterno"];
            $fmaterno=$row["Materno"];
            $letrapaterno=substr($fnombre, 0, 1);
            $numeropaterno="";
            switch ($letrapaterno) {
    case "A":
        $numeropaterno="01";
        break;
    case "B":
        $numeropaterno="02";
        break;
    case "C":
        $numeropaterno="03";
        break;
        case "D":
            $numeropaterno="04";
            break;
            case "E":
                $numeropaterno="05";
                break;
                case "F":
                    $numeropaterno="06";
                    break;
                    case "G":
                        $numeropaterno="07";
                        break;
                        case "H":
                            $numeropaterno="08";
                            break;
                            case "I":
                                $numeropaterno="09";
                                break;
                                case "J":
                                    $numeropaterno="10";
                                    break;
                                    case "K":
                                        $numeropaterno="11";
                                        break;
                                        case "L":
                                            $numeropaterno="12";
                                            break;
                                            case "M":
                                                $numeropaterno="13";
                                                break;
                                                case "N":
                                                    $numeropaterno="14";
                                                    break;
                                                    case "O":
                                                        $numeropaterno="15";
                                                        break;
                                                        case "P":
                                                            $numeropaterno="16";
                                                            break;
                                                            case "Q":
                                                                $numeropaterno="17";
                                                                break;
                                                                case "R":
                                                                    $numeropaterno="18";
                                                                    break;
                                                                    case "S":
                                                                        $numeropaterno="19";
                                                                        break;
                                                                        case "T":
                                                                            $numeropaterno="20";
                                                                            break;
                                                                            case "U":
                                                                                $numeropaterno="21";
                                                                                break;
                                                                                case "V":
                                                                                    $numeropaterno="22";
                                                                                    break;
                                                                                case "W":
                                                                                    $numeropaterno="23";
                                                                                    break;
                                                                                    case "X":
                                                                                        $numeropaterno="24";
                                                                                        break;
                                                                                        case "Y":
                                                                                            $numeropaterno="25";
                                                                                            break;
                                                                                            case "Z":
                                                                                                $numeropaterno="26";
                                                                                                break;
                                                                                                default:
                                                                                                $numeropaterno="00";
                                                                                                break;

}
            $referenciapaynet = "000150".$numeropaterno.str_replace("-", "", $cuenta);
            //echo "$referenciapaynet";
            ?>

              <h2 class="text-black mb-2"><?php echo "$fnombre $fpaterno $fmaterno";?></h2>
            </br>
              <h3 class="text-black mb-2">CUENTA: <?php echo "$cuenta";?></h3>
              </div>
              </div>
              <?php if($SO=="Android" OR $SO=="BlackBerry" OR $SO=="iPad" OR $SO=="iPhone"){ //SIPOSITIVO MOVIL ?>
              <div align="center">
              <image>
                <img src="images/swipe.gif" alt="Image" class="img-fluid" width="20%">
              </image>
              </div>
            <?php } ?>
  <div style="overflow-x:auto;">
            <table class="table" align="center">
    <thead>
      <tr align="center">
        <th scope="col">OPERACIÓN</th>
        <th scope="col">FECHA DE COMPRA</th>
        <th scope="col">IMPORTE</th>
        <th scope="col">SALDO ACTUAL</th>
        <th scope="col">ABONO MENSUAL</th>
        <th scope="col">ÚLTIMO ABONO</th>
        <th scope="col">MENSUALIDAD VENCIDA</th>
        <th scope="col">VENCE</th>
        <th scope="col">INTERÉS</th>
      </tr>
    </thead>
    <tbody>
              <?php

          }
      } else {
          //echo "0 results";
      }
      $result->close();
      $conn->close();

      // Create connection
      $conn = new mysqli($servername, $username, $password,$dbname);
      $sql = "SELECT cuenta, opearcion, ultpago, abonomen, saldoact, saldoant, importe, fecompra, vence, interes, enganche FROM cargos WHERE cuenta = '$cuenta'";
      $result = $conn->query($sql);
      if (!$result) {
          trigger_error('Invalid query: ' . $conn->error);
      }
      if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
            $operacion= $row["opearcion"];
            $mostrarultultfecha = $row["ultpago"];
            $mostrarabono = $row["abonomen"];
            $mostrarultultfecha =substr($mostrarultultfecha, 0, -15);
            //$abonototal += intval($mostrarabono);
            $mostrarsaldoactual=  $row["saldoact"];
            if($mostrarabono > $mostrarsaldoactual){
              $mostrarabono = $mostrarsaldoactual;
            }
            $mostrarimporte = $row["importe"];
            $mostrarfechacompra = substr($row["fecompra"], 0, -15);
            $mostrarvence = substr($row["vence"], 0, -15);
            $mostrarinteres = $row["interes"];
              ?>
              <tr align="center">
        <th scope="row"><?php echo "$operacion";?></th>
        <td><?php echo "$mostrarfechacompra";?></td>
        <td>$<?php echo "$mostrarimporte";?></td>
        <td>$<?php echo "$mostrarsaldoactual";?></td>
        <td><strong>$<?php echo "$mostrarabono";?></strong></td>
        <td><?php echo "$mostrarultultfecha";?></td>
        <td>$
          <?php
          $enganche = $row["enganche"];
          $anios = substr($mostrarultultfecha, 6, 4);
          $meses = substr($mostrarultultfecha, 3, -5);
          $dias = substr($mostrarultultfecha, 0, 2);

          $aniovence = substr($mostrarvence, 6, 4); //Nuevo
          $mesvence = substr($mostrarvence, 3, -5); //Nuevo
          $diavence = substr($mostrarvence, 0, 2); //Nuevo

          $aniocompra = substr($mostrarfechacompra, 6, 4);
          $mescompra = substr($mostrarfechacompra, 3, -5);
          $diacompra = substr($mostrarfechacompra, 0, 2);

          $today = getdate();
          $meshoy = $today['mon'];
          $aniohoy = $today['year'];
          $diahoy = $today['mday'];

          $mesesvan =0;
          $mesesvan += (intval($aniohoy) - intval($aniocompra))*12;
          if(intval($meshoy)  < intval($mescompra)){
            $mesesvan += intval($meshoy) - intval($mescompra);
          }else{
            $mesesvan += intval($meshoy) - intval($mescompra);
          }
          if(intval($diahoy)  < intval($diacompra)){
            $mesesvan -= 1;
          }

          $ideal = intval($mesesvan) *  intval($mostrarabono);
          $real = intval($mostrarimporte) -  intval($mostrarsaldoactual);
          $actual = $ideal - $real;

          //echo "meses: $mesesvan actual: $actual real: $real ideal: $ideal mostrarabono: $mostrarabono  ";
          if($actual == 0){
            $mensualidadvecida = 0;
          }else{
            if($actual > 0){
              $mensualidadvecida = $actual;
            }else{
              $mensualidadvecida = 0;
            }
          }

          if($mensualidadvecida > $mostrarsaldoactual){
            $mensualidadvecida = $mostrarsaldoactual;
          }
          echo "$mensualidadvecida";
          $abonototal += $mensualidadvecida;
          if($mostrarabono+$mensualidadvecida > $mostrarsaldoactual){
            $mestotal += $mostrarsaldoactual -$mensualidadvecida;
          }else{
            $mestotal += intval($mostrarabono);
          }

          $mostrarliquidar += $mostrarsaldoactual;
          $interestotal += intval($mostrarinteres);
          ?>
        </td>
        <td><?php echo "$mostrarvence";?></td>
        <td>$<?php echo "$mostrarinteres";?></td>


      </tr>
              <?php
          }
          ?>
        </tbody>
  </table>
  </div>
          <?php
      } else {
          //echo "0 results";
      }
      $result->close();
      $conn->close();
    }else{
      header("Location: error.html"); //Poner pagina de error
      exit();
    }




$mostrarliquidar += $interestotal;
$abonototal += $interestotal;
$total= intval($mestotal) + intval($abonototal);

if($total > $mostrarliquidar){
  $mestotal = 0;
  $total = $mostrarliquidar;
}
?>
<div class="row" align="left">
    <div class="block_service">
    </br>

      <h3>&nbsp;&nbsp;&nbsp;MENSUALIDADES VENCIDAS: $<?php echo "$abonototal";?></h3>
      <h3>+ MENSUALIDAD DE <?php
      $bMeses = array("void","Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
      $meshoy = $bMeses[$today["mon"]];
      $meshoy=strtoupper($meshoy);
      echo "$meshoy: ";
      ?>$<?php echo "$mestotal";?></h3></br>
      <h3>= ABONO TOTAL SUGERIDO: $<?php echo "$total";?></h3>
    </div>

  <div class="col-md-6 mb-4 col-lg-4" data-aos="fade-up" data-aos-delay="">
    <div class="block_service">
    </div>
  </div>
  <div class="col-md-6 mb-4 col-lg-4" data-aos="fade-up" data-aos-delay="">
    <div class="block_service">
    </br>

      <h3>SALDO PARA LIQUIDAR: $<?php echo "$mostrarliquidar";?></h3>
    </div>
  </br>
  <div align="center">
    <button type="button" class="btn btn-dark btn-md text-white"><a href="#paynet">GENERAR REFERENCIA</a></button>
  </div>
  </div>

</div>
</section>


<!--PAYNET -->

<section class="site-section bg-primary trainers" id="paynet">
  <div class="container">
    <div class="row justify-content-center" data-aos="fade-up">

      <div class="col-lg-9 text-center heading-section mb-5">
        <h2 class="text-black mb-2">PAGA EN EFECTIVO EN TIENDAS DE CONVENIENCIA</br></br></h2>
        <h3 class="mb-4">GENERA UNA REFERENCIA PARA ABONAR FACILMENTE EN ESTOS ESTABLECIMIENTOS.</h3>
      </br>
        <image>
          <img src="images/tiendaspaynet.png" alt="Image" class="img-fluid">
        </image>
</br></br></br>
      <form action="ReciboPaynet.php" align="center" class="p-5 contact-form" method="post">
        <input type="hidden" id="fnombre" name="fnombre" value="<?php echo "$fnombre";?>" />
        <input type="hidden" id="fpaterno" name="fpaterno" value="<?php echo "$fpaterno";?>" />
        <input type="hidden" id="fmaterno" name="fmaterno" value="<?php echo "$fmaterno";?>" />
        <input type="hidden" id="fvencida" name="fvencida" value="<?php echo "$abonototal";?>" />
        <input type="hidden" id="fmensualidad" name="fmensualidad" value="<?php echo "$mestotal";?>" />
        <input type="hidden" id="ftotal" name="ftotal" value="<?php echo "$total";?>" />
        <input type="hidden" id="fcuenta" name="fcuenta" value="<?php echo "$cuenta";?>" />
        <input type="hidden" id="freferencia" name="freferencia" value="<?php echo "$referenciapaynet";?>" />

      <h4>GENERAR REFERENCIA PARA MENSUALIDADES VENCIDAS: $<?php echo "$abonototal";?></h4>
      <input type="submit" value="GENERAR REFERENCIA" name="vencida" class="btn btn-dark btn-md text-white">
    </br></br></br>
      <h4>GENERAR REFERENCIA PARA MENSUALIDAD DE <?php
      echo "$meshoy: ";
      ?>$<?php echo "$mestotal";?></h4>
      <input type="submit" value="GENERAR REFERENCIA" name="mensualidad" class="btn btn-dark btn-md text-white">
    </br></br></br>
      <h4>GENERAR REFERENCIA PARA ABONO TOTAL SUGERIDO: $<?php echo "$total";?></h4>
      <input type="submit" value="GENERAR REFERENCIA" name="total" class="btn btn-dark btn-md text-white">
    </br></br></br>

    <h4>GENERAR REFERENCIA PARA OTRO MONTO $</h4>
    <input type="text" id="fmonto" name="fmonto" type="number" maxlength="10" class="form-control" onkeypress='return validaNumericos(event)' title="Monto que desea pagar">
    </br>

    <input type="submit" value="GENERAR REFERENCIA" name="monto" class="btn btn-dark btn-md text-white">
      </div>
    </form>
    </div>
  </div>

</section>




<!-- BANCOS-->
    <section class="site-section" id="bancos">
      <div class="container">
        <div class="row justify-content-center" data-aos="fade-up">
          <div class="col-lg-6 text-center heading-section mb-5">
            <h2 class="text-black mb-2">TRANSFERENCIA O DEPÓSITO A CUENTA BANCARIA</h2>
          </div>
        </div>

        <div class="row hover-1-wrap mb-5 mb-lg-0">
          <div class="col-12">
            <div class="row">
              <div class="mb-4 mb-lg-0 col-lg-6 order-lg-2" data-aos="fade-right">
                <a href="#" class="hover-1">
                  <img src="images/dogger_img_sm_3.png" alt="Image" class="img-fluid">
                </a>
              </div>
              <div class="col-lg-5 mr-auto text-lg-right align-self-center order-lg-1" data-aos="fade-left">
                <h2 class="text-black">Cuenta:</h2>
                <p class="mb-4">4009375429</p>
                <h2 class="text-black">Clabe interbancaria:</h2>
                <p class="mb-4">021320040093754299</p>
              </div>
            </div>
          </div>
        </div>

        <div class="row hover-1-wrap mb-5 mb-lg-0">
          <div class="col-12">
            <div class="row">
              <div class="mb-4 mb-lg-0 col-lg-6"  data-aos="fade-left">
                <a href="#" class="hover-1">
                  <img src="images/dogger_img_sm_1.png" alt="Image" class="img-fluid">
                </a>
              </div>
              <div class="col-lg-5 ml-auto align-self-center"  data-aos="fade-right">
                <h2 class="text-black">Sucursal:</h2>
                <p class="mb-4">4472</p>
                <h2 class="text-black">Cuenta:</h2>
                <p class="mb-4">560</p>
                <h2 class="text-black">Clabe interbancaria:</h2>
                <p class="mb-4">002320447200005609</p>
              </div>
            </div>
          </div>
        </div>

        <div class="row hover-1-wrap">
          <div class="col-12">
            <div class="row">
              <div class="mb-4 mb-lg-0 col-lg-6 order-lg-2" data-aos="fade-right">
                <a href="#" class="hover-1">
                  <img src="images/dogger_img_sm_2.png" alt="Image" class="img-fluid">
                </a>
              </div>
              <div class="col-lg-5 mr-auto text-lg-right align-self-center order-lg-1" data-aos="fade-left">
                <h2 class="text-black">Cuenta:</h2>
                <p class="mb-4">0137011865</p>
                <h2 class="text-black">Clabe interbancaria:</h2>
                <p class="mb-4">012320001370118658</p>

              </div>
            </div>
          </div>
        </div>

        <div class="row justify-content-center" data-aos="fade-up">
          <div class="col-lg-6 text-center heading-section mb-5">

              <h2 class="text-black mb-2"><br><br>RAZÓN SOCIAL</h2>
              <p class="mb-4">COMERCIAL DEL RETIRO S.A. DE C.V.<br><br>
              SE LE INVITA A AGREGAR COMO REFERENCIA SU NÚMERO DE CLIENTE O
              EL NOMBRE COMPLETO DEL TITULAR DE LA CUENTA DE CASA GUERRERO,
              ESTO NOS AYUDA A REGISTRAR SU PAGO DE MANERA CORRECTA.</p>
          </div>
      </div>
    </div>
    </section>

    <!--AVISO -->

    <section class="site-section bg-primary trainers" id="aviso">
      <div class="container">
        <div class="row justify-content-center" data-aos="fade-up">
          <div class="col-lg-7 text-center heading-section mb-5">
            <h4>AVISO IMPORTANTE:</br></br>
    </h4>
    <a>
      El tiempo aproximado de procesamiento de pagos para que se vea reflejado en el
       portal es de 3 a 5 días hábiles después de haber enviado tu comprobante de
        pago a nuestra cuenta oficial de WhatsApp al número 33-36-14-90-14 (10 dígitos).</br>
         Si no lo ves reflejado en este tiempo te invitamos a contactarnos al teléfono
         fijo 36-14-90-14 para que una persona del departamento de crédito pueda apoyarte.</a>

          </div>
        </div>
      </div>

    </section>
    <!--AYUDA-->
<section class="site-section" id="ayuda">
  <div class="container">
    <div class="row justify-content-center" data-aos="fade-up">
      <div class="col-lg-7  text-left heading-section mb-5">
      <h5 align="center">UNA VEZ HAYAS REALIZADO TU ABONO POR CUALQUIERA DE LOS
        MEDIOS DISPONIBLES, DEBERÁS ENVIARNOS A NUESTRO NÚMERO DE WHATSAPP
        33-3614-9014 (10 DÍGITOS) EN UN HORARIO DE LUNES-SÁBADO DE 10:00 A.M.
        A 3:00 P.M. LA SIGUIENTE INFORMACIÓN  :</h5></br>
        <div class="text-center heading-section mb-5">
        <a href="https://wa.me/5213336149014" align="center"><img src="images/whats.png" alt="Image" class="img-fluid" width="80"></a>
        </div>
        1. FOTOGRAFÍA CLARA O IMPRESIÓN DE PANTALLA DEL COMPROBANTE DE PAGO.</br>
  2. NOMBRE DEL TITULAR DE LA CUENTA A LA QUE SE LE DEPOSITARÍA EL ABONO.</br>
  3. NÚMERO DE CLIENTE.</br>
  4. LUGAR DONDE REALIZÓ EL PAGO (DEPÓSITO EN SUCURSAL BANCARIA Ó TRANSFERENCIA BANCARIA).</br></br>
  SI HUBIERA ALGUNA INFORMACIÓN ADICIONAL QUE NECESITÁRAMOS PARA PODER CORROBORAR TU DEPÓSITO
  Y ACREDITARLO CORRECTAMENTE, NOS COMUNICAREMOS LO ANTES POSIBLE CONTIGO. MUCHAS GRACIAS.


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
