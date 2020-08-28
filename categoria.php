<?php
  include 'global/config.php';
  include 'global/conexion.php';
  include 'carrito.php';
  include 'templates/cabecera.php'
?>

<!-- Carrito -->
      <br/>
      <?php if($mensaje!=""){ ?>
      <div class="alert alert-succes">
          <?php echo $mensaje ?>
      </div>
      <a href="mostrarCarrito.php" class="badge badge-succes">Ver carrito</a>
    <?php }?>



<!-- Tarjetas de articulos -->
<section class="site-section" id="articulos">
  <?php
  $categoria="";
  if(isset($_POST['btnAccion'])){$categoria = ($_POST['btnAccion']);}else{$categoria ="";}
  echo '<div class="" align="center"><h3>'.$categoria.'</h3>';
  $conn = new mysqli($servername, $username, $password,$dbname);
  $sql = "SELECT * FROM tbldepartamentos WHERE nombre ='$categoria'";
  $result = $conn->query($sql);
  if (!$result) {
      trigger_error('Invalid query: ' . $conn->error);
  }
  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        $categoria= $row["id"];
      }
    }
   ?>
  </br>
  </div>
      <div class="row">
        <?php

          $sentencia=$pdo->prepare("SELECT * FROM tblproductos WHERE id_departamento = '$categoria'");
          $sentencia->execute();
          $listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
          //print_r($listaProductos);
        ?>

        <?php foreach($listaProductos as $producto){?>
          <div class="col-3">
            <div class="card border-light mb-5" style="max-width: 15rem;">
                <img
                title="<?php echo $producto['nombre']?>"
                alt="<?php echo $producto['nombre']?>"
                class="card-img-top"
                src="<?php echo $producto['imagen']?>"
                data-toggle="popover"
                data-trigger="hover"
                data-content="<?php echo $producto['descripcion']?>"
                height="317px"
                >
                <div class="card-body">
                  <span><?php echo substr($producto['nombre'],0,25)?></span>
                  <h5 class="card-title">$<?php echo $producto['precio_credito']?></h5>

                  <form action="" method="post">

                    <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($producto['id'],COD,KEY) ?>">
                    <input type="hidden" name="nombre" id="nombre" value="<?php echo openssl_encrypt($producto['nombre'],COD,KEY)?>">
                    <input type="hidden" name="precio" id="precio" value="<?php echo openssl_encrypt($producto['precio_credito'],COD,KEY)?>">
                    <input type="hidden" name="cantidad" id="cantidad" value="<?php echo openssl_encrypt(1,COD,KEY)?>">

                    <button class="btn btn-primary" name="btnAccion" value="Agregar" type="submit">Agregar al carrito</button>
                  </form>

                </div>
            </div>
          </div>
        <?php }?>
      </div>
      </section>


<?php
include 'templates/pie.php';
?>
