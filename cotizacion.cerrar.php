<?php
session_start();
include("conexion.php");
if (isset($_SESSION['correo'])) {?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Modificar Cotización</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="js/bootstrap.min.js">
  <script language="JavaScript" type="text/javascript" src="js/ajax.js"></script>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/jquery-ui.min.css">
  <link rel="stylesheet" href="css/calendario.css">
  <link rel="stylesheet" href="js/bootstrap.min.js">
  <link href="css/jqueryui.css" type="text/css" rel="stylesheet"/>
<script language="JavaScript" type="text/javascript" src="js/calendario.js"></script>
  <script language="JavaScript" type="text/javascript" src="js/calendario.js"></script>
  <!--link para el estilo del calendario en jquery-->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script>
  $( function() {
    $( "#fecha_respuesta" ).datepicker({
      changeMonth:true,
      changeYear:true,
      showOn: "",
      buttonImage: "",
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
  color:#8E8E8E;
}
label.coti {
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
<a href="cotizacion.php"><button  class="btn btn-default" type="submit"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"> NUEVO</span></button></a>
<a href="cotizacion.buscar.php"><button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"> BUSCAR</span></button></a>
<button class="btn btn-default" type="button"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"> VOLVER</span></button>

<br><br>

<h1>Cerrar Cotización</h1>
<!--Comienzo de Formulario-->
<form class="form-group" action=""  method="POST">

<div class="col-xs-5">
<label class="coti" for="">Fecha Respuesta: <input class="" readonly value="<?php echo date("Y/m/d");?>" type="text" name="fecha_respuesta" id="fecha_respuesta"></label></div>


<div class="col-xs-5" >
<label for="">Valor Cotización</label>
<input type="text" class="form-control" name="valorCotizacion" disabled="" id="valorCotizacion" maxlength="9" placeholder="$"
  required="" value="" ></div>

<div class="col-xs-5" >
<label class="coti" for="">Descripción de Cotización:</label>
<textarea name="comentario" id="comentario"  rows="4" cols="53"></textarea>
</div>




<div class="col-xs-5 has-error">
<label class="coti" for="">Estado:</label>
  <div class="checkbox has-success">
    <label class="radio-inline">
  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="5"> Aceptada
</label>
  </div>
   <div class="checkbox has-error">
    <label class="radio-inline">
  <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="6"> No Aceptada
</label>
  </div>
</div>

<div class="col-xs-10  has-error">
<h2 class="bg-primary text-center pad-basic no-btn">Repuesto Solicitados</h2>
<table class="table bg-info table-responsive" id="tabla">
    <tbody>
      <tr>
       <td><h4>Seleccionar</h4></td>
        <td><h4>Cliente</h4></td>
        <td><h4>Orden Trabajo</h4></td>
        <td><h4>N° Partner</h4></td>
        <td><h4>Marca</h4></td>
        <td><h4>Comentario</h4></td>
        <td><h4>Valor Repuesto</h4></td>
      </tr>
<?php
include("conexion.php");
   $id=$_REQUEST['id'];

  $dbhandle=mysql_query("SELECT cotizacion.id_cotizacion, cotizacion.venta_repuesto, cotizacion.venta_repuesto_uno, cotizacion.venta_repuesto_dos, cotizacion.venta_repuesto_tres, cotizacion.venta_repuesto_cuatro, cotizacion.venta_repuesto_cinco, cotizacion.venta_repuesto_seis, orden_trabajo.correlativo_ot, orden_trabajo.n_partner, orden_trabajo.marca, orden_trabajo.comentarioo, orden_trabajo.n_partner1, orden_trabajo.marca1, orden_trabajo.comentario1 , orden_trabajo.n_partner2, orden_trabajo.marca2, orden_trabajo.comentario2, orden_trabajo.n_partner3, orden_trabajo.marca3, orden_trabajo.comentario3, orden_trabajo.n_partner4, orden_trabajo.marca4, orden_trabajo.comentario4, orden_trabajo.n_partner5, orden_trabajo.marca5, orden_trabajo.comentario5, orden_trabajo.n_partner6, orden_trabajo.marca6, orden_trabajo.comentario6, cliente.nombre FROM cotizacion INNER JOIN orden_trabajo ON cotizacion.id_orden_trabajo=orden_trabajo.id_orden_trabajo INNER JOIN  cliente ON orden_trabajo.id_cliente=cliente.id_cliente  WHERE id_cotizacion='$id' ");

   while($muestra=mysql_fetch_array($dbhandle)){

   echo '<tr>';
   echo '<td>'.'<input class="" type="checkbox" name="" id="" value="' . $muestra["venta_repuesto"] . '">'.'</td>';
   echo '<td>'.'<strong>'.$muestra['nombre'].'</strong>'.'</td>';
   echo '<td>'.'<strong>'.$muestra['correlativo_ot'].'</strong>'.'</td>';
   echo '<td>'.$muestra['n_partner'].'</td>';
   echo '<td>'.$muestra['marca'].'</td>';
   echo '<td>'.$muestra['comentarioo'].'</td>';
   echo '<td>'.$muestra['venta_repuesto'].'</td>';
   echo '<td></td>';
   echo '<tr>';
   echo '<td>'.'<input class="" type="checkbox"  name="" id="">'.'</td>';
   echo '<td></td>';
   echo '<td></td>';
   echo '<td>'.$muestra['n_partner1'].'</td>';
   echo '<td>'.$muestra['marca1'].'</td>';
   echo '<td>'.$muestra['comentario1'].'</td>';
   echo '<td>'.$muestra['venta_repuesto_uno'].'</td>';
   echo '<td></td>';
   echo '<tr>';
   echo '<td>'.'<input class="" type="checkbox"  name="" id="">'.'</td>';
   echo '<td></td>';
   echo '<td></td>';
   echo '<td>'.$muestra['n_partner2'].'</td>';
   echo '<td>'.$muestra['marca2'].'</td>';
   echo '<td>'.$muestra['comentario2'].'</td>';
   echo '<td>'.$muestra['venta_repuesto_dos'].'</td>';
   echo '<td></td>';
   echo '<tr>';
   echo '<td>'.'<input class="" type="checkbox"  name="" id="">'.'</td>';
   echo '<td></td>';
   echo '<td></td>';
   echo '<td>'.$muestra['n_partner3'].'</td>';
   echo '<td>'.$muestra['marca3'].'</td>';
   echo '<td>'.$muestra['comentario3'].'</td>';
   echo '<td>'.$muestra['venta_repuesto_tres'].'</td>';
   echo '<td></td>';
   echo '<tr>';
   echo '<td>'.'<input class="" type="checkbox"  name="" id="">'.'</td>';
   echo '<td></td>';
   echo '<td></td>';
   echo '<td>'.$muestra['n_partner4'].'</td>';
   echo '<td>'.$muestra['marca4'].'</td>';
   echo '<td>'.$muestra['comentario4'].'</td>';
   echo '<td>'.$muestra['venta_repuesto_cuatro'].'</td>';
   echo '<td></td>';
   echo '<tr>';
   echo '<td>'.'<input class="" type="checkbox"  name="" id="">'.'</td>';
   echo '<td></td>';
   echo '<td></td>';
   echo '<td>'.$muestra['n_partner5'].'</td>';
   echo '<td>'.$muestra['marca5'].'</td>';
   echo '<td>'.$muestra['comentario5'].'</td>';
   echo '<td>'.$muestra['venta_repuesto_cinco'].'</td>';
   echo '<td></td>';
   echo '<tr>';
   echo '<td>'.'<input class="" type="checkbox"  name="" id="">'.'</td>';
   echo '<td></td>';
   echo '<td></td>';
   echo '<td>'.$muestra['n_partner6'].'</td>';
   echo '<td>'.$muestra['marca6'].'</td>';
   echo '<td>'.$muestra['comentario6'].'</td>';
   echo '<td>'.$muestra['venta_repuesto_seis'].'</td>';
   echo '<td></td>';
   echo '<tr>';  
}
?> 
<?php
#Cerramos la conexión con la base de datos
mysql_close();
?>


    </tbody>
</table>
</div>

<div class="col-xs-10  has-error">
<h2 class="bg-primary text-center pad-basic no-btn">Mano de Obra Requerida</h2>
<table class="table bg-info table-responsive" id="tabla">
    <tbody>
      <tr>
       <td><h4>Seleccionar</h4></td>
        <td><h4>Cliente</h4></td>
        <td><h4>Orden Trabajo</h4></td>
        <td><h4>Mano Obra</h4></td>
        <td><h4>Valor Mano Obra</h4></td>
      </tr>
<?php
include("conexion.php");
   $id=$_REQUEST['id'];

  $dbhandle=mysql_query("SELECT cotizacion.id_cotizacion, orden_trabajo.correlativo_ot, orden_trabajo.manoObra, orden_trabajo.manoObra1, orden_trabajo.manoObra2, orden_trabajo.manoObra3, orden_trabajo.manoObra4, orden_trabajo.manoObra5, orden_trabajo.manoObra6, orden_trabajo.valor_mano, orden_trabajo.valor_mano1, orden_trabajo.valor_mano2, orden_trabajo.valor_mano3, orden_trabajo.valor_mano4, orden_trabajo.valor_mano5, orden_trabajo.valor_mano6, cliente.nombre FROM cotizacion INNER JOIN orden_trabajo ON cotizacion.id_orden_trabajo=orden_trabajo.id_orden_trabajo INNER JOIN  cliente ON orden_trabajo.id_cliente=cliente.id_cliente  WHERE id_cotizacion='$id' ");

   while($muestra=mysql_fetch_array($dbhandle)){

   echo '<tr>';
   echo '<td>'.'<input class="" type="checkbox" name="" id="">'.'</td>';
   echo '<td>'.'<strong>'.$muestra['nombre'].'</strong>'.'</td>';
   echo '<td>'.'<strong>'.$muestra['correlativo_ot'].'</strong>'.'</td>';
   echo '<td>'.$muestra['manoObra'].'</td>';
   echo '<td>'.$muestra['valor_mano'].'</td>';
   echo '<td></td>';
   echo '<tr>';
   echo '<td>'.'<input class="" type="checkbox"  name="" id="">'.'</td>';
   echo '<td></td>';
   echo '<td></td>';
   echo '<td>'.$muestra['manoObra1'].'</td>';
   echo '<td>'.$muestra['valor_mano1'].'</td>';
   echo '<td></td>';
   echo '<tr>';
   echo '<td>'.'<input class="" type="checkbox"  name="" id="">'.'</td>';
   echo '<td></td>';
   echo '<td></td>';
   echo '<td>'.$muestra['manoObra2'].'</td>';
   echo '<td>'.$muestra['valor_mano2'].'</td>';
   echo '<td></td>';
   echo '<tr>';
   echo '<td>'.'<input class="" type="checkbox"  name="" id="">'.'</td>';
   echo '<td></td>';
   echo '<td></td>';
   echo '<td>'.$muestra['manoObra3'].'</td>';
   echo '<td>'.$muestra['valor_mano3'].'</td>';
   echo '<td></td>';
   echo '<tr>';
   echo '<td>'.'<input class="" type="checkbox"  name="" id="">'.'</td>';
   echo '<td></td>';
   echo '<td></td>';
   echo '<td>'.$muestra['manoObra4'].'</td>';
   echo '<td>'.$muestra['valor_mano4'].'</td>';
   echo '<td></td>';
   echo '<tr>';
   echo '<td>'.'<input class="" type="checkbox"  name="" id="">'.'</td>';
   echo '<td></td>';
   echo '<td></td>';
   echo '<td>'.$muestra['manoObra5'].'</td>';
   echo '<td>'.$muestra['valor_mano5'].'</td>';
   echo '<td></td>';
   echo '<tr>';
   echo '<td>'.'<input class="" type="checkbox"  name="" id="">'.'</td>';
   echo '<td></td>';
   echo '<td></td>';
   echo '<td>'.$muestra['manoObra6'].'</td>';
   echo '<td>'.$muestra['valor_mano6'].'</td>';
   echo '<td></td>';
   echo '<tr>';  
}
?> 
<?php
#Cerramos la conexión con la base de datos
mysql_close();
?>
    </tbody>
</table>
</div>

  <div class="col-xs-5">
  <button type="submit" class="btn btn-primary btn-lg btn-block"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Cerrar Cotización</button></div>
  <div class="col-xs-5">
  <button type="reset" class="btn btn-default btn-lg btn-block"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Cancelar</button></div>

</div>
</form>
</div>

<?php
include("conexion.php");
 
      $id=$_REQUEST['id'];  
      $id_estado = isset($_POST['inlineRadioOptions']) ? $_POST['inlineRadioOptions']: ''; 
      $fecha_respuesta = isset($_POST['fecha_respuesta']) ? $_POST['fecha_respuesta']: '';    
      $comentario = isset($_POST['comentario']) ? $_POST['comentario']: ''; 


   // conexión a la base de datos de
$dbhandle = mysql_connect($hostname, $username, $password) 
 or die("No se pudo Contactar a Base de Datos MySQL");


// seleccionar una base de datos para trabajar con
$selected = mysql_select_db("bdcass",$dbhandle) 
  or die("No se pudo seleccionar la base de datos CASS");

  mysql_query("UPDATE cotizacion SET id_estado='$id_estado', fecha_respuesta='$fecha_respuesta', comentario='$comentario'  WHERE id_cotizacion='$id'");
 
?>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery-3.2.1.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="validarrut.js"></script>
    <script src="validaletras.js"></script>
    <script src="validanumeros.js"></script>
    <script src="validaremail.js"></script>
    <!--<script src="relaciones.js"></script>-->
      <script src="js/jquery.js"></script>    
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/datepicker-es.js"></script>
</body>
<footer> </footer>
</html>
<?php
}else{
  echo '<script> window.location="index.php";</script>';//esto se podria llamar login.php, me dirije al login
}

?>