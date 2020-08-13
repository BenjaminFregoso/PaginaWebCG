<?php
$nombre_temporal = $_FILES['archivo']['tmp_name'];
$nombre =$_FILES['archivo']['name'];
move_upload_file($nombre_temporal, 'images/articulos/'.$nombre);
echo 'Hola';
 ?>
