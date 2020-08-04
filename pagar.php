<?php
  include 'global/config.php';
  include 'global/conexion.php';
  include 'carrito.php';
  include 'templates/cabecera.php'
?>

<?php
if($_POST){
  $total=0;
  $SID=session_id();

  foreach($_SESSION['carrito'] as $indice=>$producto){
    $total+= $producto['precio']*$producto['cantidad'];
  }
  $sentencia=$pdo->prepare("INSERT INTO `tblventas`
    (`id`, `tipo_venta`, `forma_pago`, `forma_pago_enga`, `status`, `fecha`, `clave_transaccion`, `id_comprador`,`total`)
  VALUES (NULL, '', '', '', '', NOW(), :tipoVenta, '', :total)");

  $sentencia->bindParam(":tipoVenta",$SID);
  $sentencia->bindParam(":total",$total);
  $sentencia->execute();

  $idVenta = $pdo->lastInsertId();

  foreach($_SESSION['carrito'] as $indice=>$producto){
    $sentencia=$pdo->prepare("INSERT INTO `tblmovtosprod`
    (`id`, `codigo_articulo`, `precio`, `fecha`, `tipo_mov`, `cantidad`, `id_venta`, `status`)
    VALUES (NULL, :codigo_articulo, :precio, NOW(), 'VENTA', :cantidad, :id_venta, 'PENDIENTE')");

    $sentencia->bindParam(":id_venta",$idVenta);
    $sentencia->bindParam(":codigo_articulo",$producto['id']);
    $sentencia->bindParam(":precio",$producto['precio']);
    $sentencia->bindParam(":cantidad",$producto['cantidad']);
    $sentencia->execute();

    //echo $idVenta."||".$producto['id']."||".$producto['precio']."||".$producto['cantidad'];
  }

  //echo "<h3>".$total."</h3>";
}
?>

<div class="jumbotron text-center">
  <h1 class="display-4">Paso final</h1>
  <hr class="my-4">
  <p class="lead"> Estás a punto de pagar con FORMA_PAGO la cantidad de:
    <h4>$<?php echo number_format($total,2); ?></h4>
  </p>
  <p>Su pedido se creará para envio una vez que se procese el pago.<br/>
    <strong>Para aclaraciones WHATSAPP</strong>
  </p>
</div>

<?php
include 'templates/pie.php';
?>
