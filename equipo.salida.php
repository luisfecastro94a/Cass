<?php
session_start();
include("conexion.php");
if (isset($_SESSION['correo'])) {?>

<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="UTF-8">

	<title>Equipo</title>
    <script language="JavaScript" type="text/javascript" src="js/ajax.js"></script>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/jquery-ui.min.css">
  <link rel="stylesheet" href="css/calendario.css">
  <link rel="stylesheet" href="js/bootstrap.min.js">
  <script language="JavaScript" type="text/javascript" src="js/calendario.js"></script>

  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
   <script>
  $( function() {
    $( "#fecha_creacion" ).datepicker({
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


<a href="equipo.salida.php"><button  class="btn btn-default" type="submit"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"> NUEVO</span></button></a>
<a href=""><button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"> BUSCAR</span></button></a>
<button class="btn btn-default" type="button"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"> VOLVER</span></button>

<br><br>
<h1>Salida de Equipo</h1>

<form class="form-group" action=""  method="POST" onSubmit="return validar()" enctype="multipart/form-data" >

<div class="container">

<div class="form-group" >
<label class="fe" for="">Fecha Salida</label>
<input class="fecha" type="text" name="fecha_salida" id="fecha_salida" value="<?php echo date("d/m/Y");?>"></div>

<div class="col-xs-5" >
<label for="">Cliente</label>
<select id="nombreCliente" class="form-control" name="id_cliente" onchange="escola(this.value)" value="" > 
<option value="0">---Selecionar Cliente---</option>
</select>
</div>

<div class="col-xs-5" >
<label for="">Encargado Cliente:</label>
<select  class="form-control" id="nombreE" name="id_cliente_encargado" value=""> 
<option value="0" ></option>
</select>
</div> 


<div class="col-xs-5" >
<label for="">Serie del Equipo</label>
<select  class="form-control" id="serie_equipo" onchange="listaequipo(this.value)" name="id_equipo" value=""> 
<option value="0" ></option>
</select>
</div> 

  <div class="col-xs-5">
  <button type="submit" id="enviar" class="btn btn-primary btn-lg btn-block" data-toggle="tooltip" data-placement="top" title="Guardar el equipo"><span class="glyphicon glyphicon-floppy-disk " aria-hidden="true"></span> Guardar</button></div>
  <div class="col-xs-5">
  <button type="reset" class="btn btn-default btn-lg btn-block" title="Cancelar registro">Cancelar</button></div>
  
</div>
</form>
</div>
<?php
include("conexion.php");
if
    (isset($_POST['id_equipo']) && !empty($_POST['id_equipo']) &&
     isset($_POST['id_cliente']) && !empty($_POST['id_cliente']) &&
     isset($_POST['id_cliente_encargado']) && !empty($_POST['id_cliente_encargado']) &&
     isset($_POST['fecha_salida']) && !empty($_POST['fecha_salida']))
  {
      $id_cliente = $_POST['id_cliente'];
      $id_equipo = $_POST['id_equipo'];
      $id_cliente_encargado = $_POST['id_cliente_encargado']; 
      $fecha_salida = $_POST['fecha_salida'];
 // conexión a la base de datos de
$dbhandle = mysql_connect($hostname, $username, $password) 
 or die("No se pudo Contactar a Base de Datos MySQL");
// seleccionar una base de datos para trabajar con
$selected = mysql_select_db("bdcass",$dbhandle) 
  or die("No se pudo seleccionar la base de datos CASS");
// ============================================== 
// Comprobamos si el rut esta registrado 
include("conexion.php");
$salida_equipo=mysql_query("SELECT id_equipo FROM equipo_salida WHERE id_equipo='$id_equipo'"); 
if(mysql_num_rows($salida_equipo)>0) 
{ 
echo "
'<script>'' alert('Salida de Equipo realizada con Exito.'); '</script>';
<p class='avisos'><a href='javascript:history.go(-1)' class='clase1'>Volver atrás</a></p> 
"; 
}
else{
  $consulta=mysql_query("INSERT INTO equipo_salida (id_cliente, id_equipo, id_cliente_encargado, fecha_salida ) VALUES ('$id_cliente','$id_equipo','$id_cliente_encargado', '$fecha_salida')") or die(mysql_errno());
 echo '<script> alert("Salida de Equipo realizada con Exito."); </script>';
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
</body>
<footer> </footer>
</html>
<?php
}else{
  echo '<script> window.location="index.php";</script>';
}

?>