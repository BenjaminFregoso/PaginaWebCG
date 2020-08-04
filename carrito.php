<?php
session_start();

$mensaje="";

if(isset($_POST['btnAccion'])){
  switch($_POST['btnAccion']){
    case 'Agregar':
      if(is_numeric( openssl_decrypt($_POST['id'], COD, KEY ))){
        $id=openssl_decrypt($_POST['id'], COD, KEY );
      }else{
        $mensaje."id incorrecto ".$id;
      }

      if(is_string( openssl_decrypt($_POST['nombre'], COD, KEY ))){
        $nombre=openssl_decrypt($_POST['nombre'], COD, KEY );
      }else{
        $mensaje." nombre incorrecto".$id;
      }

      if(is_numeric( openssl_decrypt($_POST['cantidad'], COD, KEY ))){
        $cantidad=openssl_decrypt($_POST['cantidad'], COD, KEY );
      }else{
        $mensaje." cantidad incorrecta ".$id;
      }

      if(is_numeric( openssl_decrypt($_POST['precio'], COD, KEY ))){
        $precio=openssl_decrypt($_POST['precio'], COD, KEY );
      }else{
        $mensaje." precio incorrecto ".$id;
      }

      if(!isset($_SESSION['carrito'])){
        $producto = array(
          'id'=>$id,
          'nombre'=>$nombre,
          'cantidad'=>$cantidad,
          'precio'=>$precio
        );
        $_SESSION['carrito'][0]=$producto;
        $mensaje= "Producto agregado al carrito";
      }else{

        $NumeroProductos=count($_SESSION['carrito']);
        $producto = array(
          'id'=>$id,
          'nombre'=>$nombre,
          'cantidad'=>$cantidad,
          'precio'=>$precio
        );
        $_SESSION['carrito'][$NumeroProductos]=$producto;
        $mensaje= "Producto agregado al carrito";
      }
      //$mensaje= print_r($_SESSION,true);

    break;

    case "Eliminar":
    if(is_numeric( openssl_decrypt($_POST['id'], COD, KEY ))){
      $id=openssl_decrypt($_POST['id'], COD, KEY );
      foreach($_SESSION['carrito'] as $indice=>$producto){
        if($producto['id']==$id){
          unset($_SESSION['carrito'][$indice]);
          echo "<script>alert('Elemento borrado');</script>";
        }
      }
    }else{
      $mensaje."id incorrecto ".$id;
    }
    break;

  }
}

 ?>
