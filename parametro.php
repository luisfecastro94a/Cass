<?php
session_start();
include("conexion.php");
if (isset($_SESSION['correo'])) {?>

<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="UTF-8">

	<title>Parametros</title>
   <script language="JavaScript" type="text/javascript" src="js/ajax.js"></script>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="js/bootstrap.min.js">

	
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


<a href="parametro.php"><button  class="btn btn-default" type="submit"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"> NUEVO</span></button></a>
<a href="parametro.buscar.php"><button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"> BUSCAR</span></button></a>
<button class="btn btn-default" type="button"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"> VOLVER</span></button>

<br><br>
<h1>Crear Parametros</h1>

<form class="form-group" action=""  method="POST" onSubmit="return validar()">

<div class="container">


<div class="col-xs-5" >
<label for="">Equipos Reparados</label>
<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Equipos Reparados"  required="" onKeyPress="return SoloNumeros(event)"></div>
<div class="col-xs-5" >
<label for="">Equipos Espera de Respuestos</label>
<input type="text" class="form-control" id="rut" name="rut"  placeholder="Equipos Espera de Respuestos"  required " onKeyPress="return SoloNumeros(event)"></div>


<div class="col-xs-5" >
<label for="">Por Cotizar</label>
<input type="text" class="form-control" name="fono" id="fono" maxlength="9" placeholder="Por Cotizar" onKeyPress="return SoloNumeros(event)"
  required=""></div>

<div class="col-xs-5" >
<label for="">No Retirados</label>
<input type="email" class="form-control" name="correo" id="correo" onKeyPress="return SoloNumeros(event)"  placeholder="No Retirados" required=""></div>

<div class="col-xs-5" >
<label for="">Duración de Reparación</label>
<input type="text" class="form-control" name="giro" placeholder="Duración de Reparación" onKeyPress="return soloLetras(event)" required=""></div>

<div class="col-xs-5" >
<label for="">Cotizados</label>
<input type="text" class="form-control" name="direccion" placeholder="Cotizados" required=""></div>

<div class="col-xs-5" >
<label for="">Asignación a Técnico</label>
<input type="text" class="form-control" name="nombre_contacto" placeholder="Asignación a Técnico" onKeyPress="return soloLetras(event)" required=""></div>


  
  <div class="col-xs-5">
  <button type="submit" id="enviar" class="btn btn-primary btn-lg btn-block">Guardar</button>
  <button type="reset" class="btn btn-default btn-lg btn-block">Cancelar</button>
  </div>

</div>
</form>
</div>

<?php
if
    (isset($_POST['id_ciudad']) && !empty($_POST['id_ciudad']) &&
     isset($_POST['nombre']) && !empty($_POST['nombre']) &&
     isset($_POST['rut']) && !empty($_POST['rut']) &&
     isset($_POST['fono']) && !empty($_POST['fono']) &&
     isset($_POST['correo']) && !empty($_POST['correo']) &&
     isset($_POST['giro']) && !empty($_POST['giro']) &&
     isset($_POST['direccion']) && !empty($_POST['direccion']) &&
     isset($_POST['nombre_contacto']) && !empty($_POST['nombre_contacto']) &&
     isset($_POST['fono_contacto']) && !empty($_POST['fono_contacto']) &&
     isset($_POST['correo_contacto']) && !empty($_POST['correo_contacto']) &&
     isset($_POST['cargo_contacto']) && !empty($_POST['cargo_contacto']) &&
     isset($_POST['condicion_pago']) && !empty($_POST['condicion_pago']))
  {

      $Ciudad = $_POST['id_ciudad']; 
      $Nombre = $_POST['nombre'];
      $Rut = $_POST['rut'];
      $Fono = $_POST['fono'];
      $Correo = $_POST['correo'];
      $Giro = $_POST['giro'];
      $Direccion = $_POST['direccion'];
      $Nombre_contacto = $_POST['nombre_contacto'];
      $Fono_contacto = $_POST['fono_contacto'];
      $Correo_contacto = $_POST['correo_contacto'];
      $Cargo_contacto = $_POST['cargo_contacto'];
      $Condicion_pago = $_POST['condicion_pago'];

    // conexión a la base de datos de
$dbhandle = mysql_connect($hostname, $username, $password) 
 or die("No se pudo Contactar a Base de Datos MySQL");


// seleccionar una base de datos para trabajar con
$selected = mysql_select_db("bdcass",$dbhandle) 
  or die("No se pudo seleccionar la base de datos CASS");

// ============================================== 
// Comprobamos si el rut esta registrado 
include("conexion.php");

$nuevo_rut=mysql_query("SELECT rut FROM cliente WHERE rut='$Rut'"); 
if(mysql_num_rows($nuevo_rut)>0) 
{ 
echo " 
'<script> alert('Cliente ya se encuentra registrado'); </script>'; 
<p class='avisos'><a href='javascript:history.go(-1)' class='clase1'>Volver atrás</a></p> 
"; 
}
else{
  
  $consulta=mysql_query("INSERT INTO cliente (id_ciudad, nombre, rut, fono, correo, giro, direccion, nombre_contacto, fono_contacto, correo_contacto, cargo_contacto, condicion_pago) VALUES ('$Ciudad', '$Nombre','$Rut','$Fono','$Correo','$Giro', '$Direccion',  '$Nombre_contacto','$Fono_contacto','$Correo_contacto','$Cargo_contacto','$Condicion_pago')") or die(mysql_errno());
 echo '<script> alert("Cliente Creado con Exito."); </script>';

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
</body>
<footer> </footer>
</html>
<?php
}else{
  echo '<script> window.location="index.php";</script>';
}

?>