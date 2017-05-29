<?php 

$selected= new mysqli("localhost","root","","bdcass");

$salida= "";
//esta consulta es la que hace que se muestren todos los datos en la tabla sin poner nada
$query= "SELECT orden_trabajo.id_orden_trabajo, orden_trabajo.correlativo_ot, orden_trabajo.fecha_creacion, orden_trabajo.motivo, orden_trabajo.valorReparacion, orden_trabajo.fechaPresupuesto, usuario.nombreUsuario, cliente.nombre, ot_tipo.nombreTipo, area.area, estado.estado, equipo.serie_equipo FROM orden_trabajo INNER JOIN usuario ON orden_trabajo.id_usuario=usuario.id_usuario INNER JOIN cliente ON orden_trabajo.id_cliente=cliente.id_cliente INNER JOIN ot_tipo ON orden_trabajo.id_ot_tipo=ot_tipo.id_ot_tipo INNER JOIN area ON orden_trabajo.id_area=area.id_area INNER JOIN estado ON orden_trabajo.id_estado=estado.id_estado INNER JOIN equipo ON orden_trabajo.id_equipo=equipo.id_equipo ORDER BY id_orden_trabajo";

if (isset($_POST['consulta'])) 
{
	$q=$selected->real_escape_string($_POST['consulta']);
	//esta consulta me despliega los resultados al poner algo en el input de busqueda
	$query="SELECT orden_trabajo.id_orden_trabajo, orden_trabajo.correlativo_ot, orden_trabajo.fecha_creacion, orden_trabajo.motivo, orden_trabajo.valorReparacion, orden_trabajo.fechaPresupuesto, usuario.nombreUsuario, cliente.nombre, ot_tipo.nombreTipo, area.area, estado.estado, equipo.serie_equipo FROM orden_trabajo INNER JOIN usuario ON orden_trabajo.id_usuario=usuario.id_usuario INNER JOIN cliente ON orden_trabajo.id_cliente=cliente.id_cliente INNER JOIN ot_tipo ON orden_trabajo.id_ot_tipo=ot_tipo.id_ot_tipo INNER JOIN area ON orden_trabajo.id_area=area.id_area INNER JOIN estado ON orden_trabajo.id_estado=estado.id_estado INNER JOIN equipo ON orden_trabajo.id_equipo=equipo.id_equipo WHERE id_orden_trabajo LIKE '%".$q."%' OR 
		correlativo_ot LIKE '%".$q."%' 
		 ";
}

$resultado=$selected->query($query);

if($resultado->num_rows > 0) 
{
	$salida.=
	'<div class="table-responsive">
	<table class="tabla_datos table table-striped table-responsive">
			<thead>
			<tr>
	    <td><h4>Numero</h4></td>
        <td><h4>Fecha Creación</h4></td>
        <td><h4>Técnico</h4></td>
        <td><h4>Cliente</h4></td>
        <td><h4>Tipo de OT</h4></td>
        <td><h4>Area</h4></td>
        <td><h4>Estado OT</h4></td>
        <td><h4>Serie Equipo</h4></td>
        <td><h4>Motivo de Visita</h4></td>
        <td><h4>Valor Presupuesto</h4></td>
        <td><h4>Fecha de Presupuesto</h4></td>
        <td><h4>Valor Repuesto</h4></td>
        <td><h4>Total</h4></td>
        <td colspan="2"><h4>Operaciones</h4></td>
			</tr>
			</thead>
			<tbody>';

	while ($fila = $resultado->fetch_assoc()) {
		$salida.='<tr>
	 <td>'.'<strong>'.$fila["correlativo_ot"].'</strong>'.'</td>
   	 <td>'.$fila["fecha_creacion"].'</td>
   	 <td>'.$fila["nombreUsuario"].'</td>
   	 <td>'.$fila["nombre"].'</td>
   	 <td>'.$fila["nombreTipo"].'</td>
   	 <td>'.$fila["area"].'</td>
   	 <td>'.$fila["estado"].'</td>
   	 <td>'.$fila["serie_equipo"].'</td>
   	 <td>'.$fila["motivo"].'</td>
   	 <td>'.$fila["valorReparacion"].'</td>
   	 <td>'.$fila["fechaPresupuesto"].'</td>
   	 <td>'.$fila["valorReparacion"].'</td>
   	 <td>'.$fila["valorReparacion"].'</td>
   	 <td>'.'<a href="ot.modificar.php?id='.$fila["id_orden_trabajo"].'" class="btn btn-primary" title="Modificar Orden de Trabajo">'.'Modificar'.'</a>'.'</td>    


			</tr>';
	}

	$salida.="</tbody></table></div>";

}else{

	$salida.="<div class='alert alert-danger' role='alert'>No hay Datos en su busqueda :( </div>";
}

echo $salida;
$selected->close();

 ?>
 