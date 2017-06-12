<?php
include("conexion.php");

$id = $_POST['id_equipo'];


$consulta = mysql_query("SELECT equipo.serie_equipo, equipo.sintoma_cliente, marca.marca, estado.estado, equipo.id_cliente, cliente.nombre, cliente.rut, cliente.fono, cliente.correo, cliente_encargado.nombreE FROM equipo INNER JOIN marca ON equipo.id_marca=marca.id_marca INNER JOIN estado ON equipo.id_estado=estado.id_estado INNER JOIN cliente ON equipo.id_cliente=cliente.id_cliente INNER JOIN cliente_encargado ON equipo.id_cliente_encargado=cliente_encargado.id_cliente_encargado  WHERE id_equipo='$id'")or die(mysql_error());
$reg = mysql_fetch_object($consulta);
$da = $reg->serie_equipo."/".$reg->sintoma_cliente."/".$reg->marca."/".$reg->estado."/".$reg->id_cliente."/".$reg->nombre."/".$reg->rut."/".$reg->fono."/".$reg->correo."/".$reg->nombreE;

echo $da; 
 
?>