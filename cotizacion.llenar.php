<?php
include("conexion.php");

$id = $_POST['id_orden_trabajo'];

$consulta = mysql_query("SELECT orden_trabajo.correlativo_ot, cliente.nombre, cliente.rut, cliente.fono, cliente.correo, cliente.direccion, ciudad.nombrec, equipo.serie_equipo, orden_trabajo.valorReparacion, orden_trabajo.repuesto, orden_trabajo.repuesto_uno, orden_trabajo.repuesto_dos, orden_trabajo.repuesto_tres, orden_trabajo.repuesto_cuatro, orden_trabajo.repuesto_cinco FROM orden_trabajo INNER JOIN cliente ON orden_trabajo.id_cliente=cliente.id_cliente INNER JOIN ciudad ON cliente.id_ciudad=ciudad.id_ciudad INNER JOIN equipo ON orden_trabajo.id_equipo=equipo.id_equipo WHERE id_orden_trabajo='$id'")or die(mysql_error());
$reg = mysql_fetch_object($consulta);

$da = $reg->correlativo_ot."/".$reg->nombre."/".$reg->rut."/".$reg->fono."/".$reg->correo."/".$reg->direccion."/".$reg->nombrec."/".$reg->serie_equipo."/".$reg->valorReparacion."/".$reg->repuesto."/".$reg->repuesto_uno."/".$reg->repuesto_dos."/".$reg->repuesto_tres."/".$reg->repuesto_cuatro."/".$reg->repuesto_cinco;

echo $da; 
?>