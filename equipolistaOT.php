<?php
include("conexion.php");

$date = date("d/m/Y");

$consultaa="SELECT id_equipo, id_estado, serie_equipo, fecha_creacion FROM equipo WHERE id_estado=2 AND fecha_creacion='$date' ORDER BY serie_equipo ASC";
echo '<option value="0">---Seleccione Serie de Equipo---</opcion>';
$asiga=mysql_query($consultaa);

      while($filaa=mysql_fetch_array($asiga))
  
 	echo '<option value="' . $filaa['id_equipo']. '">' .$filaa['serie_equipo']. '</opcion>' . "\n";
?>