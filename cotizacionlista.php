<?php
include("conexion.php");


$consultaa="SELECT id_orden_trabajo, correlativo_cotizacion, correlativo_ot FROM orden_trabajo WHERE correlativo_cotizacion<1";
echo '<option value="0">---Seleccione Numero de OT---</opcion>';
$asiga=mysql_query($consultaa);

      while($filaa=mysql_fetch_array($asiga))
  
 	echo '<option value="' . $filaa['id_orden_trabajo']. '">' .$filaa['correlativo_ot']. '</opcion>' . "\n";
?>


