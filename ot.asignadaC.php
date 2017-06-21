<?php 

$selected= new mysqli("localhost","root","","bdcass");

$salida= "";
//esta consulta es la que hace que se muestren todos los datos en la tabla sin poner nada
$query= "SELECT orden_trabajo.id_orden_trabajo, orden_trabajo.correlativo_ot, orden_trabajo.fecha_OT, orden_trabajo.valorCotizacionOT, equipo.serie_equipo,  estado.estado, estado.Condicion , usuario.nombreUsuario FROM orden_trabajo INNER JOIN usuario ON orden_trabajo.id_usuario=usuario.id_usuario INNER JOIN estado ON orden_trabajo.id_estado=estado.id_estado INNER JOIN equipo ON orden_trabajo.id_equipo=equipo.id_equipo  WHERE Condicion='Eo'  ";

$resultado=$selected->query($query);
if($resultado->num_rows > 0) 
{
	$salida.=
	'
	<table class="table-responsive">
			<thead>
			<tr>
		<th><h5><strong>N° OT</strong></h5></th>
		<th><h5><strong>Fecha de Orden de Trabajo</strong></h5></th>
		<th><h5><strong>Valor de Orden de Trabajo</strong></h5></th>
	    <th><h5><strong>Serie Equipo</strong></h5></th>
	    <th><h5><strong>Técnico</strong></h5></th>
        <th><h5><strong>Estado</strong></h5></th>
        <th><h5><strong>Operaciones</strong></h5></th>
			</tr>
			</thead>
			<tbody>';

	while ($fila = $resultado->fetch_assoc()) {
		$salida.='<tr>
	<td>'.'<strong>'.$fila["correlativo_ot"].'</strong>'.'</td>
	<td>'.$fila["fecha_OT"].'</td>
	<td>'.'<strong>'.$fila["valorCotizacionOT"].'</strong>'.'</td>
	 <td>'.'<strong>'.$fila["serie_equipo"].'</strong>'.'</td>
	 <td>'.$fila["nombreUsuario"].'</td>
   	 <td>'.$fila["estado"].'</td>
   	 <td>'.'<a href="ot.cerrar.php?id='.$fila["id_orden_trabajo"].'" class="btn btn-warning" title="Cerrar OT"><span class="glyphicon glyphicon-usd" aria-hidden="true"></span>'.' Cerrar Orden de Trabajo'.'</a>'.'</td> 
	 </tr>';
	}

	$salida.="</tbody></table>";

}else{

	$salida.="<div class='alert alert-danger' role='alert'>No hay Datos en su busqueda :( </div>";
}

echo $salida;
$selected->close();

 ?>