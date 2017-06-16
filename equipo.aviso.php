<?php
session_start();
include("conexion.php");
if (isset($_SESSION['correo'])) {?>

<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="UTF-8">

	<title>Avisar a Cliente</title>
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
    $( "#fecha_aviso" ).datepicker({
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
    $( "#fecha_aviso1" ).datepicker({
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
    $( "#fecha_aviso2" ).datepicker({
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
            <li><a href="equipo.aviso.php">Aviso Reparación</a></li>
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


<a href="equipo.aviso.php"><button  class="btn btn-default" type="submit"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"> NUEVO</span></button></a>
<a href="equipo.avisob.php"><button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"> BUSCAR</span></button></a>
<button class="btn btn-default" type="button"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"> VOLVER</span></button>

<br><br>
<h1>Avisos de Equipos</h1>

<form class="form-group" action=""  method="POST" onSubmit="return validar()" enctype="multipart/form-data" >

<div class="container">


<div class="col-xs-5" >
<label for="">Serie del Equipo:</label>
<select  id="serieEquipo" class="form-control" onchange="listaaviso(this.value)" name="id_equipo" value=""> 
<option value="0" >---Selecionar Equipo---</option>
</select>
</div> 


<div class="col-xs-5" >
<label for="">Sintoma del Cliente:</label>
<textarea rows="4" cols="53" title="Ingresar el sintoma del cliente" id="sintoma_cliente" name="sintoma_cliente"></textarea>
</div>


<div class="col-xs-5" >
<label for="">Marca:</label>
<input type="text" class="form-control" id="marca" name="marca" placeholder="Marca" required="" value=""></div>

<div class="col-xs-5" >
<label for="">Estado:</label>
<input type="text" class="form-control" id="estado" name="estado" placeholder="Estado" required="" value=""></div>

<div class="col-xs-5" >
<label for="">Cliente:</label>
<input type="text" class="form-control" name="nombre" id="nombre" maxlength="9" placeholder="Cliente" required="" value="" ></div>


<div class="col-xs-5" >
<label for="">Rut Empresa:</label>
<input type="text" class="form-control" id="rut" name="rut"  placeholder="Rut"  required oninput="checkRut(this)" value="" ></div>


<div class="col-xs-5" >
<label for="">Fono/Fax Empresa:</label>
<input type="text" class="form-control" name="fono" id="fono" maxlength="9" placeholder="Fono/Fax" onKeyPress="return SoloNumeros(event)"
  required="" value="" ></div>


<div class="col-xs-5" >
<label for="">Correo:</label>
<input type="email" class="form-control" name="correo" id="correo"   placeholder="E-mail" required="" value="" ></div>

<div class="col-xs-5" >
<label for="">Direccion:</label>
<input type="text" class="form-control" id="direccion" name="direccion" placeholder="Direccion" required="" value=""></div>


<div class="col-xs-5" >
<label class="fe" for="">Fecha Aviso 1</label>
<input class="fecha" type="text" name="fecha_aviso" id="fecha_aviso" value="<?php echo date("d/m/Y"); ?>">
<br>
<label for="">Medio de Aviso</label>
<select class="form-control" name="medio_aviso" id="medio_aviso">
<option value="">---Selecionar Medio de Aviso---</option>
  <option value="TELEFONO">TELEFONO</option>
  <option value="CORREO">CORREO</option>
  <option value="DOMICILIO">DOMICILIO</option>
</select>
</div>

<div class="col-xs-5" >
<label class="fe" for="">Fecha Aviso 2</label>
<input class="fecha" type="text" name="fecha_aviso1" id="fecha_aviso1" value="<?php echo date("d/m/Y"); ?>" disabled >
<br>
<label for="">Medio de Aviso</label>
<select class="form-control" name="medio_aviso1" id="medio_aviso1" disabled>
<option value="">---Selecionar Medio de Aviso---</option>
  <option value="TELEFONO">TELEFONO</option>
  <option value="CORREO">CORREO</option>
  <option value="DOMICILIO">DOMICILIO</option>
</select></div>


<div class="col-xs-5" >
<label class="fe" for="">Fecha Aviso 3</label>
<input class="fecha" type="text" name="fecha_aviso2" id="fecha_aviso2" value="<?php echo date("d/m/Y"); ?>" disabled>
<br>
<label for="">Medio de Aviso</label>
<select class="form-control" name="medio_aviso2" id="medio_aviso2" disabled>
<option value="">---Selecionar Medio de Aviso---</option>
  <option value="TELEFONO">TELEFONO</option>
  <option value="CORREO">CORREO</option>
  <option value="DOMICILIO">DOMICILIO</option>
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
     isset($_POST['fecha_aviso']) && !empty($_POST['fecha_aviso']) &&
     isset($_POST['medio_aviso']) && !empty($_POST['medio_aviso']))
  {
      $id_equipo = $_POST['id_equipo']; 
      $fecha_aviso = $_POST['fecha_aviso'];
      $medio_aviso = $_POST['medio_aviso'];
      
      
// conexión a la base de datos de
$dbhandle = mysql_connect($hostname, $username, $password) 
 or die("No se pudo Contactar a Base de Datos MySQL");
// seleccionar una base de datos para trabajar con
$selected = mysql_select_db("bdcass",$dbhandle) 
  or die("No se pudo seleccionar la base de datos CASS");
// Comprobamos si la serie_equipo esta registrado 
include("conexion.php");

$nuevo_rut=mysql_query("SELECT id_equipo FROM equipo_aviso WHERE id_equipo='$id_equipo' "); 
if(mysql_num_rows($nuevo_rut)>0) 
{ 
echo " 
<script> alert('Ya se Aviso una Primera vez a este Equipo, Modifique el AVISO!!') </script>
<p class='avisos'><a href='javascript:history.go(-1)' class='clase1 btn btn-danger'>Volver atrás</a></p> 
"; 
}
else{
  $consulta=mysql_query("INSERT INTO equipo_aviso (id_equipo, fecha_aviso, medio_aviso) VALUES ('$id_equipo', '$fecha_aviso','$medio_aviso')") or die(mysql_errno());
 echo '<script> alert("Aviso generado con Exito!! :) "); </script>';
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
    <script src="js/listaequiposAviso.js"></script>
    <script src="js/autollenado.aviso.js"></script>
    <script src="js/listaProveedor.js"></script>
    <script src="js/autollenado.repuesto.js"></script>
</body>
<footer></footer>
</html>
<?php
}else{
  echo '<script> window.location="index.php";</script>';
}

?>