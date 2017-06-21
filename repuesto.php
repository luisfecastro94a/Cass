<?php
session_start();
include("conexion.php");
if (isset($_SESSION['correo'])) {?>

<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="UTF-8">
  <?php
  //var_dump($_POST);
  ?>
	<title>Repuestos</title>
   <script language="JavaScript" type="text/javascript" src="js/ajax.js"></script>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="js/bootstrap.min.js">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <script src="js/jquery-1.12.4.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/buscaot.js"></script>
  <script src="js/buscaproveedor.js"></script>

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
   .custom-combobox1 {
    position: relative;
    display: inline-block;
  }
  .custom-combobox1-toggle {
    position: absolute;
    top: 0;
    bottom: 0;
    margin-left: -1px;
    padding: 0;
  }
  .custom-combobox1-input {
    margin: 0;
    padding: 5px 10px;
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


<a href="repuesto.php"><button  class="btn btn-default" type="submit"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"> NUEVO</span></button></a>
<a href="repuesto.buscar.php"><button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"> BUSCAR</span></button></a>
<button class="btn btn-default" type="button"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"> VOLVER</span></button>

<br><br>
<h1>Ingresar Repuesto</h1>

<form class="form-group" action=""  method="POST" onSubmit="return validar()">

<div class="container">

<?php
include("conexion.php");


$consulta="SELECT id_orden_trabajo, correlativo_ot FROM orden_trabajo  ";
$asig=mysql_query($consulta);

?>
<div class="col-xs-5 ui-widget" >
<label for="">Orden de Trabajo: </label>
<select id="combobox" class="form-control" name="filtrarOT" class="form-control" > 
<option value="" selected="">---Seleccionar Orden de Trabajo---</option>
 <?php
      while($row=mysql_fetch_array($asig))
  {?>
      <option value="<?php echo $row['0']?>"><?php echo $row['1'];?></option>
  <?php } ?>
</select>
</div>


<div class="col-xs-5 ui-widget" >
<label for="">Proveedor:</label>
<select  id="razonSocial" class="form-control" onchange="repuesto(this.value)" name="id_proveedor" value=""> 
<option value="0" >---Selecionar Proveedor---</option>
</select>
</div> 

<div class="col-xs-5" >
<label for="">Razon Social:</label>
<input type="text" class="form-control" name="razon_social" id="razon_social"   placeholder="Razon Social" required=""></div>

<div class="col-xs-5" >
<label for="">Direccion:</label>
<input type="text" class="form-control" name="direccion" id="direccion"   placeholder="Direccion" required=""></div>
<div class="col-xs-5" >
<label for="">Fono:</label>
<input type="text" class="form-control" name="fono" id="fono"   placeholder="Fono" required=""></div>
<div class="col-xs-5" >
<label for="">Nombre Contacto:</label>
<input type="text" class="form-control" name="nombre_contacto" id="nombre_contacto" placeholder="Nombre Contacto" onKeyPress="return soloLetras(event)" required=""></div>
<div class="col-xs-5" >
<label for="">Fono Contacto:</label>
<input type="text" class="form-control" name="fono_contacto" id="fono_contacto" placeholder="Fono Contacto" onKeyPress="return SoloNumeros(event)" required=""></div>
<div class="col-xs-5" >
<label for="">Cargo Contacto:</label>
<input type="text" class="form-control" name="cargo_contacto" id="cargo_contacto" placeholder="Cargo Contacto" onKeyPress="return soloLetras(event)" required=""></div>

<div class="col-xs-5" >
<label for="">Codigo Repuesto</label>
<input type="text" class="form-control" name="codigo_repuesto" id="codigo_repuesto"  placeholder="Codigo Repuesto" 
  required=""></div>


<?php
include("conexion.php");


$consulta="SELECT * FROM marca  ";
$asig=mysql_query($consulta);

?>
<div class="col-xs-5 ui-widget" >
<label for="">Marca: </label>
<select id="combobox" class="form-control" name="id_marca" class="form-control" > 
<option value="" selected="">---Seleccionar Marca---</option>
 <?php
      while($row=mysql_fetch_array($asig))
  {?>
      <option value="<?php echo $row['0']?>"><?php echo $row['1'];?></option>
  <?php } ?>
</select>
</div>

<?php
include("conexion.php");


$con="SELECT * FROM area  ";
$mos=mysql_query($con);

?>
<div class="col-xs-5 ui-widget" >
<label for="">Area: </label>
<select id="combobox" class="form-control" name="id_area" class="form-control" > 
<option value="" selected="">---Seleccionar Area---</option>
 <?php
      while($row1=mysql_fetch_array($mos))
  {?>
      <option value="<?php echo $row1['0']?>"><?php echo $row1['1'];?></option>
  <?php } ?>
</select>
</div>



<div class="col-xs-5" >
<label for="">Modelo:</label>
<input type="text" class="form-control" name="modelo" placeholder="Modelo Repuesto" onKeyPress="return soloLetras(event)" required=""></div>

<div class="col-xs-5" >
<label for="">Año:</label>
<input type="text" class="form-control" name="ano" maxlength="4" minlength="4" placeholder="Año del Repuesto" required=""></div>

<div class="col-xs-5" >
<label for="">Duración:</label>
<input type="text" class="form-control" name="duracion" maxlength="10" placeholder="Duracion del Repuesto" required=""></div>

<div class="col-xs-5" >
<label for="">Valor Repuesto:</label>
<input type="text" class="form-control" name="valor_total" placeholder="Valor de Repuesto" onKeyPress="return SoloNumeros(event)" required=""></div>

<div class="col-xs-5">
<label class="coti" for="">Fecha Solicitud: <input class=""  value="<?php echo date("d/m/Y");?>" type="text" name="fecha_solicitud" id="fecha_respuesta"></label></div>

<div class="col-xs-5">
<label class="coti" for="">Fecha Respuesta: <input class=""  value="<?php echo date("d/m/Y");?>" type="text" name="fecha_ingreso" id="fecha_ingreso"></label></div>

<div class="col-xs-5">
  <label for="">Descripción</label>
  <textarea name="descripcion" id="descripcion" rows="4" cols="53"></textarea>
</div>
  
 <div class="col-xs-5 ">
  <button type="submit" id="enviar" class="btn btn-primary btn-lg btn-block" data-toggle="tooltip" title="Crear Cotización"><span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span> Guardar</button>
  </div>
   <div class="col-xs-5 ">
  <button type="reset" class="btn btn-default btn-lg btn-block" data-toggle="tooltip" title="Cancelar Cotización"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Cancelar</button>
  </div>

</div>
</form>
</div>

<?php
if
    (isset($_POST['id_proveedor']) && !empty($_POST['id_proveedor']) &&
     isset($_POST['id_marca']) && !empty($_POST['id_marca']) &&
     isset($_POST['id_area']) && !empty($_POST['id_area']) &&
     isset($_POST['nombre']) && !empty($_POST['nombre']) &&
     isset($_POST['modelo']) && !empty($_POST['modelo']) &&
     isset($_POST['valor_total']) && !empty($_POST['valor_total']) &&
     isset($_POST['fecha_solicitud']) && !empty($_POST['fecha_solicitud']))
  {
      $id_proveedor = $_POST['id_proveedor']; 
      $id_marca = $_POST['id_marca'];
      $id_area = $_POST['id_area'];
      $codigo_repuesto = $_POST['codigo_repuesto']; 
      $nombre = $_POST['nombre'];
      $modelo = $_POST['modelo'];
      $valor_total = $_POST['valor_total'];
      $fecha_solicitud = $_POST['fecha_solicitud'];
      $descripcion = $_POST['descripcion'];
      $ano = $_POST['ano'];
      $duracion = $_POST['duracion'];
    // conexión a la base de datos de
$dbhandle = mysql_connect($hostname, $username, $password) 
 or die("No se pudo Contactar a Base de Datos MySQL");

// seleccionar una base de datos para trabajar con
$selected = mysql_select_db("bdcass",$dbhandle) 
  or die("No se pudo seleccionar la base de datos CASS");


include("conexion.php");

$nuevo_rut=mysql_query("SELECT codigo_repuesto FROM repuesto WHERE codigo_repuesto='$codigo_repuesto'"); 
if(mysql_num_rows($nuevo_rut)>0) 
{ 
echo " 
<script> alert('Repuesto ya se encuentra registrado'); </script> 
<p class='avisos'><a href='javascript:history.go(-1)' class='btn btn-danger clase1'>Volver atrás</a></p> 
"; 
}
else{
  
  $consulta=mysql_query("INSERT INTO repuesto (id_proveedor, id_marca, codigo_repuesto, id_area, nombre, modelo, valor_total, fecha_solicitud, descripcion, ano, duracion) VALUES ('$id_proveedor', '$id_marca','$codigo_repuesto','$id_area','$nombre','$modelo', '$valor_total', '$fecha_solicitud','$descripcion','$ano','$duracion')") or die(mysql_errno());
 echo '<script> alert("Repuesto Creado con Exito."); </script>';

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
    <script src="js/autollenado.repuesto.js"></script>   
    <script src="js/listaProveedor.js"></script>
</body>
<footer> </footer>
</html>
<?php
}else{
  echo '<script> window.location="index.php";</script>';
}

?>