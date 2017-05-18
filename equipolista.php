<?php
include("conexion.php");

$el_cliente= $_POST['nombreCliente'];



$consulta1="SELECT * FROM equipo WHERE id_cliente='$el_cliente' ORDER BY serie_equipo ASC ";
echo '<option value="0">---Seleccione Serie de Equipo---</opcion>';
$asig1=mysql_query($consulta1);


      while($fila=mysql_fetch_array($asig1))
  
 	echo '<option value="' . $fila['id_equipo']. '">' .$fila['serie_equipo']. '</opcion>' . "\n";


?>