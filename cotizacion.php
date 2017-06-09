<?php
session_start();
include("conexion.php");
if (isset($_SESSION['correo'])) {?>

<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="UTF-8">
<?php
include("conexion.php");


$consulta="SELECT * FROM cliente";
$result=mysql_query($consulta);


?>
	<title>Cotización</title>
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
    $( "#fecha_cotizacion" ).datepicker({
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
<script>
  function sumar(){
    a=document.formcotizacion.venta_repuesto.value;
    b=document.formcotizacion.venta_repuesto_uno.value;
    c=document.formcotizacion.venta_repuesto_dos.value;
    d=document.formcotizacion.venta_repuesto_tres.value;
    e=document.formcotizacion.venta_repuesto_cuatro.value;
    f=document.formcotizacion.venta_repuesto_cinco.value;
    g=document.formcotizacion.valorReparacion.value;
    h=document.formcotizacion.valorCotizacion.value;

    h=parseInt(g)+parseInt(a)+parseInt(b)+parseInt(c)+parseInt(d)+parseInt(e)+parseInt(f);
    document.formcotizacion.valorCotizacion.value=h;
  }
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
<h1>Crear Cotización</h1>

<form class="form-group" action="" name="formcotizacion" id="cotizacion" method="POST" onSubmit="return validar()">

<div class="container">

<div class="col-xs-5">
<label class="fe" for="">Fecha Cotización<input class="" value="<?php echo date("d/m/Y");?>" type="text" name="fecha_cotizacion" id="fecha_cotizacion"></label></div>
<?php
  //codigo para que muestre el correlativo de mi orden de trabajo
    $sql = "SELECT MAX(correlativo_cotizacion) as max FROM cotizacion ";
    $resultado = mysql_query($sql);
    $row = mysql_fetch_array($resultado);
    $mensaje =$row["max"]+1;
?>
<div class="col-xs-5">
<label for="">Numero de Cotización</label>
<input type="text" class="form-control" id="correlativo_cotizacion" value="<?=$mensaje?>" name="correlativo_cotizacion"  ></div>

<div class="col-xs-5" >
<label for="">N° Orden de Trabajo</label>
<select  id="correlativo_ot" class="form-control" onchange="cotizacion(this.value)" name="id_orden_trabajo" value=""> 
<option value="0" >---Selecionar OT---</option>
</select>
</div> 

<div class="col-xs-5" >
<label for="">Cliente</label>
<input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre Cliente" required="" value="" readonly></div>


<div class="col-xs-5" >
<label for="">Rut Empresa:</label>
<input type="text" class="form-control" id="rut" name="rut"  placeholder="Rut"  required oninput="checkRut(this)" value="" readonly></div>


<div class="col-xs-5" >
<label for="">Fono/Fax Empresa:</label>
<input type="text" class="form-control" name="fono" id="fono" maxlength="9" placeholder="Fono/Fax" onKeyPress="return SoloNumeros(event)"
  required="" value="" readonly></div>

<div class="col-xs-5" >
<label for="">Correo:</label>
<input type="email" class="form-control" name="correo" id="correo"   placeholder="E-mail" required="" value="" readonly></div>

<div class="col-xs-5" >
<label for="">Direccion:</label>
<input type="text" class="form-control" id="direccion" name="direccion" placeholder="Direccion" required="" value="" readonly></div>

<div class="col-xs-5" >
<label for="">Ciudad:</label>
<input type="text" class="form-control" id="nombrec" name="id_ciudad" placeholder="Ciudad" required="" value="" readonly></div>

<div class="col-xs-5" >
<label for="">Serie del Equipo</label>
<input type="text" class="form-control" name="id_equipo" id="serie_equipo"   placeholder="Serie de Equipo" required="" value="" readonly ></div>

<div class="col-xs-5" >
<label for="">Valor Presupuesto (mano de obra)</label>
<input type="text" class="form-control" onkeyup="sumar()" name="valorReparacion" id="valorReparacion"  placeholder="$"  required="" value="" readonly ></div>

<div class="col-xs-10  has-error">
<h2 class="bg-primary text-center pad-basic no-btn">Repuesto Solicitados</h2>
<table class="table bg-info" id="tabla">
  <tr class="fila-fija">
    <td><input class="form-control" name="repuesto" id="repuesto" type="text"></td>
    <td><input class="form-control" name="repuesto_uno" id="repuesto_uno" type="text"></td>
    <td><input class="form-control" name="repuesto_dos" id="repuesto_dos" type="text"></td>
    <td><input class="form-control" name="repuesto_tres" id="repuesto_tres" type="text"></td>
    <td><input class="form-control" name="repuesto_cuatro" id="repuesto_cuatro" type="text"></td>
    <td><input class="form-control" name="repuesto_cinco" id="repuesto_cinco" type="text"></td>
  </tr>
   <tr class="fila-fija">
    <td><input class="form-control" onKeyPress="return SoloNumeros(event)" placeholder="$" onkeyup="sumar()" value="0" name="venta_repuesto" id="repuesto" type="text"></td>
    <td><input class="form-control" onKeyPress="return SoloNumeros(event)" placeholder="$" onkeyup="sumar()" value="0" name="venta_repuesto_uno" id="repuesto1" type="text"></td>
    <td><input class="form-control" onKeyPress="return SoloNumeros(event)" placeholder="$" onkeyup="sumar()" value="0" name="venta_repuesto_dos" id="repuesto2" type="text"></td>
    <td><input class="form-control" onKeyPress="return SoloNumeros(event)" placeholder="$" onkeyup="sumar()" value="0" name="venta_repuesto_tres" id="repuesto3" type="text"></td>
    <td><input class="form-control" onKeyPress="return SoloNumeros(event)" placeholder="$" onkeyup="sumar()" value="0" name="venta_repuesto_cuatro" id="repuesto4" type="text"></td>
    <td><input class="form-control" onKeyPress="return SoloNumeros(event)" placeholder="$" onkeyup="sumar()" value="0" name="venta_repuesto_cinco" id="repuesto4" type="text"></td>
  </tr>
</table>
</div>

<div class="col-xs-5 has-error" >
<label for="">Valor Cotización</label>
<input type="text" class="form-control" onkeyup="sumar()" name="valorCotizacion" id="valorCotizacion"  placeholder="$"  required="" value="" ></div>

<div class="col-xs-5 has-error" >
<label  for="">Descripción de Cotización</label>
<textarea  name="comentario" id="comentario"  rows="4" cols="53"></textarea>
</div>

<div class="col-xs-5 has-error" >
<label for="">Disponibilidad</label>
<input type="text" class="form-control" name="disponibilidad" id="disponibilidad"  placeholder="Días"  required="" value="" onKeyPress="return SoloNumeros(event)" ></div>

<?php
include("conexion.php");
$consulta4="SELECT id_estado, estado FROM estado WHERE relacion='cotizacion'";
$asig3=mysql_query($consulta4);

?>
<div class="col-xs-5 has-error" >
<label for="">Estado</label>
<select id="id_estado" class="form-control" name="id_estado" > 
<option value="" selected="">---Estado Orden de Trabajo---</option>
 <?php
      while($fil=mysql_fetch_array($asig3))
  {?>
      <option value="<?php echo $fil['0']?>"><?php echo $fil['1'];?></option>
  <?php } ?>
</select>
</div>

  <div class="col-xs-5 ">
  <button type="submit" id="enviar" class="btn btn-primary btn-lg btn-block">Guardar</button>
  <button type="reset" class="btn btn-default btn-lg btn-block">Cancelar</button>
  </div>

</div>
</form>
</div>

<?php
if
    (isset($_POST['correlativo_cotizacion']) && !empty($_POST['correlativo_cotizacion']) &&
     isset($_POST['id_estado']) && !empty($_POST['id_estado']) &&
     isset($_POST['id_orden_trabajo']) && !empty($_POST['id_orden_trabajo']) &&
     isset($_POST['fecha_cotizacion']) && !empty($_POST['fecha_cotizacion']) &&
     isset($_POST['valorCotizacion']) && !empty($_POST['valorCotizacion']))
  {
      $correlativo_cotizacion = $_POST['correlativo_cotizacion']; 
      $id_estado = $_POST['id_estado'];
      $id_orden_trabajo = $_POST['id_orden_trabajo'];
      $fecha_cotizacion = $_POST['fecha_cotizacion'];
      $comentario= $_POST['comentario'];
      $valorCotizacion = $_POST['valorCotizacion'];
      $venta_repuesto = $_POST['venta_repuesto'];
      $venta_repuesto_uno = $_POST['venta_repuesto_uno'];
      $venta_repuesto_dos = $_POST['venta_repuesto_dos'];
      $venta_repuesto_tres = $_POST['venta_repuesto_tres'];
      $venta_repuesto_cuatro = $_POST['venta_repuesto_cuatro'];
      $venta_repuesto_cinco = $_POST['venta_repuesto_cinco'];
      $disponibilidad = $_POST['disponibilidad']; 
    // conexión a la base de datos de
$dbhandle = mysql_connect($hostname, $username, $password) 
 or die("No se pudo Contactar a Base de Datos MySQL");
// seleccionar una base de datos para trabajar con
$selected = mysql_select_db("bdcass",$dbhandle) 
  or die("No se pudo seleccionar la base de datos CASS");
// ============================================== 
// Comprobamos si el rut esta registrado 
include("conexion.php");

$nuevo_id=mysql_query("SELECT id_orden_trabajo FROM cotizacion WHERE id_orden_trabajo='$id_orden_trabajo'"); 
if(mysql_num_rows($nuevo_id)>0) 
{ 
echo " 
<script> alert('Modifica la OT, ya tiene una COTIZACION!! '); </script> 
<p class='avisos'><a href='javascript:history.go(-1)' class='clase1 btn btn-danger'>Volver atrás</a></p> 
"; 
}
else{
  $consulta=mysql_query("INSERT INTO cotizacion (correlativo_cotizacion, id_estado, id_orden_trabajo, fecha_cotizacion, comentario,  valorCotizacion, venta_repuesto, venta_repuesto_uno, venta_repuesto_dos, venta_repuesto_tres, venta_repuesto_cuatro, venta_repuesto_cinco, disponibilidad ) VALUES ('$correlativo_cotizacion', '$id_estado','$id_orden_trabajo','$fecha_cotizacion','$comentario', '$valorCotizacion', '$venta_repuesto', '$venta_repuesto_uno', '$venta_repuesto_dos', '$venta_repuesto_tres', '$venta_repuesto_cuatro', '$venta_repuesto_cinco', '$disponibilidad')") or die(mysql_errno()); 
    echo '<script> alert("Cotización Creada con Exito."); </script>';
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
    <script src="js/autollenadoequipo.js"></script>
    <!--<script src="js/main.js"></script> -->
    <script src="js/jquery-1.12.4.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/buscaot.js"></script>  
    <script src="js/autollenadocotizacion.js"></script>
    <script src="js/numerosiles.js"></script>
    <script src="listaot.js"></script>
<footer> </footer>
</body>
</html>
<?php
}else{
  echo '<script> window.location="index.php";</script>';
}

?>