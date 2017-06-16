<?php 

$selected= new mysqli("localhost","root","","bdcass");

$salida= "";
//esta consulta es la que hace que se muestren todos los datos en la tabla sin poner nada
$query= "SELECT  equipo_aviso.id_equipo_aviso, equipo_aviso.fecha_aviso, equipo_aviso.medio_aviso, 
				 equipo.serie_equipo
		FROM equipo_aviso
    INNER JOIN equipo ON equipo_aviso.id_equipo.equipo.id_equipo 
	WHERE id_equipo_aviso=5 ";

$resultado=$selected->query($query);
if($resultado->num_rows > 0) 
{
	$salida.=
	'
	<table class="table-responsive">
			<thead>
			<tr>
	     <th><h5><strong>Serie Equipo</strong></h5></th>
        <th><h5><strong>Estado</strong></h5></th>
        <th><h5><strong>Fecha Aviso</strong></h5></th>
        <th><h5><strong>Medio Aviso</strong></h5></th>
        <th><h5><strong>Operaciones</strong></h5></th>
			</tr>
			</thead>
			<tbody>';

	while ($fila = $resultado->fetch_assoc()) {
		$salida.=
	'<tr>
	 <td>'.'<strong>'.$fila["serie_equipo"].'</strong>'.'</td>
   	 <td>'.$fila["estado"].'</td>
   	 <td>'.$fila["fecha_aviso"].'</td>
   	 <td>'.$fila["medio_aviso"].'</td>
   	 <td>'.'<a href="equipo.aviso.php?id='.$fila["id_equipo_aviso"].'" class="btn btn-primary" title="Modificar Orden de Trabajo">'.'Modificar'.'</a>'.'</td>    
	</tr>';
	}

	$salida.="</tbody></table>";

}else{

	$salida.="<div class='alert alert-danger' role='alert'>No hay Datos en su busqueda :( </div>";
}

echo $salida;
$selected->close();

 ?>