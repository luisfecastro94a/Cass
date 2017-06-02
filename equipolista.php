<?php
include("conexion.php");


$consultaa="SELECT * FROM equipo ORDER BY serie_equipo ASC";
echo '<option value="0">---Seleccione Serie de Equipo---</opcion>';
$asiga=mysql_query($consultaa);

      while($filaa=mysql_fetch_array($asiga))
  
 	echo '<option value="' . $filaa['id_equipo']. '">' .$filaa['serie_equipo']. '</opcion>' . "\n";
?>