<?php
session_start();
include("conexion.php");
if (isset($_SESSION['correo'])) {?>

<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="UTF-8">

<title>Cotización</title>
 <script language="JavaScript" type="text/javascript" src="js/ajax.js"></script>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/jquery-ui.min.css">
  <link rel="stylesheet" href="js/bootstrap.min.js">
  <link href="css/jquery-ui.css" type="text/css" rel="stylesheet"/>
  <!--link para el estilo del calendario en jquery-->
  <script src="js/jquery-1.12.4.js"></script>

<script>
  function sumar(){
    a=document.formcotizacion.venta_repuesto.value;
    b=document.formcotizacion.venta_repuesto_uno.value;
    c=document.formcotizacion.venta_repuesto_dos.value;
    d=document.formcotizacion.venta_repuesto_tres.value;
    e=document.formcotizacion.venta_repuesto_cuatro.value;
    f=document.formcotizacion.venta_repuesto_cinco.value;
    i=document.formcotizacion.venta_repuesto_seis.value;
    g=document.formcotizacion.valorReparacion.value;
    h=document.formcotizacion.valorCotizacion.value;

    h=parseInt(a)+parseInt(b)+parseInt(c)+parseInt(d)+parseInt(e)+parseInt(f)+parseInt(i)+parseInt(g);
    document.formcotizacion.valorCotizacion.value=h;
  }
</script>
<script >
    function habilita(){
        $(".inputText").removeAttr("disabled");
    }
    function deshabilita(){
        $(".inputText").attr("disabled","disabled");
    }
        function habilitar(){
        $(".inputText1").removeAttr("disabled");
    }
    function deshabilitar(){
        $(".inputText1").attr("disabled","disabled");
    }
    function habilitar1(){
        $(".inputText2").removeAttr("disabled");
    }
    function deshabilitar1(){
        $(".inputText2").attr("disabled","disabled");
    }
    function habilitar2(){
        $(".inputText3").removeAttr("disabled");
    }
    function deshabilitar2(){
        $(".inputText3").attr("disabled","disabled");
    }
    function habilitar3(){
        $(".inputText4").removeAttr("disabled");
    }
    function deshabilitar3(){
        $(".inputText4").attr("disabled","disabled");
    }
    function habilitar4(){
        $(".inputText5").removeAttr("disabled");
    }
    function deshabilitar4(){
        $(".inputText5").attr("disabled","disabled");
    }
    function habilitar5(){
        $(".inputText6").removeAttr("disabled");
    }
    function deshabilitar5(){
        $(".inputText6").attr("disabled","disabled");
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
<a href="cotizacion.php"><button class="btn btn-default" type="button"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"> VOLVER</span></button></a>

<br><br>
<h1>Crear Cotización</h1>

<form class="form-group" action="" name="formcotizacion" id="cotizacion" method="POST" onSubmit="return validar()">

<div class="container">

<?php
include("conexion.php");
$cat=isset($_POST['filtrarOT'])?$_POST['filtrarOT']: NULL;


 $consulta1=mysql_query("SELECT  id_orden_trabajo FROM orden_trabajo  WHERE id_orden_trabajo='$cat' ");
 $reg1=mysql_fetch_array($consulta1);

?>

<div class="col-xs-5 ui-widget">
<label class="fe" for="">Fecha Cotización<input class="form-control" value="<?php echo date("Y/m/d");?>" type="text" name="fecha_cotizacion" id="fecha_cotizacion"></label>
<input type="text" class="form-control" readonly="" name="id_orden_trabajo" id="id_orden_trabajo" value="<?php echo$reg1['id_orden_trabajo'];?>">
</div>
<?php
  //codigo para que muestre el correlativo de mi orden de trabajo
    $sql = "SELECT MAX(correlativo_cotizacion) as max FROM cotizacion ";
    $resultado = mysql_query($sql);
    $row = mysql_fetch_array($resultado);
    $mensaje =$row["max"]+1;
?>
<div class="col-xs-5">
<label for="">Numero de Cotización: </label>
<input type="text" class="form-control" id="correlativo_cotizacion" value="<?=$mensaje?>" name="correlativo_cotizacion"  >
</div>

<div class="col-xs-10  has-error">
<h2 class="bg-primary text-center pad-basic no-btn">Repuesto Solicitados</h2>
<table class="table bg-info table-responsive" id="tabla">
    <tbody>
      <tr>
        <td><h4>Habilita</h4></td>
        <td><h4>Desabilita</h4></td>
        <td><h4>Cliente</h4></td>
        <td><h4>Orden Trabajo</h4></td>
        <td><h4>N° Partner</h4></td>
        <td><h4>Marca</h4></td>
        <td><h4>Comentario</h4></td>
        <td><h4>Valor Repuesto</h4></td>
      </tr>
<?php
include("conexion.php");
$cat=isset($_POST['filtrarOT'])?$_POST['filtrarOT']: NULL;


  $dbhandle=mysql_query("SELECT orden_trabajo.valorReparacion, orden_trabajo.correlativo_ot, orden_trabajo.n_partner, orden_trabajo.marca, orden_trabajo.comentarioo, orden_trabajo.n_partner1, orden_trabajo.marca1, orden_trabajo.comentario1 , orden_trabajo.n_partner2, orden_trabajo.marca2, orden_trabajo.comentario2, orden_trabajo.n_partner3, orden_trabajo.marca3, orden_trabajo.comentario3, orden_trabajo.n_partner4, orden_trabajo.marca4, orden_trabajo.comentario4, orden_trabajo.n_partner5, orden_trabajo.marca5, orden_trabajo.comentario5, orden_trabajo.n_partner6, orden_trabajo.marca6, orden_trabajo.comentario6, cliente.nombre FROM orden_trabajo INNER JOIN  cliente ON orden_trabajo.id_cliente=cliente.id_cliente  WHERE id_orden_trabajo='$cat' ");

   while($muestra=mysql_fetch_array($dbhandle)){

   echo '<tr>';
   echo '<td>'.'<input type="radio" name="rad" value="O" onclick="habilita()">'.'</td>';
   echo '<td>'.'<input type="radio" name="rad" value="F" onclick="deshabilita()">'.'</td>';
   echo '<td>'.'<strong>'.$muestra['nombre'].'</strong>'.'</td>';
   echo '<td>'.'<strong>'.$muestra['correlativo_ot'].'</strong>'.'</td>';
   echo '<td>'.$muestra['n_partner'].'</td>';
   echo '<td>'.$muestra['marca'].'</td>';
   echo '<td>'.$muestra['comentarioo'].'</td>';
   echo '<td>'.'<input class="inputText form-control" type="text" value="0" name="venta_repuesto" id="venta_repuesto" onkeyup="sumar()" onKeyPress="return SoloNumeros(event)" placeholder="$" disabled >'.'</td>';
   echo '<tr>';
   echo '<td>'.'<input type="radio" name="rad" value="O" onclick="habilitar()">'.'</td>';
   echo '<td>'.'<input type="radio" name="rad" value="F" onclick="deshabilitar()">'.'</td>';
   echo '<td></td>';
   echo '<td></td>';
   echo '<td>'.$muestra['n_partner1'].'</td>';
   echo '<td>'.$muestra['marca1'].'</td>';
   echo '<td>'.$muestra['comentario1'].'</td>';
   echo '<td>'.'<input class="inputText1 form-control" type="text" value="0" name="venta_repuesto_uno" id="venta_repuesto_uno" onKeyPress="return SoloNumeros(event)" onkeyup="sumar()"  disabled >'.'</td>';
   echo '<tr>';
   echo '<td>'.'<input type="radio" name="rad" value="O" onclick="habilitar1()">'.'</td>';
   echo '<td>'.'<input type="radio" name="rad" value="F" onclick="deshabilitar1()">'.'</td>';
   echo '<td></td>';
   echo '<td></td>';
   echo '<td>'.$muestra['n_partner2'].'</td>';
   echo '<td>'.$muestra['marca2'].'</td>';
   echo '<td>'.$muestra['comentario2'].'</td>';
   echo '<td>'.'<input class="inputText2 form-control" type="text" value="0" name="venta_repuesto_dos" id="venta_repuesto_dos" onKeyPress="return SoloNumeros(event)" onkeyup="sumar()"  disabled >'.'</td>';
   echo '<tr>';
   echo '<td>'.'<input type="radio" name="rad" value="O" onclick="habilitar2()">'.'</td>';
   echo '<td>'.'<input type="radio" name="rad" value="F" onclick="deshabilitar2()">'.'</td>';
   echo '<td></td>';
   echo '<td></td>';
   echo '<td>'.$muestra['n_partner3'].'</td>';
   echo '<td>'.$muestra['marca3'].'</td>';
   echo '<td>'.$muestra['comentario3'].'</td>';
   echo '<td>'.'<input class="inputText3 form-control" type="text" value="0" name="venta_repuesto_tres" id="venta_repuesto_tres" onKeyPress="return SoloNumeros(event)" onkeyup="sumar()" disabled >'.'</td>';
   echo '<tr>';
   echo '<td>'.'<input type="radio" name="rad" value="O" onclick="habilitar3()">'.'</td>';
   echo '<td>'.'<input type="radio" name="rad" value="F" onclick="deshabilitar3()">'.'</td>';
   echo '<td></td>';
   echo '<td></td>';
   echo '<td>'.$muestra['n_partner4'].'</td>';
   echo '<td>'.$muestra['marca4'].'</td>';
   echo '<td>'.$muestra['comentario4'].'</td>';
   echo '<td>'.'<input class="inputText4 form-control" type="text" value="0" name="venta_repuesto_cuatro"  id="venta_repuesto_cuatro" onKeyPress="return SoloNumeros(event)" onkeyup="sumar()"  disabled >'.'</td>';
   echo '<tr>';
   echo '<td>'.'<input type="radio" name="rad" value="O" onclick="habilitar4()">'.'</td>';
   echo '<td>'.'<input type="radio" name="rad" value="F" onclick="deshabilitar4()">'.'</td>';
   echo '<td></td>';
   echo '<td></td>';
   echo '<td>'.$muestra['n_partner5'].'</td>';
   echo '<td>'.$muestra['marca5'].'</td>';
   echo '<td>'.$muestra['comentario5'].'</td>';
   echo '<td>'.'<input class="inputText5 form-control" type="text" value="0" name="venta_repuesto_cinco" id="venta_repuesto_cinco" onKeyPress="return SoloNumeros(event)" onkeyup="sumar()"  disabled >'.'</td>';
   echo '<tr>';
   echo '<td>'.'<input type="radio" name="rad" value="O" onclick="habilitar5()">'.'</td>';
   echo '<td>'.'<input type="radio" name="rad" value="F" onclick="deshabilitar5()">'.'</td>';
   echo '<td></td>';
   echo '<td></td>';
   echo '<td>'.$muestra['n_partner6'].'</td>';
   echo '<td>'.$muestra['marca6'].'</td>';
   echo '<td>'.$muestra['comentario6'].'</td>';
   echo '<td>'.'<input class="inputText6 form-control" type="text" value="0" name="venta_repuesto_seis" id="venta_repuesto_seis" onKeyPress="return SoloNumeros(event)" onkeyup="sumar()"  disabled >'.'</td>';
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
<?php
include("conexion.php");
$cat=isset($_POST['filtrarOT'])?$_POST['filtrarOT']: NULL;


 $consulta=mysql_query("SELECT  valorReparacion FROM orden_trabajo  WHERE id_orden_trabajo='$cat' ");
 $reg=mysql_fetch_array($consulta);

?>
<div class="col-xs-5 has-error" >
<label for="">Valor Reparacion (Mano de Obra)</label>
<input type="text" class="form-control" onkeyup="sumar()" name="valorReparacion" id="valorReparacion"  placeholder="$"  required="" value="<?php echo $reg['valorReparacion'];?>" >
<label for="">Valor Cotización</label>
<input type="text" class="form-control" onkeyup="sumar()" name="valorCotizacion" id="valorCotizacion"  placeholder="$"  required="" value="" >
</div>


<div class="col-xs-5 has-error" >
<label  for="">Descripción de Cotización</label>
<textarea  name="comentario" id="comentario"  rows="4" cols="53"></textarea>
</div>

<div class="col-xs-5 has-error" >
<label for="">Disponibilidad</label>
<input type="text" class="form-control" name="disponibilidad" id="disponibilidad"  placeholder="Días"  required="" value="" onKeyPress="return SoloNumeros(event)" ></div>

<div class="col-xs-5 has-error">
<label for="">Estado</label>
  <div class="checkbox has-error">
    <label>
      <input type="checkbox" id="" name="id_estado" value="7" required="">
      <strong> En Espera</strong>
    </label>
  </div>
</div>

  <div class="col-xs-5 ">
  <button type="submit" id="enviar" class="btn btn-primary btn-lg btn-block" data-toggle="tooltip" title="Crear Cotización"><span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span> Guardar</button>
  <button type="reset" class="btn btn-default btn-lg btn-block" data-toggle="tooltip" title="Cancelar Cotización"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Cancelar</button>
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
      $venta_repuesto_seis = $_POST['venta_repuesto_seis'];
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
<script> alert('¡¡Cierra la OT, ya tiene una cotizacion!! '); </script> 
<p class='avisos'><a href='javascript:history.go(-1)' class='clase1 btn btn-danger'>Volver atrás</a></p> 
"; 
}
else{
  $consulta=mysql_query("INSERT INTO cotizacion (correlativo_cotizacion, id_estado, id_orden_trabajo, fecha_cotizacion, comentario,  valorCotizacion, venta_repuesto, venta_repuesto_uno, venta_repuesto_dos, venta_repuesto_tres, venta_repuesto_cuatro, venta_repuesto_cinco, venta_repuesto_seis, disponibilidad ) VALUES ('$correlativo_cotizacion', '$id_estado','$id_orden_trabajo','$fecha_cotizacion','$comentario', '$valorCotizacion', '$venta_repuesto', '$venta_repuesto_uno', '$venta_repuesto_dos', '$venta_repuesto_tres', '$venta_repuesto_cuatro', '$venta_repuesto_cinco', '$venta_repuesto_seis', '$disponibilidad')") or die(mysql_errno()); 
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