<?php 

$selected= new mysqli("localhost","root","","bdcass");

$salida= "";
//esta consulta es la que hace que se muestren todos los datos en la tabla sin poner nada
$query= "SELECT  equipo.id_equipo, equipo.serie_equipo, estado.id_estado, estado.estado FROM equipo INNER JOIN estado ON equipo.id_estado=estado.id_estado WHERE estado='Sin reparar'";

$resultado=$selected->query($query);
if($resultado->num_rows > 0) 
{
	$salida.=
	'<div class="table-responsive">
	<table border="2">
			<thead>
			<tr>
	     <td><h5>Serie Equipo</h5></td>
        <td><h5>Estado</h5></td>
        <td colspan="2"><h5>Operaciones</h5></td>
			</tr>
			</thead>
			<tbody>';

	while ($fila = $resultado->fetch_assoc()) {
		$salida.='<tr>
	 <td>'.'<strong>'.$fila["serie_equipo"].'</strong>'.'</td>
   	 <td>'.$fila["estado"].'</td>
   	
   	 <td>'.'<a href="equipo.modificar.php?id='.$fila["id_equipo"].'" class="btn btn-primary" title="Modificar Orden de Trabajo">'.'Modificar'.'</a>'.'</td>    


			</tr>';
	}

	$salida.="</tbody></table></div>";

}else{

	$salida.="<div class='alert alert-danger' role='alert'>No hay Datos en su busqueda :( </div>";
}

echo $salida;
$selected->close();

 ?>