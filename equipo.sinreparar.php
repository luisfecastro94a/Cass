<?php 

$selected= new mysqli("localhost","root","","bdcass");

$salida= "";
//esta consulta es la que hace que se muestren todos los datos en la tabla sin poner nada
//si pongo la tabla orden de trabajo, se duplican todos los equipos porque lee todos los id_equipo de las tablas
$query= "SELECT  equipo.id_equipo, equipo.serie_equipo, equipo.modelo, equipo.fecha_creacion, equipo.sintoma_cliente, estado.id_estado, estado.estado, estado.Inicio, estado.relacion FROM equipo INNER JOIN estado ON equipo.id_estado=estado.id_estado INNER JOIN cliente ON equipo.id_cliente=cliente.id_cliente  WHERE Inicio=1	AND relacion='equipo'  ";
/*$query= "SELECT  orden_trabajo.id_equipo, equipo.id_equipo, equipo.serie_equipo, equipo.modelo, equipo.fecha_creacion, equipo.sintoma_cliente, estado.estado, usuario.nombreUsuario FROM orden_trabajo  INNER JOIN equipo ON orden_trabajo.id_equipo=equipo.id_equipo INNER JOIN estado ON equipo.id_estado=estado.id_estado INNER JOIN usuario ON orden_trabajo.id_usuario=usuario.id_usuario WHERE estado='Sin reparar' ORDER BY fecha_creacion DESC  ";*/
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
   	 <td>'.'<a href="equipo.cotizacion.php?id='.$fila["id_equipo"].'" class="btn btn-primary" title="Presupuesto a equipo"><span class="glyphicon glyphicon-usd" aria-hidden="true"></span>'.' Presupuesto'.'</a>'.'</td> 
   	 <td>'.'<a href="equipo.cambioE.php?id='.$fila["id_equipo"].'" class="btn btn-warning" title="Cambiar estado"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>'.' Cerrar Equipo'.'</a>'.'</td>   
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