<?php
include("conexion.php");

$id = $_POST['id_cliente'];


$consulta = mysql_query("SELECT cliente.nombre, cliente.rut, cliente.fono, cliente.correo, cliente.direccion, ciudad.nombrec  FROM cliente INNER JOIN ciudad ON cliente.id_ciudad=ciudad.id_ciudad  WHERE id_cliente='$id'")or die(mysql_error());
$reg = mysql_fetch_object($consulta);
$da = $reg->nombre."/".$reg->nombre."/".$reg->rut."/".$reg->fono."/".$reg->correo."/".$reg->direccion."/".$reg->nombrec;

echo $da; 
 


?>