<?php 

$selected= new mysqli("localhost","root","","bdcass");

$salida= "";
//esta consulta es la que hace que se muestren todos los datos en la tabla sin poner nada
$query= "SELECT * FROM orden_trabajo ORDER BY id_orden_trabajo";

if (isset($_POST['consulta'])) 
{
	$q=$selected->real_escape_string($_POST['consulta']);
	//esta consulta me despliega los resultados al poner algo en el input de busqueda
	$query="SELECT  id_orden_trabajo, correlativo_ot, fecha_creacion, valorReparacion, fechaPresupuesto FROM orden_trabajo WHERE id_orden_trabajo LIKE '%".$q."%' OR 
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
			    <td><h4>ID</h4></td>
				<td><h4>Correlativo</h4></td>
				<td><h4>Fecha creacion</h4></td>
				<td><h4>Valor Reparacion</h4></td>
				<td><h4>Fecha Presupuesto</h4></td>
				<td colspan="2"><h4>Operaciones</h4></td>
			</tr>
			</thead>
			<tbody>';

	while ($fila = $resultado->fetch_assoc()) {
		$salida.='<tr>
					<td>'.$fila["id_orden_trabajo"].'</td>
					<td>'.$fila["correlativo_ot"].'</td>
					<td>'.$fila["fecha_creacion"].'</td>
					<td>'.$fila["valorReparacion"].'</td>
					<td>'.$fila["fechaPresupuesto"].'</td>
				     <td>'.'<a href="ot.modificar.php?id='.$fila['id_orden_trabajo'].'" class="btn btn-primary" title="Seleccionar OT">'.'Seleccionar OT'.'</a>'.'</td> 
				  </tr>';
	}

	$salida.="</tbody></table></div>";

}else{

	$salida.="<div class='alert alert-danger' role='alert'>No hay Datos en su busqueda :( </div>";
}

echo $salida;
$selected->close();


 ?>