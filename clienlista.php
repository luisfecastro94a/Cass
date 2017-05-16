<?php
include("conexion.php");

/*
$query = $dbhandle->query("SELECT * FROM cliente");
echo '<option value="0"> Seleccione</opcion>';

while ($row = $query->fetch_assoc())
{
	echo '<option value="' . $row['id_cliente']. '">' .$row['nombre']. '</opcion>' . "\n";
}
*/

$consulta="SELECT * FROM cliente ORDER BY nombre ASC";
	echo '<option value="0">---Seleccione Cliente---</opcion>';
$asig=mysql_query($consulta);


      while($fil=mysql_fetch_array($asig))
  
 	echo '<option value="' . $fil['id_cliente']. '">' .$fil['nombre']. '</opcion>' . "\n";


?>