
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>cliente</title>
</head>
<body>
<ul><li>jojo</li></ul>
	<?php 

include("conexion.php");
 
#Guardamos la variable enviada por POST#
$cat=$_POST['filtrar'];
 
$result = mysql_query ("SELECT * FROM cliente WHERE id_cliente = '$cat'" )
or die("Error en la consulta SQL");
?>
 
<table>
 
<?php
#Mostramos los resultados obtenidos dentro de una tabla
while( $row = mysql_fetch_array ( $result )) {
   echo "<tr>";
   echo "<td>".$row["id_cliente"]."</td>";
   echo "<td>".$row["nombre"]."</td>";
   echo "<tr>";
   echo "<tr>";
   echo "<td>".$row["correo"]."</td>";
   echo "<td>".$row["fono"]."</td>";
   echo "<tr>";
   echo "<tr>";
   echo "<td>".$row["nombre_contacto"]."</td>";
   echo "<td>".$row["fono_contacto"]."</td>";
   echo "<tr>";
}
?>
</table>
<?php
#Cerramos la conexión con la base de datos
mysql_close();

?>
</body>
</html>