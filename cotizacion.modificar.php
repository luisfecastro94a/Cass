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
  color:#8E8E8E;
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
<?php
    $id=$_REQUEST['id'];
    include("conexion.php");     
      $consulta=mysql_query("SELECT cotizacion.correlativo_cotizacion, cotizacion.fecha_cotizacion, cotizacion.comentario, cotizacion.valorCotizacion, orden_trabajo.correlativo_ot, orden_trabajo.valorReparacion, cliente.nombre, cliente.rut, cliente.fono, cliente.correo, cliente.direccion, ciudad.nombrec, equipo.serie_equipo, estado.id_estado, estado.estado FROM cotizacion INNER JOIN orden_trabajo ON cotizacion.id_orden_trabajo=orden_trabajo.id_orden_trabajo INNER JOIN cliente ON orden_trabajo.id_cliente=cliente.id_cliente INNER JOIN ciudad ON cliente.id_ciudad=ciudad.id_ciudad INNER JOIN equipo ON orden_trabajo.id_equipo=equipo.id_equipo INNER JOIN estado ON cotizacion.id_estado=estado.id_estado WHERE id_cotizacion='$id'")or die(mysql_error());
      $reg=mysql_fetch_array($consulta);
  ?>
<h1>Modificar Cotización</h1>
<!--Comienzo de Formulario-->
<form class="form-group" action=""  method="POST">

<div class="container">


<div class="col-xs-5">
<label for=""> N° de Orden de Trabajo</label>
<input type="text" class="form-control" id="correlativo_ot" disabled="" value="<?php echo $reg['correlativo_ot'];?>" name="correlativo_ot" ></div>


<div class="col-xs-5">
<label class="fe" for="">Fecha Cotización<input class="" disabled="" value="<?php echo $reg['fecha_cotizacion'];?>" type="text" name="fecha_cotizacion" id="fecha_cotizacion"></label></div>


<div class="col-xs-5">
<label for="">Numero de Cotización</label>
<input type="text" class="form-control" id="correlativo_cotizacion" disabled="" value="<?php echo $reg['correlativo_cotizacion'];?>" name="correlativo_cotizacion"  ></div>


<div class="col-xs-5" >
<label for="">Cliente</label>
<input type="text" class="form-control" name="id_cliente" id="nombre" disabled=""  placeholder="Nombre Cliente" required="" value="<?php echo $reg['nombre'];?>" ></div>


<div class="col-xs-5" >
<label for="">Rut Empresa:</label>
<input type="text" class="form-control" id="rut" name="rut" disabled=""  placeholder="Rut"  required oninput="checkRut(this)" value="<?php echo $reg['rut'];?>" ></div>


<div class="col-xs-5" >
<label for="">Fono/Fax Empresa:</label>
<input type="text" class="form-control" name="fono" id="fono" disabled="" maxlength="9" placeholder="Fono/Fax" onKeyPress="return SoloNumeros(event)"
  required="" value="<?php echo $reg['fono'];?>" ></div>

<div class="col-xs-5" >
<label for="">Correo:</label>
<input type="email" class="form-control" name="correo" id="correo" disabled=""  placeholder="E-mail" required="" value="<?php echo $reg['correo'];?>" ></div>

<div class="col-xs-5" >
<label for="">Direccion:</label>
<input type="text" class="form-control" id="direccion" name="direccion" disabled="" placeholder="Direccion" required="" value="<?php echo $reg['direccion'];?>"></div>

<div class="col-xs-5" >
<label for="">Ciudad:</label>
<input type="text" class="form-control" id="nombrec" name="id_ciudad" disabled="" placeholder="Ciudad" required="" value="<?php echo $reg['nombrec'];?>"></div>

<div class="col-xs-5" >
<label for="">Serie del Equipo</label>
<input type="text" class="form-control" name="id_equipo" id="serie_equipo" disabled=""  placeholder="Serie de Equipo" required="" value="<?php echo $reg['serie_equipo'];?>" ></div>


<div class="col-xs-5" >
<label for="">Valor Cotización</label>
<input type="text" class="form-control" name="valorCotizacion" disabled="" id="valorCotizacion" maxlength="9" placeholder="$"
  required="" value="<?php echo $reg['valorCotizacion'];?>" ></div>

<div class="col-xs-5" >
<label for="">Descripción de Cotización</label>
<textarea name="comentario" id="comentario"  rows="4" cols="53"><?php echo $reg['comentario'];?></textarea>
</div>

<div class="col-xs-5">
<label class="fe" for="">Fecha Respuesta <input class=""  value="<?php echo date("d/m/Y");?>" type="text" name="fecha_respuesta" id="fecha_respuesta"></label></div>


<?php
include("conexion.php");
$consulta4="SELECT * FROM estado WHERE relacion='cotizacion'";
$asig3=mysql_query($consulta4);
?>
<div class="col-xs-5" >
<label for="">Estado</label>
<select id="id_estado" class="form-control" name="id_estado" > 
<option value="<?php echo $reg['id_estado'];?>" selected=""><?php echo $reg['estado'];?></option>
 <?php
      while($fil=mysql_fetch_array($asig3))
  {?>
      <option value="<?php echo $fil['0']?>"><?php echo $fil['1'];?></option>
  <?php } ?>
</select>
</div>

  
  <div class="col-xs-5">
  <button type="submit" class="btn btn-primary btn-lg btn-block">Modificar</button></div>
  <div class="col-xs-5">
  <button type="reset" class="btn btn-default btn-lg btn-block">Cancelar</button></div>

</div>
</form>
</div>

<?php
include("conexion.php");
 


      $id=$_REQUEST['id'];  
      $id_estado = isset($_POST['id_estado']) ? $_POST['id_estado']: ''; 
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