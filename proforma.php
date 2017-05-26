<?php
session_start();
include("conexion.php");
if (isset($_SESSION['correo'])) {?>

<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="UTF-8">

	<title>Proforma</title>
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
    $( "#fecha_proforma" ).datepicker({
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


<a href="proforma.php"><button  class="btn btn-default" type="submit"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"> NUEVO</span></button></a>
<a href="proforma.buscar.php"><button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"> BUSCAR</span></button></a>
<button class="btn btn-default" type="button"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"> VOLVER</span></button>

<br><br>
<h1>Crear Proforma</h1>

<form class="form-group" action="" name="formcotizacion" id="cotizacion" method="POST" onSubmit="return validar()">

<div class="container">



<?php
include("conexion.php");


$consulta4="SELECT * FROM orden_trabajo WHERE correlativo_cotizacion>0";//me muestra los que tienen una cotizacion
$asig3=mysql_query($consulta4);

?>
<div class="col-xs-5" >
<label for="">Elegir N° de Orden de Trabajo</label>
<select id="correlativo_ot" class="form-control" name="id_orden_trabajo" onchange="proforma(this.value)" value="" > 
<option value="" selected="">---Seleccionar Numero de OT---</option>
 <?php
      while($fil=mysql_fetch_array($asig3))
  {?>
      <option value="<?php echo $fil['0']?>"><?php echo $fil['1'];?></option>
  <?php } ?>
</select>
</div>

<div class="col-xs-5">
<label class="fe" for="">Fecha de Proforma<input class="" readonly value="<?php echo date("d/m/Y"); ?>" type="text" name="fecha_proforma" id="fecha_proforma"></label></div>

<?php
  //codigo para que muestre el correlativo de mi orden de trabajo
    $sql = "SELECT MAX(correlativo_proforma) as max FROM proforma ";
    $resultado = mysql_query($sql);
    $row = mysql_fetch_array($resultado);
    $mensaje =$row["max"]+1;
?>
<div class="col-xs-5">
<label for="">Numero de Proforma</label>
<input type="text" class="form-control" id="correlativo_proforma" readonly value="<?=$mensaje?>" name="correlativo_proforma"  ></div>


<div class="col-xs-5" >
<label for="">Cliente</label>
<input type="text" class="form-control" name="id_cliente" id="nombre" disabled=""  placeholder="Nombre Cliente" required="" value="" ></div>


<div class="col-xs-5" >
<label for="">Rut Empresa:</label>
<input type="text" class="form-control" id="rut" name="rut" disabled="" placeholder="Rut"  required oninput="checkRut(this)" value="" ></div>


<div class="col-xs-5" >
<label for="">Fono/Fax Empresa:</label>
<input type="text" class="form-control" name="fono" id="fono" disabled="" maxlength="9" placeholder="Fono/Fax" onKeyPress="return SoloNumeros(event)"
  required="" value="" ></div>

<div class="col-xs-5" >
<label for="">Correo:</label>
<input type="email" class="form-control" name="correo" id="correo" disabled=""  placeholder="E-mail" required="" value="" ></div>

<div class="col-xs-5" >
<label for="">Direccion:</label>
<input type="text" class="form-control" id="direccion" disabled="" name="direccion" placeholder="Direccion" required="" value=""></div>

<div class="col-xs-5" >
<label for="">Ciudad:</label>
<input type="text" class="form-control" id="nombrec" disabled="" name="id_ciudad" placeholder="Ciudad" required="" value=""></div>

<div class="col-xs-5" >
<label for="">Serie del Equipo</label>
<input type="text" class="form-control" name="id_equipo" id="serie_equipo" disabled=""   placeholder="Serie de Equipo" required="" value="" ></div>


<div class="col-xs-5" >
<label for="">Valor Presupuesto</label>
<input type="text" class="form-control" disabled=""  name="valorReparacion" id="valorReparacion" maxlength="9" placeholder="$ "  required="" value="" ></div>



<div class="col-xs-5" >
<label for="">Valor Repuesto</label>
<input type="text" class="form-control" disabled="" name="valorRepuestoOT" id="valorRepuestoOT" maxlength="9" placeholder="$" 
  required="" value="" ></div>



<div class="col-xs-5" >
<label for="">Valor Cotización</label>
<input type="text" class="form-control" disabled="" name="valorCotizacionOT" id="valorCotizacionOT" maxlength="9" placeholder="$"
  required="" value="" ></div>

<div class="col-xs-5" >
<label for="">Técnico</label>
<input type="text" class="form-control" disabled="" name="nombreUsuario" id="nombreUsuario" 
  required="" value="" ></div>

  
  <div class="col-xs-5">
  <button type="submit" id="enviar" class="btn btn-primary btn-lg btn-block">Generar Proforma</button></div>
  <div class="col-xs-5">
  <button type="reset" class="btn btn-default btn-lg btn-block">Cancelar</button>
  </div>

</div>
</form>
</div>

<?php
if
    (
     isset($_POST['correlativo_proforma']) && !empty($_POST['correlativo_proforma']) &&
     isset($_POST['fecha_proforma']) && !empty($_POST['fecha_proforma']) &&
     isset($_POST['id_orden_trabajo']) && !empty($_POST['id_orden_trabajo']))
  {

      
      $correlativo_proforma = $_POST['correlativo_proforma'];
      $fecha_proforma = $_POST['fecha_proforma'];
      $id_orden_trabajo = $_POST['id_orden_trabajo']; 
 

    // conexión a la base de datos de
$dbhandle = mysql_connect($hostname, $username, $password) 
 or die("No se pudo Contactar a Base de Datos MySQL");


// seleccionar una base de datos para trabajar con
$selected = mysql_select_db("bdcass",$dbhandle) 
  or die("No se pudo seleccionar la base de datos CASS");

// ============================================== 
// Comprobamos si el rut esta registrado 
include("conexion.php");

$nuevo_ot=mysql_query("SELECT id_orden_trabajo FROM proforma WHERE id_orden_trabajo='$id_orden_trabajo'"); 
if(mysql_num_rows($nuevo_ot)>0) 
{ 
echo " 
'<script> alert('N° de OT ya tiene PROFORMA'); </script>'; 
<p class='avisos'><a href='javascript:history.go(-1)' class='btn btn-danger clase1'>Volver atrás</a></p> 
"; 
}
else{
  
  $consulta=mysql_query("INSERT INTO proforma (correlativo_proforma, fecha_proforma, id_orden_trabajo ) VALUES ('$correlativo_proforma', '$fecha_proforma','$id_orden_trabajo')") or die(mysql_errno());
 echo '<script> alert("Proforma Creada con Exito."); </script>';

}

}
?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.2.1.js"></script>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="validarrut.js"></script>
    <script src="validaletras.js"></script>
    <script src="validanumeros.js"></script>    
    <script src="js/jquery.js"></script>    
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/datepicker-es.js"></script>
    <script src="js/autollenado.js" ></script>
    <script src="listarencargado.js"></script>
    <script src="listaequipos.js"></script>
    <script src="js/autollenadoequipo.js"></script>
    <!--<script src="js/main.js"></script> -->
    <script src="js/jquery-1.12.4.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/buscaot.js"></script>  
    <script src="js/autollenadoproforma.js"></script>
    <script src="js/numerosiles.js"></script>
<footer> </footer>
</body>
</html>
<?php
}else{
  echo '<script> window.location="index.php";</script>';
}

?>