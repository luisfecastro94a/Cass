<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Autocomplete - Combobox</title>
  <link rel="stylesheet" href="css/jquery-ui.css">

  <style>
  .custom-combobox {
    position: relative;
    display: inline-block;
  }
  .custom-combobox-toggle {
    position: absolute;
    top: 0;
    bottom: 0;
    margin-left: -1px;
    padding: 0;
  }
  .custom-combobox-input {
    margin: 0;
    padding: 5px 10px;
  }
  </style>
  <script src="js/jquery-1.12.4.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/buscaot.js"></script>

</head>
<body>
 

<form action="a.php" method="POST">

<?php
include("conexion.php");


$consulta4="SELECT * FROM cliente ";
$asig3=mysql_query($consulta4);

?>
<div class="ui-widget" >
<label for="">Cliente</label>
<select id="combobox" class="form-control" name="filtrar" > 
<option value="" selected="">---Seleccionar Cliente---</option>
 <?php
      while($fil=mysql_fetch_array($asig3))
  {?>
      <option value="<?php echo $fil['0']?>"><?php echo $fil['2'];?></option>
  <?php } ?>
</select>
</div>
 <input type="button" value="Buscar Cliente">

<table  class="table table-striped" id="" name="" >
<thead>
      <th colspan="11">Lista de Clientes</th>
    </thead>
    <tbody>
      <tr>
        <td><h4>#</h4></td>
        <td><h4>Cliente</h4></td>
      </tr>

<?php

#Guardamos la variable enviada por POST#
$cat=isset($_POST['filtrar'])?$_POST['filtrar']: NULL;

//$busca=isset($_POST['busca'])?$_POST['busca']: NULL;  
 
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
  </ul>
      </tbody>

<?php
#Cerramos la conexión con la base de datos
mysql_close();

?>
</form>

<?php
include("conexion.php");


$consulta="SELECT * FROM orden_trabajo ";
$asig=mysql_query($consulta);

?>
<div class="ui-widget" >
<label for="">Cliente</label>
<select id="combobox" class="form-control" name="filtrarOT" > 
<option value="" selected="">---Seleccionar Orden de Trabajo---</option>
 <?php
      while($row=mysql_fetch_array($asig))
  {?>
      <option value="<?php echo $row['0']?>"><?php echo $row['1'];?></option>
  <?php } ?>
</select>
</div>
 <input type="button" value="Buscar OT">

<table  class="table table-striped" id="" name="" >
<thead>
      <th colspan="11">Lista de OT</th>
    </thead>
    <tbody>
      <tr>
        <td><h4>#</h4></td>
        <td><h4>Cliente</h4></td>
      </tr>

<?php
$cat=isset($_POST['filtrarOT'])?$_POST['filtrarOT']: NULL;


  $dbhandle=mysql_query("SELECT orden_trabajo.correlativo_ot, cliente.nombre,  equipo.serie_equipo, orden_trabajo.valorReparacion, orden_trabajo.n_partner, orden_trabajo.marca, orden_trabajo.comentarioo, orden_trabajo.n_partner1, orden_trabajo.marca1, orden_trabajo.comentario1 , orden_trabajo.n_partner2, orden_trabajo.marca2, orden_trabajo.comentario2, orden_trabajo.n_partner3, orden_trabajo.marca3, orden_trabajo.comentario3, orden_trabajo.n_partner4, orden_trabajo.marca4, orden_trabajo.comentario4, orden_trabajo.n_partner5, orden_trabajo.marca5, orden_trabajo.comentario5, orden_trabajo.n_partner6, orden_trabajo.marca6, orden_trabajo.comentario6 FROM orden_trabajo INNER JOIN cliente ON orden_trabajo.id_cliente=cliente.id_cliente INNER JOIN ciudad ON cliente.id_ciudad=ciudad.id_ciudad INNER JOIN equipo ON orden_trabajo.id_equipo=equipo.id_equipo WHERE id_orden_trabajo='$cat' ");

   while($muestra=mysql_fetch_array($dbhandle)){
   echo '<tr>';
   echo '<td>'.'<strong>'.$muestra['correlativo_ot'].'</strong>'.'</td>';
   echo '<td>'.'<strong>'.$muestra['nombre'].'</strong>'.'</td>';
   echo '<td>'.$muestra['serie_equipo'].'</td>';
   echo '<td>'.$muestra['valorReparacion'].'</td>';
   echo '<tr>';
   echo '<td>'.$muestra['n_partner'].'</td>';
   echo '<td>'.$muestra['marca'].'</td>';
   echo '<td>'.$muestra['comentarioo'].'</td>';
      echo '<tr>';
   echo '<td>'.$muestra['n_partner1'].'</td>';
   echo '<td>'.$muestra['marca1'].'</td>';
   echo '<td>'.$muestra['comentario1'].'</td>';
   echo '<tr>';
   echo '<td>'.$muestra['n_partner2'].'</td>';
   echo '<td>'.$muestra['marca2'].'</td>';
   echo '<td>'.$muestra['comentario2'].'</td>';
   echo '<tr>';
   echo '<td>'.$muestra['n_partner3'].'</td>';
   echo '<td>'.$muestra['marca3'].'</td>';
   echo '<td>'.$muestra['comentario3'].'</td>';
   echo '<tr>';
   echo '<td>'.$muestra['n_partner4'].'</td>';
   echo '<td>'.$muestra['marca4'].'</td>';
   echo '<td>'.$muestra['comentario4'].'</td>';
   echo '<tr>';
   echo '<td>'.$muestra['n_partner5'].'</td>';
   echo '<td>'.$muestra['marca5'].'</td>';
   echo '<td>'.$muestra['comentario5'].'</td>';
   echo '<tr>';
   echo '<td>'.$muestra['n_partner6'].'</td>';
   echo '<td>'.$muestra['marca6'].'</td>';
   echo '<td>'.$muestra['comentario6'].'</td>';
  
}


?>  
 
</table>
</body>
</html>