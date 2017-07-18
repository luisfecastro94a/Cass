<?php 

$selected= new mysqli("localhost","root","","bdcass");

$salida= "";

//esta consulta es la que hace que se muestren todos los datos en la tabla sin poner nada
//si pongo la tabla orden de trabajo, se duplican todos los equipos porque lee todos los id_equipo de las tablas
/*$query= "SELECT  equipo.id_equipo, equipo.serie_equipo, equipo.modelo, equipo.fecha_creacion, equipo.sintoma_cliente, estado.id_estado, estado.estado, estado.Inicio, estado.relacion FROM equipo INNER JOIN estado ON equipo.id_estado=estado.id_estado INNER JOIN cliente ON equipo.id_cliente=cliente.id_cliente  WHERE Inicio=1	AND relacion='equipo'

para que me muestre los equipos de un tecnico en especifico debe ser: AND correo='lcastro@cass.cl', usuario.correo
  ";*/
$query= "SELECT orden_trabajo.id_orden_trabajo, equipo.id_equipo, equipo.serie_equipo, equipo.modelo, equipo.fecha_creacion, equipo.sintoma_cliente, equipo.dias, estado.estado, estado.relacion, usuario.nombreUsuario FROM orden_trabajo  INNER JOIN equipo ON orden_trabajo.id_equipo=equipo.id_equipo INNER JOIN estado ON equipo.id_estado=estado.id_estado INNER JOIN usuario ON orden_trabajo.id_usuario=usuario.id_usuario WHERE estado='Sin reparar' AND relacion='equipo'  ORDER BY fecha_creacion ASC  ";
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
	     <th><h5><strong>Técnico a Cargo</strong></h5></th>
        <th><h5><strong>Estado</strong></h5></th>
        <th><h5><strong>Días Transcurridos</strong></h5></th>
        <th colspan="3"><center><h5><strong>Operaciones</strong></h5></center></th>
        <th ><h5><strong>Estado Equipo</strong></h5></th>
			</tr>
			</thead>
			<tbody>';	

	while ($fila = $resultado->fetch_assoc()) {
		$dias=$fila["dias"];

$fechaInicio = $fila["fecha_creacion"];
$fechaActual = date("d/m/Y");
$diaActual = substr($fechaActual, 0, 2); 
$mesActual = substr($fechaActual, 3, 5); 
$anioActual = substr($fechaActual, 6, 10); 
$diaInicio = substr($fechaInicio, 0, 2); 
$mesInicio = substr($fechaInicio, 3, 5); 
$anioInicio = substr($fechaInicio, 6, 10); 
$b = 0; 
$mes = $mesInicio-1; 
if($mes==2){ 
if(($anioActual%4==0 && $anioActual%100!=0) || $anioActual%400==0){ 
$b = 29; 
}else{ 
$b = 28; 
} 
} 
else if($mes<=7){ 
if($mes==0){ 
$b = 31; 
} 
else if($mes%2==0){ 
$b = 30; 
} 
else{ 
$b = 31; 
} 
} 
else if($mes>7){ 
if($mes%2==0){ 
$b = 31; 
} 
else{ 
$b = 30; 
} 
} 
if(($anioInicio>$anioActual) || ($anioInicio==$anioActual && $mesInicio>$mesActual) || 
($anioInicio==$anioActual && $mesInicio == $mesActual && $diaInicio>$diaActual)){ 
echo "La fecha de inicio ha de ser anterior a la fecha Actual"; 
}else{ 
if($mesInicio <= $mesActual){ 
$anios = $anioActual - $anioInicio; 
if($diaInicio <= $diaActual){ 
$meses = $mesActual - $mesInicio; 
$dies = $diaActual - $diaInicio; 
}else{ 
if($mesActual == $mesInicio){ 
$anios = $anios - 1; 
} 
$meses = ($mesActual - $mesInicio - 1 + 12) % 12; 
$dies = $b-($diaInicio-$diaActual); 
} 
}else{ 
$anios = $anioActual - $anioInicio - 1; 
if($diaInicio > $diaActual){ 
$meses = $mesActual - $mesInicio -1 +12; 
$dies = $b - ($diaInicio-$diaActual); 
}else{ 
$meses = $mesActual - $mesInicio + 12; 
$dies = $diaActual - $diaInicio; 
} 
} 
} 

$salida.='<tr class="alerta">
	 <td>'.'<strong>'.$fila["modelo"].'</strong>'.'</td>	
	 <td>'.$fila["serie_equipo"].'</td>
	 <td>'.$fila["fecha_creacion"].'</td>
	 <td>'.$fila["sintoma_cliente"].'</td>
	 <td>'.$fila["nombreUsuario"].'</td>
   	 <td>'.$fila["estado"].'</td>
   	 <td>'.$dies.'</td>
   	 <td>'.'<a href="ot.modifica.php?id='.$fila["id_orden_trabajo"].'" class="btn btn-danger" title="Cambiar Técnico"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>'.' Cambiar Técnico'.'</a>'.'</td>
   	 <td>'.'<a href="equipo.cotizacion.php?id='.$fila["id_equipo"].'" class="btn btn-primary" title="Presupuesto a equipo"><span class="glyphicon glyphicon-usd" aria-hidden="true"></span>'.' Presupuesto'.'</a>'.'</td> 
   	 <td>'.'<a href="equipo.cambioE.php?id='.$fila["id_equipo"].'" class="btn btn-warning" title="Cambiar estado"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>'.' Cerrar Equipo'.'</a>'.'</td> 
<td>'; 
if($dies<=$dias): 
echo '<img src="img/btverde.png"  title="En Proceso" />'; 
else: 
echo '<img src="img/btrojo.png"  title="Atrasado" />'; 
endif; 
echo 
'</td>

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