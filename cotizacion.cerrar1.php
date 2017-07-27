<?php
session_start();
include("conexion.php");
if (isset($_SESSION['correo'])) {?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cerrar Cotización</title>
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
  <script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script>
  function sumar(){
    a=document.formcotizacion.totalRepuesto.value;
    b=document.formcotizacion.valorMano.value;
    c=document.formcotizacion.valorCotizacion.value;

    c=parseInt(a)+parseInt(b);
    document.formcotizacion.valorCotizacion.value=c;
  }
</script>
<script type="text/javascript">
$(document).ready(function(){
  $("#formcotizacion").submit(function () {
    if($("#valorCotizacion").val().length < 1) {
      alert("El Valor de la Cotización es obligatorio");
      return false;
    }
    if($("#valorCotizacion").val().length < 2) {
      alert("La Cotización debe tener como mínimo 2 caracteres");
      return false;
    }
    return true;
  });
});
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
<form class="form-group" action="" name="formcotizacion" id="formcotizacion" method="POST">

<div class="col-xs-5">
<label class="coti" for="">Fecha Respuesta: 
<input  value="<?php echo date("Y/m/d");?>" type="text" name="fecha_respuesta" id="fecha_respuesta"></label>
</div>

<div class="col-xs-5" >
<label class="coti" for="">Descripción de Cotización:</label>
<textarea name="comentario" id="comentario"  rows="4" cols="53"></textarea>
</div>

<div class="col-xs-5 has-error">
<label class="coti" for="">Estado:</label>
  <div class="checkbox has-success">
    <label class="radio-inline">
  <input type="radio" name="id_estado" id="inlineRadio1" value="5" required=""> Aceptada
</label>
  </div>
   <div class="checkbox has-error">
    <label class="radio-inline">
  <input type="radio" name="id_estado" id="inlineRadio2" value="6" required=""> No Aceptada
</label>
  </div>
</div>

<?php
include("conexion.php");
   $id=$_REQUEST['id'];

  $dbhandle=mysql_query("SELECT cotizacion.id_cotizacion, orden_trabajo.correlativo_ot, orden_trabajo.manoObra, orden_trabajo.manoObra1, orden_trabajo.manoObra2, orden_trabajo.manoObra3, orden_trabajo.manoObra4, orden_trabajo.manoObra5, orden_trabajo.manoObra6, orden_trabajo.valor_mano, orden_trabajo.valor_mano1, orden_trabajo.valor_mano2, orden_trabajo.valor_mano3, orden_trabajo.valor_mano4, orden_trabajo.valor_mano5, orden_trabajo.valor_mano6, cliente.nombre FROM cotizacion INNER JOIN orden_trabajo ON cotizacion.id_orden_trabajo=orden_trabajo.id_orden_trabajo INNER JOIN  cliente ON orden_trabajo.id_cliente=cliente.id_cliente  WHERE id_cotizacion='$id' ")or die(mysql_error());
    $reg=mysql_fetch_array($dbhandle);
?> 
<div class="col-xs-11  has-error">
<h2 class="bg-primary text-center pad-basic no-btn">Mano de Obra Requerida</h2>
<table class="table bg-info" id="tabla">
  <tr class="fila-fija">
    <td><label >Seleccionar</label></td>
    <td><label >Cliente</label></td>
    <td><label >Orden de Trabajo</label></td>
    <td><label >Mano Obra</label></td>
    <td><label >Valor Mano Obra</label></td>
  </tr>
  <tr class="fila-fija">
    <td><input type="checkbox" name="chbm" id="chbm" onclick="zumam(this);" value="<?php echo $reg['valor_mano'];?>"></td>
    <td><input class="form-control" name="" id="" type="text" value="<?php echo $reg['nombre'];?>"></td>
    <td><input class="form-control" name="n_partner" id="repuesto" type="text" value="<?php echo $reg['correlativo_ot'];?>"></td>
    <td><input class="form-control" name="marca" id="repuesto_uno" type="text" value="<?php echo $reg['manoObra'];?>"></td>
    <td><input class="form-control" name="comentarioo" id="repuesto_dos" type="text" value="<?php echo $reg['valor_mano'];?>"></td>
  </tr>
  <tr>
    <td><input type="checkbox" name="chbm" id="chbm" onclick="zumam(this);" value="<?php echo $reg['valor_mano1'];?>"></td>
    <td></td>
    <td></td>
    <td><input class="form-control" name="" id="repuesto_tres" type="text" value="<?php echo $reg['manoObra1'];?>"></td>
    <td><input class="form-control" name="" id="repuesto_cuatro" type="text" value="<?php echo $reg['valor_mano1'];?>"></td>
  </tr>
  <tr>
  <td><input type="checkbox" name="chbm" id="chbm" onclick="zumam(this);" value="<?php echo $reg['valor_mano2'];?>"></td>
  <td></td>
  <td></td>
    <td><input class="form-control" name="" id="n_partner2" type="text" value="<?php echo $reg['manoObra2'];?>"></td>
    <td><input class="form-control" name="" id="marca2" type="text" value="<?php echo $reg['valor_mano2'];?>"></td>
  <tr>
  <td><input type="checkbox" name="chbm" id="chbm" onclick="zumam(this);" value="<?php echo $reg['valor_mano3'];?>"></td>
  <td></td>
  <td></td>
    <td><input class="form-control" name="" id="n_partner3" type="text" value="<?php echo $reg['manoObra3'];?>"></td>
    <td><input class="form-control" name="" id="marca3" type="text" value="<?php echo $reg['valor_mano3'];?>"></td>
  </tr>
  <tr>
  <td><input type="checkbox" name="chbm" id="chbm" onclick="zumam(this);" value="<?php echo $reg['valor_mano4'];?>"></td>
    <td></td>
    <td></td>
    <td><input class="form-control" name="" id="n_partner4" type="text" value="<?php echo $reg['manoObra4'];?>"></td>
    <td><input class="form-control" name="" id="marca4" type="text" value="<?php echo $reg['valor_mano4'];?>"></td>
  </tr>
  <tr>
  <td><input type="checkbox" name="chbm" id="chbm" onclick="zumam(this);" value="<?php echo $reg['valor_mano5'];?>"></td>
  <td></td>
  <td></td>
    <td><input class="form-control" name="" id="n_partner5" type="text" value="<?php echo $reg['manoObra5'];?>"></td>
    <td><input class="form-control" name="" id="marca5" type="text" value="<?php echo $reg['valor_mano5'];?>"></td>
  </tr>
  <tr>
  <td><input type="checkbox" name="chbm" id="chbm" onclick="zumam(this);" value="<?php echo $reg['valor_mano6'];?>"></td>
  <td></td>
  <td></td>
    <td><input class="form-control" name="" id="n_partner6" type="text" value="<?php echo $reg['manoObra6'];?>"></td>
    <td><input class="form-control" name="" id="marca6" type="text" value="<?php echo $reg['valor_mano6'];?>"></td>
  </tr>
</table>
</div>
<?php
include("conexion.php");
   $id=$_REQUEST['id'];

  $dbhandle=mysql_query("SELECT cotizacion.id_cotizacion, cotizacion.venta_repuesto, cotizacion.venta_repuesto_uno, cotizacion.venta_repuesto_dos, cotizacion.venta_repuesto_tres, cotizacion.venta_repuesto_cuatro, cotizacion.venta_repuesto_cinco, cotizacion.venta_repuesto_seis, orden_trabajo.correlativo_ot, orden_trabajo.n_partner, orden_trabajo.marca, orden_trabajo.comentarioo, orden_trabajo.n_partner1, orden_trabajo.marca1, orden_trabajo.comentario1 , orden_trabajo.n_partner2, orden_trabajo.marca2, orden_trabajo.comentario2, orden_trabajo.n_partner3, orden_trabajo.marca3, orden_trabajo.comentario3, orden_trabajo.n_partner4, orden_trabajo.marca4, orden_trabajo.comentario4, orden_trabajo.n_partner5, orden_trabajo.marca5, orden_trabajo.comentario5, orden_trabajo.n_partner6, orden_trabajo.marca6, orden_trabajo.comentario6, cliente.nombre FROM cotizacion INNER JOIN orden_trabajo ON cotizacion.id_orden_trabajo=orden_trabajo.id_orden_trabajo INNER JOIN  cliente ON orden_trabajo.id_cliente=cliente.id_cliente  WHERE id_cotizacion='$id' ")or die(mysql_error());
    $row=mysql_fetch_array($dbhandle);
?> 
<div class="col-xs-11  has-error">
<h2 class="bg-primary text-center pad-basic no-btn">Repuesto Solicitados</h2>
<table class="table bg-info" id="tabla">
  <tr class="fila-fija">
    <td><label >Seleccionar</label></td>
    <td><label >Cliente</label></td>
    <td><label >N° Partner</label></td>
    <td><label >Marca</label></td>
    <td><label >Comentario</label></td>
    <td><label >Valor Repuesto</label></td>
  </tr>
  <tr class="fila-fija">
    <td><input type="checkbox" name="chb" id="chb" onclick="zuma(this);" value="<?php echo $row['venta_repuesto'];?>"></td>
    <td><input class="form-control" name="" id="" type="text" value="<?php echo $row['nombre'];?>"></td>
    <td><input class="form-control" name="n_partner" id="repuesto" type="text" value="<?php echo $row['n_partner'];?>"></td>
    <td><input class="form-control" name="marca" id="repuesto_uno" type="text" value="<?php echo $row['marca'];?>"></td>
    <td><input class="form-control" name="comentarioo" id="repuesto_dos" type="text" value="<?php echo $row['comentarioo'];?>"></td>
    <td><input class="form-control" onKeyPress="return SoloNumeros(event)" value="<?php echo $row['venta_repuesto'];?>" name="venta_repuesto" id="" type="text"></td>
  </tr>

  <tr>
    <td><input type="checkbox" name="chb" id="chb" onclick="zuma(this);" value="<?php echo $row['venta_repuesto_uno'];?>"></td>
    <td></td>
    <td><input class="form-control" name="" id="repuesto_tres" type="text" value="<?php echo $row['n_partner1'];?>"></td>
    <td><input class="form-control" name="" id="repuesto_cuatro" type="text" value="<?php echo $row['marca1'];?>"></td>
    <td><input class="form-control" name="" id="repuesto_cinco" type="text" value="<?php echo $row['comentario1'];?>"></td>
    <td><input class="form-control" onKeyPress="return SoloNumeros(event)"  value="<?php echo $row['venta_repuesto_uno'];?>" name="venta_repuesto_uno" id="" type="text"></td>
  </tr>
  <tr>
  <td><input type="checkbox" name="chb" id="chb" onclick="zuma(this);" value="<?php echo $row['venta_repuesto_dos'];?>"></td>
  <td></td>
    <td><input class="form-control" name="" id="n_partner2" type="text" value="<?php echo $row['n_partner2'];?>"></td>
    <td><input class="form-control" name="" id="marca2" type="text" value="<?php echo $row['marca2'];?>"></td>
    <td><input class="form-control" name="" id="comentario2" type="text" value="<?php echo $row['comentario2'];?>"></td>
    <td><input class="form-control" onKeyPress="return SoloNumeros(event)"  value="<?php echo $row['venta_repuesto_dos'];?>" name="venta_repuesto_dos" id="" type="text"></td>
  <tr>
  <td><input type="checkbox" name="chb" id="chb" onclick="zuma(this);" value="<?php echo $row['venta_repuesto_tres'];?>"></td>
  <td></td>
    <td><input class="form-control" name="" id="n_partner3" type="text" value="<?php echo $row['n_partner3'];?>"></td>
    <td><input class="form-control" name="" id="marca3" type="text" value="<?php echo $row['marca3'];?>"></td>
    <td><input class="form-control" name="" id="comentario3" type="text" value="<?php echo $row['comentario3'];?>"></td>
    <td><input class="form-control" onKeyPress="return SoloNumeros(event)"  value="<?php echo $row['venta_repuesto_tres'];?>" name="venta_repuesto_tres" id="" type="text"></td>
  </tr>
  <tr>
  <td><input type="checkbox" name="chb" id="chb" onclick="zuma(this);" value="<?php echo $row['venta_repuesto_cuatro'];?>"></td>
    <td></td>
    <td><input class="form-control" name="" id="n_partner4" type="text" value="<?php echo $row['n_partner4'];?>"></td>
    <td><input class="form-control" name="" id="marca4" type="text" value="<?php echo $row['marca4'];?>"></td>
    <td><input class="form-control" name="" id="comentario4" type="text" value="<?php echo $row['comentario4'];?>"></td>
    <td><input class="form-control" onKeyPress="return SoloNumeros(event)"  value="<?php echo $row['venta_repuesto_cuatro'];?>" name="venta_repuesto_cuatro" id="" type="text"></td>
  </tr>
  <tr>
  <td><input type="checkbox" name="chb" id="chb" onclick="zuma(this);" value="<?php echo $row['venta_repuesto_cinco'];?>"></td>
  <td></td>
    <td><input class="form-control" name="" id="n_partner5" type="text" value="<?php echo $row['n_partner5'];?>"></td>
    <td><input class="form-control" name="" id="marca5" type="text" value="<?php echo $row['marca5'];?>"></td>
    <td><input class="form-control" name="" id="comentario5" type="text" value="<?php echo $row['comentario5'];?>"></td>
    <td><input class="form-control" onKeyPress="return SoloNumeros(event)"  value="<?php echo $row['venta_repuesto_cinco'];?>" name="venta_repuesto_cinco" id="" type="text"></td>
  </tr>
  <tr>
  <td><input type="checkbox" name="chb" id="chb" onclick="zuma(this);" value="<?php echo $row['venta_repuesto_seis'];?>"></td>
  <td></td>
    <td><input class="form-control" name="" id="n_partner6" type="text" value="<?php echo $row['n_partner6'];?>"></td>
    <td><input class="form-control" name="" id="marca6" type="text" value="<?php echo $row['marca6'];?>"></td>
    <td><input class="form-control" name="" id="comentario6" type="text" value="<?php echo $row['comentario6'];?>"></td>
    <td><input class="form-control" onKeyPress="return SoloNumeros(event)"  value="<?php echo $row['venta_repuesto_seis'];?>" name="venta_repuesto_seis" id="" type="text"></td>
  </tr>
</table>
</div>

<div class="col-xs-5" >
<label for="">Valor Repuesto</label>
<input type="text" class="form-control" name="totalRepuesto"  id="can" required="" value="0" ></div>

<div class="col-xs-5" >
<label for="">Valor Mano Obra</label>
<input type="text" class="form-control" name="valorMano"  id="valorMano" required="" value="0" ></div>

<div class="col-xs-5" >
<label for="">Valor Cotización</label>
<input type="button" class="btn btn-danger" value="SUMAR + " onclick="sumar()">
<input type="text" class="form-control" name="valorCotizacion" id="valorCotizacion" placeholder=""
  required="Debes SUMAR" value="0" ></div>  

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

      $id_estado = isset($_POST['id_estado']) ? $_POST['id_estado']: ''; 
      $fecha_respuesta = isset($_POST['fecha_respuesta']) ? $_POST['fecha_respuesta']: '';    
      $comentario = isset($_POST['comentario']) ? $_POST['comentario']: ''; 
      $valorCotizacion = isset($_POST['valorCotizacion']) ? $_POST['valorCotizacion']: '';
      $totalRepuesto = isset($_POST['totalRepuesto']) ? $_POST['totalRepuesto']: ''; 
   // conexión a la base de datos de
$dbhandle = mysql_connect($hostname, $username, $password) 
 or die("No se pudo Contactar a Base de Datos MySQL");
// seleccionar una base de datos para trabajar con
$selected = mysql_select_db("bdcass",$dbhandle) 
  or die("No se pudo seleccionar la base de datos CASS");

  $sql=mysql_query("UPDATE cotizacion SET id_estado='$id_estado', fecha_respuesta='$fecha_respuesta', comentario='$comentario',  valorCotizacion='$valorCotizacion', totalRepuesto='$totalRepuesto'  WHERE id_cotizacion='$id'")or die(mysql_error());
 
?>
<?php
//se cierra la conexion a la bd
mysql_close();
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
    <script src="js/cotizacion.repuestos.js"></script>
    <script src="js/cotizacion.manoO.js"></script>
</body>
<footer> </footer>
</html>
<?php
}else{
  echo '<script> window.location="index.php";</script>';//esto se podria llamar login.php, me dirije al login
}

?>