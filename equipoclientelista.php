<?php
include("conexion.php");

$el_equipo= $_POST['serieequipo'];


$consulta="SELECT * FROM cliente WHERE id_cliente='$el_equipo' ORDER BY nombreE ";
echo '<option value="0">---Seleccione Cliente---</opcion>';
$asig=mysql_query($consulta);

      while($fil=mysql_fetch_array($asig))
  
 	echo '<option value="' . $fil['id_cliente']. '">' .$fil['nombre']. '</opcion>' . "\n";

?>