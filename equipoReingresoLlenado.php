<?php
include("conexion.php");

$id = $_POST['id_equipo'];

$consulta = mysql_query("SELECT equipo.serie_equipo, equipo.id_equipo, equipo.id_cliente, cliente.nombre, cliente_encargado.nombreE, marca.marca, equipo.modelo FROM equipo INNER JOIN cliente ON equipo.id_cliente=cliente.id_cliente INNER JOIN cliente_encargado ON equipo.id_cliente_encargado=cliente_encargado.id_cliente_encargado INNER JOIN marca ON equipo.id_marca=marca.id_marca  WHERE id_equipo='$id'")or die(mysql_error());
$reg = mysql_fetch_object($consulta);
$da = $reg->serie_equipo."/".$reg->id_equipo."/".$reg->id_cliente."/".$reg->nombre."/".$reg->nombreE."/".$reg->marca."/".$reg->modelo;

echo $da; 

?>