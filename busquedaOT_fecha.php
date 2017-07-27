<!DOCTYPE html>
<html lang="en">

<head>
	<title>cliente</title>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="keywords" content="">

   <script language="JavaScript" type="text/javascript" src="js/ajax.js"></script>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="js/bootstrap.min.js">
	  <script language="JavaScript" type="text/javascript" src="js/calendario.js"></script>
	    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#star_date" ).datepicker({
      changeMonth:true,
      changeYear:true,
      showOn: "button",
      buttonImage: "css/images/cale.png",
      buttonImageOnly: true,
      buttonText: "Select date",
      showButtonPanel:true, 

    });
  } );
  </script>
    <script>
  $( function() {
    $( "#end_date" ).datepicker({
      changeMonth:true,
      changeYear:true,
      showOn: "button",
      buttonImage: "css/images/cale.png",
      buttonImageOnly: true,
      buttonText: "Select date",
      showButtonPanel:true, 

    });
  } );
  </script>
	
      <style>
 * {
 
  font-family: Geneva, Arial, Helvetica, sans-serif;

}
	body{
  background: #F2F2F2;
}
   	 nav ul ul.dropdown-menu li a:hover {
	background: #CCCCCC;
 	}
 	 nav ul li:hover {
	background: #CCCCCC;
 	}
  img.logo {
    height: 50px;
    margin: auto;
    width: 50px;
    border: auto;
  }
  h1{
    margin: 10px 500px 20px 500px;
    color: orange;
    border-top: 30px;
  }
  .contenedor {
    width: 1300px;
    height: 100px;
    margin: auto;
}
label {
  color:#515151;
}
 .cerrar{
    height: 40px;
    margin: 5px auto;
    width: 60px;
    border: auto;
  }
 

   </style>
</head>
  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
   <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
       <img class="logo" src="img/cass_logo.png" alt="">
    </div>
      
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
       <li><a  href="inicio.php">Inicio</a></li>
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Laboratorio <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="cliente.php">Ingresar Cliente</a></li>
            <li><a href="cliente.encargado.php">Ingresar Encargado</a></li>
            <li><a href="garantia.php">Ingreso Garantia</a></li>
            <li><a href="presupuesto.php">Presupuesto</a></li>
            <li><a href="cotizacion.php">Cotización</a></li>
            <li><a href="repuesto.php">Repuesto</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Equipo<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="equipo.entrada.php">Entrada Equipo</a></li>
            <li><a href="equipo.salida.php">Salida Equipo</a></li>
          </ul>
        </li>

        <li><a  href="#">Contratos</a></li>
        <li><a  href="#">Terreno</a></li>
        <li><a  href="#">Soporte Instalaciones</a></li>
        <li><a  href="repuesto.php">Repuestos</a></li>

        <li class="dropdown">
           <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Orden de Trabajo<span class="caret"></span></a>
               <ul class="dropdown-menu">
                     <li><a  href="ot.php" title="Generar OT a un Técnico">Orden de Trabajo</a></li>
                     <li><a  href="proforma.php" title="Generar proforma para cerrar la OT">Proforma (cerrar ot)</a></li>
                     <li><a  href="factura.php" title="Generar factura para cerrar Proforma">Factura</a></li>
               </ul>
        </li>

         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mantenedor<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="ciudad.php">Ciudad</a></li>
            <li><a href="usuario.php">Usuario</a></li>
             <li><a href="proveedor.php">Proveedor</a></li>
            <li><a href="uf.php">Uf</a></li>
            <li><a href="comision.php">Comisiones</a></li>
            <li><a href="periodo.php">Periodo</a></li>
            <li><a href="marca.php">Marca</a></li>
            <li><a href="estado.php">Estado</a></li>
            <li><a href="parametro.php">Parametro</a></li>
            <li><a href="parametro.php">estadisticas</a></li>
            <li><a href="area.php">Area</a></li>
          </ul>
        </li>
      </ul>
       <a  href="cerrarsesion.php"><img class="cerrar" src="img/cerrar_sesion.png" alt="" ></a>
    </div><!-- /.navbar-collapse -->
</nav>
<body>
	<div class="contenedor">


<a href="#"><button  class="btn btn-default" type="submit"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"> NUEVO</span></button></a>
<a href="#"><button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"> BUSCAR</span></button></a>
<button class="btn btn-default" type="button"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"> VOLVER</span></button>

<br><br>
<h1>Busqueda de Orden de Trabajo</h1>

<form >
	<div class="col-xs-5">
<label class="fe" for="">Desde:<input id="star_date" name="star_date" class="fecha" value="<?php echo date("d/m/Y"); ?>" type="text" name="fecha_OT" id="fecha_OT"></label></div>

	<div class="col-xs-5">
<label class="fe" for="">Hasta:<input id="end_date" name="end_date" class="fecha" value="<?php echo date("d/m/Y"); ?>" type="text" name="fecha_OT" id="fecha_OT"></label></div>

<input type="hidden" id="form_sent" name="form_sent" value="true"  >
<input type="submit" id="btn-submit" value="Enviar">

</form>
<hr>
<?php if (isset($_GET['form_sent']) && $_GET['form_sent'] == "true") { ?>

<?php include_once('conexion.php'); ?>
<?php 

$sdate = $_GET['star_date'];
$ssdate = explode('/', $sdate);
$star_date = $ssdate[2]."/".$ssdate[0]."/".$ssdate[1];
echo ('<h3>'.$star_date.'</h3>');

$edate = $_GET['end_date'];
$eedate = explode('/', $edate);
$end_date = $eedate[2]."/".$eedate[0]."/".$eedate[1];
echo ('<h3>'.$end_date.'</h3>');


//seleciona los datos de la base de datos
$strsql= "SELECT id_orden_trabajo, fecha_OT, valorCotizacionOT FROM orden_trabajo WHERE fecha_OT BETWEEN '$star_date' AND '$end_date' ";

echo('<h3>'.$strsql.'</h3>');

$rs = mysql_query($strsql) or die(mysql_error());
$row = mysql_fetch_assoc($rs);
$total_rows = mysql_num_rows($rs);

?>

<table width="800" border="10" cellspacing="0" cellpadding="2"> 
	<tr>
		<td>ID</td>
		<td>Fecha</td>
		<td>Monto</td>
	</tr>
	<?php if ($total_rows>0){
		do{
	 ?>
	 <tr>
	 	<td><?php echo ($row['id_orden_trabajo']);?></td>
	 	<td><?php echo ($row['fecha_OT']);?></td>
	 	<td><?php echo ($row['valorCotizacionOT']);?></td>
	 </tr>
<?php 
	}while ($row = mysql_fetch_assoc($rs));
	mysql_free_result($rs);
}else{
?>	
	<tr>
		<td colspan="11">No dta found.</td>
	</tr>
	<?php } ?>
	
</table>


<?php } ?>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.2.1.js"></script>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
        <script src="js/jquery-ui.min.js"></script>
    <script src="js/datepicker-es.js"></script> 
   
</body>
<footer> </footer>
</html>
