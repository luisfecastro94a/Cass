<?php 
include("conexion.php");

$id=$_REQUEST['id'];

$consulta2="SELECT serie_equipo, id_equipo FROM equipo WHERE id_equipo='$id' ";
$resultE=mysql_query($consulta2);

?>
<?php
 while($row=mysql_fetch_array($resultE))
{

?> 	

<!--Llamamos la libreria dentro de un tag de imagen en HTML para que la muestre en el navegador-->
<img src="barcode.php?text=<?php echo $row['serie_equipo'];?>&size=55&orientation=horizontal&codetype=code39&print=true&sizefactor=1" />
<br>

<?php } ?>

<a href="equipo.buscar.php"><button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"> VOLVER</span></button></a>
