<?php
include("conexion.php");

$id = $_POST['id_orden_trabajo'];

$consulta = mysql_query("SELECT orden_trabajo.correlativo_ot, cliente.nombre, cliente.rut, cliente.fono, cliente.correo, cliente.direccion, ciudad.nombrec, equipo.serie_equipo, orden_trabajo.valorReparacion, orden_trabajo.n_partner, orden_trabajo.marca, orden_trabajo.comentarioo, orden_trabajo.n_partner1, orden_trabajo.marca1, orden_trabajo.comentario1 , orden_trabajo.n_partner2, orden_trabajo.marca2, orden_trabajo.comentario2, orden_trabajo.n_partner3, orden_trabajo.marca3, orden_trabajo.comentario3, orden_trabajo.n_partner4, orden_trabajo.marca4, orden_trabajo.comentario4, orden_trabajo.n_partner5, orden_trabajo.marca5, orden_trabajo.comentario5, orden_trabajo.n_partner6, orden_trabajo.marca6, orden_trabajo.comentario6 FROM orden_trabajo INNER JOIN cliente ON orden_trabajo.id_cliente=cliente.id_cliente INNER JOIN ciudad ON cliente.id_ciudad=ciudad.id_ciudad INNER JOIN equipo ON orden_trabajo.id_equipo=equipo.id_equipo WHERE id_orden_trabajo='$id'")or die(mysql_error());
$reg = mysql_fetch_object($consulta);

$da = $reg->correlativo_ot."/".$reg->nombre."/".$reg->rut."/".$reg->fono."/".$reg->correo."/".$reg->direccion."/".$reg->nombrec."/".$reg->serie_equipo."/".$reg->valorReparacion."/".$reg->n_partner."/".$reg->marca."/".$reg->comentarioo."/".$reg->n_partner1."/".$reg->marca1."/".$reg->comentario1."/".$reg->n_partner2."/".$reg->marca2."/".$reg->comentario2."/".$reg->n_partner3."/".$reg->marca3."/".$reg->comentario3."/".$reg->n_partner4."/".$reg->marca4."/".$reg->comentario4."/".$reg->n_partner5."/".$reg->marca5."/".$reg->comentario5."/".$reg->n_partner6."/".$reg->marca6."/".$reg->comentario6;

echo $da; 
?>