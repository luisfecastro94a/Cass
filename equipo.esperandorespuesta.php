<?php 

$selected= new mysqli("localhost","root","","bdcass");

$salida= "";
//esta consulta es la que hace que se muestren todos los datos en la tabla sin poner nada
$query= "SELECT  cotizacion.id_cotizacion, cotizacion.correlativo_cotizacion, cotizacion.fecha_cotizacion, orden_trabajo.correlativo_ot, equipo.serie_equipo, estado.id_estado, estado.estado FROM cotizacion INNER JOIN estado ON cotizacion.id_estado=estado.id_estado INNER JOIN orden_trabajo ON cotizacion.id_orden_trabajo=orden_trabajo.id_orden_trabajo INNER JOIN equipo ON orden_trabajo.id_equipo=equipo.id_equipo WHERE estado='En espera'";

$resultado=$selected->query($query);
if($resultado->num_rows > 0) 
{
	$salida.=
	'<div class="table-responsive">
	<table border="2">
			<thead>
	<tr>
	     <td><h5>N° Cotizacion</h5></td>
         <td><h5>Fecha</h5></td>
         <td><h5>N° OT</h5></td>
         <td><h5>Serie Equipo</h5></td>
         <td><h5>Estado</h5></td>
         <td colspan="2"><h5>Operaciones</h5></td>
	</tr>
			</thead>
			<tbody>';

	while ($fila = $resultado->fetch_assoc()) {
		$salida.='<tr>
	 <td>'.'<strong>'.$fila["correlativo_cotizacion"].'</strong>'.'</td>
   	 <td>'.$fila["fecha_cotizacion"].'</td>
   	 <td>'.$fila["correlativo_ot"].'</td>
   	 <td>'.$fila["serie_equipo"].'</td>
   	 <td>'.$fila["estado"].'</td>
   	 <td>'.'<a href="cotizacion.modificar.php?id='.$fila["id_cotizacion"].'" class="btn btn-primary" title="Modificar Cotización">'.'Modificar'.'</a>'.'</td>    
			</tr>';
	}

	$salida.="</tbody></table></div>";
}else{

	$salida.="<div class='alert alert-danger' role='alert'>No hay Datos en su busqueda :( </div>";
}
echo $salida;
$selected->close();
 ?>