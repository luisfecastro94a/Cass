<?php 

$selected= new mysqli("localhost","root","","bdcass");

$salida= "";
//esta consulta es la que hace que se muestren todos los datos en la tabla sin poner nada
$query= "SELECT  equipo.id_equipo, equipo.serie_equipo, equipo.modelo, equipo.fecha_creacion, equipo.sintoma_cliente, estado.id_estado, estado.estado FROM equipo INNER JOIN estado ON equipo.id_estado=estado.id_estado WHERE estado='Sin reparar' ";

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
	     <th><h5><strong>Sintoma del Cliente</strong></h5></th>
        <th><h5><strong>Estado</strong></h5></th>
        <th colspan="2"><h5><strong>Operaciones</strong></h5></th>
			</tr>
			</thead>
			<tbody>';

	while ($fila = $resultado->fetch_assoc()) {
		$salida.='<tr>
	



	 <td>'.'<strong>'.$fila["modelo"].'</strong>'.'</td>	
	 <td>'.$fila["serie_equipo"].'</td>
	 <td>'.$fila["fecha_creacion"].'</td>
	 <td>'.$fila["sintoma_cliente"].'</td>
   	 <td>'.$fila["estado"].'</td>
   	 <td>'.'<a href="equipo.cotizacion.php?id='.$fila["id_equipo"].'" class="btn btn-primary" title="Modificar Orden de Trabajo"><span class="glyphicon glyphicon-usd" aria-hidden="true"></span>'.' Presupuesto'.'</a>'.'</td> 
   	 <td>'.'<a href="equipo.cambioE.php?id='.$fila["id_equipo"].'" class="btn btn-primary" title="Modificar Orden de Trabajo">'.'Cambiar Estado'.'</a>'.'</td>   
			</tr>';
	}
//<span class="glyphicon glyphicon-wrench" aria-hidden="true"></span>
	$salida.="</tbody></table>";

}else{

	$salida.="<div class='alert alert-danger' role='alert'>No hay Datos en su busqueda :( </div>";
}

echo $salida;
$selected->close();

 ?>