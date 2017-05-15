<?php
include("conexion.php");

$id = $_POST['id_cliente'];


$consulta = mysql_query("SELECT cliente.nombre, cliente.rut, cliente.fono, cliente.correo, cliente.giro, cliente.direccion, cliente.nombre_contacto,cliente.fono_contacto, cliente.correo_contacto, cliente.cargo_contacto,cliente.condicion_pago, ciudad.nombrec FROM cliente INNER JOIN ciudad ON cliente.id_ciudad=ciudad.id_ciudad  WHERE id_cliente='$id'")or die(mysql_error());
$reg = mysql_fetch_object($consulta);
$da = $reg->nombre."/".$reg->rut."/".$reg->fono."/".$reg->correo."/".$reg->direccion."/".$reg->nombrec;

echo $da; 
 


?>