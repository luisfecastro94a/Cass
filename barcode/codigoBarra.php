<?php 
include("../conexion.php");

$id=$_REQUEST['id'];

$consulta2="SELECT serie_equipo, id_equipo FROM equipo WHERE id_equipo='$id' ";
$resultE=mysql_query($consulta2);

?>
<?php
 while($row=mysql_fetch_array($resultE))
{

?> 	

<!--Llamamos la libreria dentro de un tag de imagen en HTML para que la muestre en el navegador-->
<img src="barcode.php?text=<?php echo $row['serie_equipo'];?>&size=50&orientation=horizontal&codetype=code39&print=true&sizefactor=2" />
<br>

<?php } ?>

<a href="barcode.php">Generar Codigo de Barra</a>


