<?php
include("conexion.php");

$el_cliente= $_POST['nombreCliente'];



$consulta="SELECT * FROM cliente_encargado WHERE id_cliente='$el_cliente' ORDER BY nombreE ";
echo '<option value="0">---Seleccione Cliente Encargado---</opcion>';
$asig=mysql_query($consulta);


      while($fil=mysql_fetch_array($asig))
  
 	echo '<option value="' . $fil['id_cliente_encargado']. '">' .$fil['nombreE']. '</opcion>' . "\n";


?>