<?php
  include 'global/config.php';
  include 'global/conexion.php';
  include 'carrito.php';
  include 'templates/cabecera.php'
?>

<!-- Carrito -->
      <br/>
      <!--
      <?php //if($mensaje!=""){ ?>
      <div class="alert alert-succes">
          <?php //echo $mensaje ?>
      </div>
      <a href="mostrarCarrito.php" class="badge badge-succes">Ver carrito</a>
    <?php //}?>
  -->

  </div>

  <section class="site-blocks-cover overflow-hidden bg-light" id="home">
    <div class="container">
      <div class="row">
        <div class="col-md-7 align-self-center text-center text-md-left">
          <div class="intro-text">
            <h1 align="center">¡AHORA PUEDES COMPRAR <span class="d-md-block">EN LÍNEA!</span></h1>
          </div>
          <div align="center" class="">
          </br>
            <button type="button" onclick="window.location='#articulos'" class="btn btn-dark btn-md text-white">VER ARTICULOS</button>
          </br></br>
          </div>
        </div>
        <div class="col-md-5 align-self-end text-center text-md-right">
          <div align="center" class="">
          <img src="images/logoderecho.png" alt="Image"class="img-fluid cover-img">
        </div>
        </div>
      </div>
    </div>
  </section>

<!-- Carousel de articulos-->

<!--
<section class="site-section" id="banner" >

<style>
.mySlides {display:none;}
</style>
</head>


<div class="w3-content w3-section" style="max-width:1800px">
  <img class="mySlides" src="images/banner/banner-2.png" style="width:100%">
  <img class="mySlides" src="images/banner/banner.png" style="width:100%">
  <img class="mySlides" src="images/banner/banner-3.png" style="width:100%">
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}
  x[myIndex-1].style.display = "block";
  setTimeout(carousel, 10000); // Change image every 2 seconds
}
</script>

</section>
-->

<div class="container">



<!-- Tarjetas de articulos -->
<section class="site-section" id="articulos">
  <div class="" align="center"><h3>Articulos mas vendidos</h3>
  </br>
  </div>
      <div class="row">
        <?php
          $sentencia=$pdo->prepare("SELECT * FROM tblproductos LIMIT 16 ");
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



      <!-- DEPARTAMENTOS -->
      <section class="site-section" id="departamentos">
  <div class="" align="center"><h3>Departamentos</h3>
</br></br>
<form action="categoria.php" method="post">

  <div class="row">
    <div class="col-sm-6">
      <div class="card mb-5">
        <img
        class="card-img"
        src="images/tiendaphp/lineablanca.jpg"
        data-toggle="popover"
        data-trigger="hover"
        data-content="Línea Blanca y Electrónica"
        height="400px"

        >
        <div class="card-body">
          <h5 class="card-title">Línea Blanca y Electrónica</h5>
          <p class="card-text">Aquí encontraras blah blah blah</p>
          <button class="btn btn-primary" name="btnAccion" value="Línea Blanca y Electrónica" type="submit" class="btn btn-primary">Ver Articulos</button>

        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card mb-5">
        <img
        class="card-img"
        src="images/tiendaphp/electrodomesticos.jpg"
        data-toggle="popover"
        data-trigger="hover"
        data-content="Electrodomésticos"
        height="400px"

        >
        <div class="card-body">
          <h5 class="card-title">Electrodomésticos</h5>
          <p class="card-text">Aquí encontraras bla blah blah</p>
          <button class="btn btn-primary" name="btnAccion" value="Electrodomésticos" type="submit" class="btn btn-primary">Ver Articulos</button>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card mb-5">
        <img
        class="card-img"
        src="images/tiendaphp/muebleria.jpg"
        data-toggle="popover"
        data-trigger="hover"
        data-content="Mueblería"
        height="400px"

        >
        <div class="card-body">
          <h5 class="card-title">Mueblería</h5>
          <p class="card-text">Aquí encontraras blah blah blah</p>
          <button class="btn btn-primary" name="btnAccion" value="Mueblería" type="submit" class="btn btn-primary">Ver Articulos</button>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card mb-5">
        <img
        class="card-img"
        src="images/tiendaphp/perfumes.jpg"
        data-toggle="popover"
        data-trigger="hover"
        data-content="Perfumes"
        height="400px"

        >
        <div class="card-body">
          <h5 class="card-title">Perfumes</h5>
          <p class="card-text">Aquí encontraras blah blah blah</p>
          <button class="btn btn-primary" name="btnAccion" value="Perfumes" type="submit" class="btn btn-primary">Ver Articulos</button>
        </div>
      </div>
    </div>
  </div>
</form>
</div>
</section>
<?php
include 'templates/pie.php';
?>
