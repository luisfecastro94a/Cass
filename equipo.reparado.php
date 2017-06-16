<?php 

$selected= new mysqli("localhost","root","","bdcass");

$salida= "";
//esta consulta es la que hace que se muestren todos los datos en la tabla sin poner nada
$query= "SELECT  equipo.id_equipo, equipo.serie_equipo, equipo.fecha_creacion, estado.id_estado, estado.estado FROM equipo INNER JOIN estado ON equipo.id_estado=estado.id_estado WHERE estado='reparado'";

$resultado=$selected->query($query);
if($resultado->num_rows > 0) 
{
	$salida.=
	'
	<table class="table-responsive">
			<thead>
			<tr>
	    <th><h5><strong>Serie Equipo</strong></h5></th>
	    <th><h5><strong>Fecha Ingreso</strong></h5></th>
        <th><h5><strong>Estado</strong></h5></th>
        <th><h5><strong>Operaciones</strong></h5></th>
			</tr>
			</thead>
			<tbody>';

	while ($fila = $resultado->fetch_assoc()) {
		$salida.='<tr>
	 <td>'.'<strong>'.$fila["serie_equipo"].'</strong>'.'</td>
	 <td>'.$fila["fecha_creacion"].'</td>
   	 <td>'.$fila["estado"].'</td>
   	 <td></td>
	 </tr>';
	}

	$salida.="</tbody></table>";

}else{

	$salida.="<div class='alert alert-danger' role='alert'>No hay Datos en su busqueda :( </div>";
}

echo $salida;
$selected->close();

 ?>