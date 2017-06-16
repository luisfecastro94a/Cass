<?php
include("conexion.php");

$id = $_POST['id_proveedor'];


$consulta = mysql_query("SELECT razon_social, direccion, fono, nombre_contacto, fono_contacto, cargo_contacto FROM proveedor  WHERE id_proveedor='$id'")or die(mysql_error());
$reg = mysql_fetch_object($consulta);
$da = $reg->razon_social."/".$reg->razon_social."/".$reg->direccion."/".$reg->fono."/".$reg->nombre_contacto."/".$reg->fono_contacto."/".$reg->cargo_contacto;

echo $da; 

?>