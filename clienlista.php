<?php
include("conexion.php");



$consulta="SELECT * FROM cliente ORDER BY nombre ASC";
	echo '<option value="0">---Seleccione Cliente---</opcion>';
$asig=mysql_query($consulta);


      while($fil=mysql_fetch_array($asig))
  
 	echo '<option value="' . $fil['id_cliente']. '">' .$fil['nombre']. '</opcion>' . "\n";


?>