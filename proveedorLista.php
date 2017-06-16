<?php
include("conexion.php");


$consultaa="SELECT id_proveedor, razon_social FROM proveedor ";
echo '<option value="0">---Seleccione Proveedor---</opcion>';
$asiga=mysql_query($consultaa);

      while($filaa=mysql_fetch_array($asiga))
  
 	echo '<option value="' . $filaa['id_proveedor']. '">' .$filaa['razon_social']. '</opcion>' . "\n";
?>