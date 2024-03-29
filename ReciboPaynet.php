<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Casa Guerrero</title>
<link href="pago.css" rel="stylesheet" type="text/css"/>
<link rel="icon" type="image/png" href="images/logo.png" />
</head>

<?php

$fvencida="";
$fmensualidad="";
$ftotal="";
$fliquidar="";
$fmonto ="";
$eleccion = "";
$fnombre="";

if(isset($_POST['fnombre'])){$fnombre = ($_POST['fnombre']);}else{$fnombre ="";}
$fpaterno="";
if(isset($_POST['fpaterno'])){$fpaterno = ($_POST['fpaterno']);}else{$fpaterno ="";}
$fmaterno="";
if(isset($_POST['fmaterno'])){$fmaterno = ($_POST['fmaterno']);}else{$fmaterno ="";}
$fcuenta="";
if(isset($_POST['fcuenta'])){$fcuenta = ($_POST['fcuenta']);}else{$fcuenta ="";}
$freferencia="";
if(isset($_POST['freferencia'])){$freferencia = ($_POST['freferencia']);}else{$freferencia="";}

if(array_key_exists('monto', $_POST)) {
            if(isset($_POST['fmonto'])){$monto = ($_POST['fmonto']);}else{$monto ="";}
						$eleccion =$monto;
        }
        else if(array_key_exists('vencida', $_POST)) {
          if(isset($_POST['fvencida'])){$fvencida = ($_POST['fvencida']);}else{$fvencida ="";}
					$eleccion =$fvencida;
        }
				else if(array_key_exists('mensualidad', $_POST)) {
          if(isset($_POST['fmensualidad'])){$fmensualidad = ($_POST['fmensualidad']);}else{$fmensualidad ="";}
					$eleccion =$fmensualidad;
        }
				else if(array_key_exists('total', $_POST)) {
          if(isset($_POST['ftotal'])){$ftotal = ($_POST['ftotal']);}else{$ftotal ="";}
					$eleccion =$ftotal;
        }
        else if(array_key_exists('liquidar', $_POST)) {
          if(isset($_POST['fliquidar'])){$fliquidar = ($_POST['fliquidar']);}else{$fliquidar ="";}
					$eleccion =$fliquidar;
        }
				require "vendor/autoload.php";
				$Bar = new Picqer\Barcode\BarcodeGeneratorHTML();
				$code = $Bar->getBarcode($freferencia, $Bar::TYPE_CODE_128);
?>
<body>
<div class="whitepaper">
	<div class="Header">

	<div class="Logo_empresa">
    	<img src="images/logo.png" alt="Logo">
    </div>
    <div class="Logo_paynet">
    	<div>Servicio a pagar</div>
    	<img src="images/paynet_logo.png" alt="Logo Paynet">
    </div>
    </div>
    <div class="Data">
    	<div class="Big_Bullet">
        	<span></span>
        </div>
    	<div class="col1">
        	<h3>Fecha límite de pago</h3>
            <h4>No Aplica</h4>
						<div align="center">
						<?php
						echo  "$code";
						?>
					</div>
        	<center><span><?php echo "$freferencia";?></span></center>
            <small>En caso de que el escáner no sea capaz de leer el código de barras, escribir la referencia tal como se muestra.</small>
          </br>
            <small style="color:red;"><center><u><b> IMPORTANTE: </b></u></center> </br>
              <p align="justify">
                Por cuestiones del sistema utilizado por FARMACIAS GUADALAJARA y FARMACIAS DEL AHORRO, el cajero les solicitará elegir una de las líneas aéreas que les arroja su sistema para aplicar su pago (ej. Volaris, Vivaaerobus o Tar). FAVOR DE COMENTAR AL CAJERO QUE CUALQUIER LÍNEA AÉREA ES CORRECTA.
            </p>
            </small>

        </div>
        <div class="col2">
					<h2>Total a pagar</h2>
            <h1>$<?php echo "$eleccion";?><span>.00</span><small> MXN</small></h1>
            <span class="note"></br>La comisión por recepción del pago varía de acuerdo a los términos y condiciones que cada cadena comercial establece.</span>

        </div>
    </div>
    <div class="DT-margin"></div>
    <div class="Data">
    	<div class="Big_Bullet">
        	<span></span>
        </div>
    	<div class="col1">
        	<h3>Detalles de la compra</h3>
        </div>
	</div>
    <div class="Table-Data">
    	<div class="table-row color1">
				<div>Titular de la cuenta</div>
					<span><?php echo "$fnombre $fpaterno $fmaterno"?></span>
        </div>
    	<div class="table-row color2">
				<div>Descripción</div>
					<span>Abono a la cuenta <?php echo "$fcuenta";?> de Casa Guerrero</span>
        </div>
    	<div class="table-row color2"  style="display:none">
        	<div>&nbsp;</div>
            <span>&nbsp;</span>
        </div>
    	<div class="table-row color1" style="display:none">
        	<div>&nbsp;</div>
            <span>&nbsp;</span>
        </div>
    </div>
    <div class="DT-margin"></div>
    <div>
        <div class="Big_Bullet">
        	<span></span>
        </div>
    	<div class="col1">
        	<h3>Cómo realizar el pago</h3>
            <ol>
            	<li>Acude a cualquier tienda afiliada</li>
                <li>Entrega al cajero el código de barras y menciona que realizarás un pago de servicio Paynet</li>
                <li>Realizar el pago de tu abono en efectivo por el monto a depositar </li>
                <li>Conserva el ticket para cualquier aclaración</li>
								<li>Cuando llegues a tu casa, toma una fotografía clara del comprobante de pago</li>
								<li>Envíalo por medio de un mensaje de WhatsApp al número 33-3614-9014</li>
            </ol>
            <small>Si tienes dudas comunícate a Casa Guerrero al teléfono 3614-9014 o al correo cobros@casaguerrero.com.mx</small>
        </div>
    	<div class="col1">
        	<h3>Instrucciones para el cajero</h3>
            <ol>
            	<li>Ingresar al menú de Pago de Servicios</li>
                <li>Seleccionar Paynet</li>
                <li>Escanear el código de barras o ingresar el núm. de referencia</li>
                <li>Ingresa la cantidad total a pagar</li>
                <li>Cobrar al cliente el monto total más la comisión</li>
                <li>Confirmar la transacción y entregar el ticket al cliente</li>
            </ol>
            <small>Para cualquier duda sobre como cobrar, por favor llamar al teléfono +52 (55) 5351 7371 en un horario de 8am a 9pm de lunes a domingo</small>
        </div>
    </div>

    <div class="logos-tiendas">

	    <ul>
		    <li><img src="images/01.png" width="100" height="50"></li>
		    <li><img src="images/dogger_trainer_3.png" width="100" height="50"></li>
		    <li><img src="images/03.png" width="100" height="50"></li>
		    <li><img src="images/04.png" width="100" height="50"></li>
		    <li><img src="images/05.png" width="100" height="50"></li>
		    <li><img src="images/Waldos.png" width="100" height="50"></li>
		    <li><img src="images/07.png" width="100" height="50"></li>
		    <li><img src="images/Extra.png" width="100" height="50"></li>
	    </ul>
        <div style="height: 90px; width: 190px; float: right; margin-top: 30px;">
	        ¿Quieres pagar en otras tiendas? visítanos en: www.openpay.mx/tiendas
        </div>


    </div>
    <div class="Powered">
      <img src="images/powered_openpay.png" alt="Powered by Openpay" width="150">
      <a href="#" id="download">Descargar recibo</a>
      <a onclick="goBack()">Regresar</a>
    </div>
	</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
<script>

html2canvas(document.body, {
  onrendered (canvas) {
    var link = document.getElementById('download');;
    var image = canvas.toDataURL();
    link.href = image;
    link.download = 'casaguerrero.png';
  }
 });

 function goBack() {
   window.history.back();
 }
</script>
</body>
</html>
