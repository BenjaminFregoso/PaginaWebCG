<?php
  include 'global/config.php';
  include 'carrito.php';
  include 'templates/cabecera.php'
?>

<br>
<h3>
Lista del carrito
</h3>
<?php if(!empty($_SESSION['carrito'])){ ?>
<table class="table table-light table-bordered">
  <tbody>
    <tr>
      <th width="40%">Descripción</th>
      <th width="15%" class="text-center" >Cantidad</th>
      <th width="20%" class="text-center" >Precio</th>
      <th width="20%" class="text-center">Total</th>
      <th width="5%" class="text-center">--</th>
    </tr>
    <?php $total = 0;?>
    <?php foreach($_SESSION['carrito'] as $indice=>$producto){?>
    <tr>
      <td width="40%"><?php echo $producto['nombre']?></td>
      <td width="15%" class="text-center"><?php echo $producto['cantidad']?> </td>
      <td width="20%" class="text-center"><?php echo $producto['precio']?></td>
      <td width="20%" class="text-center"><?php echo number_format($producto['precio']*$producto['cantidad'],2); ?></td>
      <td width="5%" class="text-center">

        <form action="" method="post">
          <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($producto['id'],COD,KEY) ?>">
          <button
          class="btn btn-danger"
          type="submit"
          name="btnAccion"
          value="Eliminar">Eliminar</button>
        </form>
      </td>
    </tr>
    <?php $total=$total+($producto['precio']*$producto['cantidad']); ?>
    <?php }?>
    <tr>
      <td colspan="3" align="right"><h3>Total</h3></td>
      <td align="right"><h3>$<?php echo number_format($total,2);?></h3></td>
      <td></td>
    </tr>
  </br></br>
    <tr>
      <div class="col-lg-12 bg-secondary">
      <td colspan="5">
        <form action="pagar.php" method="post">
          <div class="alert alert-succes">
            <label  for="my-input">Elije la forma de pago deseada:</label><br/><br/>
            <div class="form-group" align="center">


              <div class="cc-selector">
                <input checked="checked" id="casag" type="radio" name="credit-card" value="casag" />
                <label class="drinkcard-cc casag" for="casag"></label>

                <input id="tarjetas" type="radio" name="credit-card" value="tarjetas" />
                <label class="drinkcard-cc tarjetas" for="tarjetas"></label>

                <input id="paynet" type="radio" name="credit-card" value="paynet" />
                <label class="drinkcard-cc paynet"for="paynet"></label>
              </div>

          </div>
          <button class="btn btn-primary btn-lg btn-block" type="submit" name="btnAccion" value="Proceder">
            PROCEDER A PAGAR
          </button>
        </div>
      </form>
      </td>
    </div>
    </tr>
  </tbody>
</table>

<?php  }else{?>
  <div class="alert alert-succes">
    No hay productos en el carrito
  </div>
<?php }?>
<?php include 'templates/pie.php'?>
