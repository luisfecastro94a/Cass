<?php
$buscacliente = $_GET['nombre'];//la variable es la misma de abajo o es otra

include("conexion.php");
  
$consulta = "SELECT nombre FROM cliente WHERE nombre LIKE '%$nombre%' ";
 
$result = $dbhandle->query($consulta);
 
if($result->num_rows > 0){
    while($fila = $result->fetch_array()){
        $buscacliente[] = $fila['nombre'];
    }
echo json_encode($buscacliente);
}
?>