<?php
include("conexion.php");

$id = $_POST['id_cotizacion'];


$consulta = mysql_query("SELECT equipo.serie_equipo, equipo.sintoma_cliente, marca.marca, estado.estado FROM equipo INNER JOIN marca ON equipo.id_marca=marca.id_marca INNER JOIN estado ON equipo.id_estado=estado.id_estado  WHERE id_equipo='$id'")or die(mysql_error());
$reg = mysql_fetch_object($consulta);
$da = $reg->serie_equipo."/".$reg->sintoma_cliente."/".$reg->marca."/".$reg->estado;

echo $da; 
 


?>