<?php 

$selected= new mysqli("localhost","root","","bdcass");

$salida= "";
//esta consulta es la que hace que se muestren todos los datos en la tabla sin poner nada
/*$query= "SELECT  equipo.id_equipo, equipo.serie_equipo, equipo.modelo, equipo.fecha_creacion, equipo.fecha_modificacion, equipo.sintoma_cliente, equipo.sintoma_tecnico, estado.id_estado, estado.estado FROM equipo INNER JOIN estado ON equipo.id_estado=estado.id_estado WHERE estado='En Proceso' ";*/

$query= "SELECT orden_trabajo.id_orden_trabajo, equipo.id_equipo, equipo.serie_equipo, equipo.modelo, equipo.fecha_creacion, equipo.sintoma_cliente, equipo.sintoma_tecnico, equipo.fecha_modificacion, estado.estado, estado.relacion, usuario.nombreUsuario FROM orden_trabajo  INNER JOIN equipo ON orden_trabajo.id_equipo=equipo.id_equipo INNER JOIN estado ON equipo.id_estado=estado.id_estado INNER JOIN usuario ON orden_trabajo.id_usuario=usuario.id_usuario WHERE estado='En Proceso' AND relacion='equipo'  ORDER BY fecha_creacion DESC  ";

$resultado=$selected->query($query);
if($resultado->num_rows > 0) 
{
	$salida.=
	'
	<table class="table-responsive">
			<thead>
			<tr>
		<th><h5><strong>Modelo</strong></h5></th>	
	     <th><h5><strong>Serie Equipo</strong></h5></th>
	     <th><h5><strong>Fecha Ingreso</strong></h5></th>
	     <th><h5><strong>Fecha Modificación</strong></h5></th>
	     <th><h5><strong>Sintoma del Cliente</strong></h5></th>
	     <th><h5><strong>Sintoma del Técnico</strong></h5></th>
	     <th><h5><strong>Técnico a Cargo</strong></h5></th>
        <th><h5><strong>Estado</strong></h5></th>
        <th colspan="2"><center><h5><strong>Operaciones</strong></h5></center></th>
			</tr>
			</thead>
			<tbody>';

	while ($fila = $resultado->fetch_assoc()) {
		$salida.='<tr>
	
	<td>'.'<strong>'.$fila["modelo"].'</strong>'.'</td>	
	 <td>'.$fila["serie_equipo"].'</td>
	 <td>'.$fila["fecha_creacion"].'</td>
	 <td>'.$fila["fecha_modificacion"].'</td>
	 <td>'.$fila["sintoma_cliente"].'</td>
	 <td>'.$fila["sintoma_tecnico"].'</td>
	 <td>'.$fila["nombreUsuario"].'</td>
   	 <td>'.$fila["estado"].'</td>
   	 <td>'.'<a href="ot.modifica.php?id='.$fila["id_orden_trabajo"].'" class="btn btn-danger" title="Cambiar Técnico"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>'.' Cambiar Técnico'.'</a>'.'</td>
   	 <td>'.'<a href="equipo.cambioE.php?id='.$fila["id_equipo"].'" class="btn btn-warning" title="Modificar Orden de Trabajo"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>'.' Reparar Equipo'.'</a>'.'</td>    
			</tr>';
	}

	$salida.="</tbody></table>";

}else{

	$salida.="<div class='alert alert-danger' role='alert'>No hay Datos en su busqueda :( </div>";
}

echo $salida;
$selected->close();

 ?>