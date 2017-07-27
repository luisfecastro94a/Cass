<?php
session_start();
include("conexion.php");
if (isset($_SESSION['correo'])) {?>

<!DOCTYPE html>
<html lang="en">

<head>
<!--HTTP-EQUIV="REFRESH" CONTENT="1;URL=equipo.entrada.php esto sirve para refrescar la pagina-->
	<meta charset="UTF-8" ">

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
    margin: 10px 500px 20px 450px;
    color: orange;
    border-top: 30px;
    width: 100%;
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
            <li><a href="equipo.reingreso.php">Re Ingreso Equipo</a></li>
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

<a href="equipo.entrada.php"><button  class="btn btn-default" type="submit"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"> NUEVO</span></button></a>
<a href="equipo.buscar.php"><button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"> BUSCAR</span></button></a>
<a href="equipo.reingreso.php"><button class="btn btn-default" type="button"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"> VOLVER</span></button></a>

<br><br>
<h1>Reingreso de Equipo</h1>

<form class="form-group" action=""  method="POST" onSubmit="return validar()" enctype="multipart/form-data" >

<div class="container">

<div class="col-xs-5">
<label class="fe" for="">Fecha Reingreso</label>
<input class="fecha" type="text" name="fecha_creacion" id="fecha_creacion" value="<?php echo date("Y/m/d"); ?>"></div>

<?php
include("conexion.php");
$equi=isset($_GET['Filtraequipo'])?$_GET['Filtraequipo']: NULL;

 $consult=mysql_query("SELECT equipo.id_equipo,  equipo.serie_equipo, equipo.modelo, cliente.id_cliente, cliente.nombre, cliente_encargado.nombreE, marca.marca FROM equipo INNER JOIN cliente ON equipo.id_cliente=cliente.id_cliente INNER JOIN cliente_encargado ON equipo.id_cliente_encargado=cliente_encargado.id_cliente_encargado  INNER JOIN marca ON equipo.id_marca=marca.id_marca WHERE id_equipo='$equi' ");
 $reg=mysql_fetch_array($consult);
?>
<div class="col-xs-5" >
<label for="">Serie Equipo</label>
<input type="text" class="form-control" name="serie_equipo" id="serie_equipo" title="Nombre del Cliente" value="<?php echo $reg['serie_equipo'];?>"  placeholder="Nombre del Cliente" ></div>

<div class="col-xs-5">
<div class="col-xs-5" >
<label for="">ID equipo</label>
<input type="text" class="form-control" title="ID de OT" value="<?php echo $reg['id_equipo'];?>" name="id_equipo" id="id_equipo" placeholder="ID equipo" required=""></div>
<div class="col-xs-5">
<label for="">ID Cliente</label>
<input type="text" class="form-control" title="ID de OT" value="<?php echo $reg['id_cliente'];?>" name="id_cliente" id="id_cliente" placeholder="ID cliente"></div>
</div>

<div class="col-xs-5" >
<label for="">Cliente</label>
<input type="text" class="form-control" name="nombre" id="nombre" title="Nombre del Cliente" value="<?php echo $reg['nombre'];?>"  placeholder="Nombre del Cliente" ></div>

<div class="col-xs-5" >
<label for="">Encargado Cliente</label>
<input type="text" class="form-control" name="nombreE" id="nombreE" value="<?php echo $reg['nombreE'];?>" title="Encargado del Equipo"  placeholder="Encargado del Equipo" ></div>

<div class="col-xs-5" >
<label for="">Marca</label>
<input type="text" class="form-control" name="marca" id="marca" title="Marca del equipo" value="<?php echo $reg['marca'];?>"  placeholder="Marca del Equipo" ></div>


<div class="col-xs-5" >
<label for="">Modelo del Equipo</label>
<input type="text" class="form-control" name="modelo" id="modelo" title="Modelo del equipo" value="<?php echo $reg['modelo'];?>"  placeholder="Modelo del Equipo" required=""></div>

<div class="col-xs-5 has-error" >
<label for="">Sintoma del Cliente</label>
<textarea rows="4" cols="53" title="Ingresar el sintoma del cliente" required="" name="sintoma_cliente"></textarea>
</div>

<div class="col-xs-5 has-error">
<label for="">Tipo de Ingreso</label>
<select class="form-control" name="tipo_ingreso" title="Seleccione el tipo de ingreso" required="" >
<option value="" selected="">--Selecciona el tipo de Ingreso--</option>
  <option value="REPARACION">REPARACION</option>
  <option value="CONTRATO">CONTRATO</option>
  <option value="GARANTIA CASS">GARANTIA CASS</option>
  <option value="GARANTIA CANON">GARANTIA CANON</option>
  <option value="GARANTIA ACER">GARANTIA ACER</option>
</select>
</div>

<div class="col-xs-5 has-error">
<label for="">Estado</label>
  <div class="checkbox has-error">
    <label>
      <input type="checkbox" id="" name="id_estado" value="2" required="">
      <strong> Sin Reparar</strong>
    </label>
  </div>
</div>

<!--subir imagen-->
<div class="col-xs-5">
    <label for="">Subir Fotografia de Equipo</label><br>
    <input type="text" name="nombreImagen" value="foto"  required="" placeholder="Nombre Imagen....">
    <input type="file" name="imagen" value="" >
</div>
  
  <div class="col-xs-5">
  <button type="submit" id="enviar" class="btn btn-primary btn-lg btn-block" data-toggle="tooltip" data-placement="top" title="Guardar el equipo"><span class="glyphicon glyphicon-floppy-disk " aria-hidden="true"></span> Reingresar</button>
  <button type="reset" class="btn btn-default btn-lg btn-block" title="Cancelar registro"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Cancelar</button></div>

  <div class="col-xs-5">
  <div class="alert alert-danger" role="alert">Al ingresar Equipo,<strong> Crea tu Orden de Trabajo</strong></div>
  <a href="ot.entrada.php?equipo=<?=$reg['id_equipo'];?>&idcliente=<?=$reg['id_cliente'];?>"><button type="button" class="btn btn-warning btn-lg btn-block" title="Generar Orden de trabajo"><span class="glyphicon glyphicon-paperclip " aria-hidden="true"> GENERAR ORDEN DE TRABAJO</span></button></a></div>
  
</div>
</form>
</div>

<?php
      
      $equi=isset($_GET['Filtraequipo'])?$_GET['Filtraequipo']: NULL;
  
      $sintoma_cliente = isset($_POST['sintoma_cliente'])? $_POST['sintoma_cliente']:'';
      //$imagen = isset($_POST(addslashes(file_get_contents($_FILES['imagen']['tmp_name']))))? $_POST['imagen']:''; Modificar Imagen
      $tipo_ingreso = isset($_POST['tipo_ingreso'])? $_POST['tipo_ingreso']:''; 
      $estado = isset($_POST['id_estado'])? $_POST['id_estado']:'';
       
    // conexión a la base de datos de
$dbhandle = mysql_connect($hostname, $username, $password) 
 or die("No se pudo Contactar a Base de Datos MySQL");

// seleccionar una base de datos para trabajar con
$selected = mysql_select_db("bdcass",$dbhandle) 
  or die("No se pudo seleccionar la base de datos CASS");
  
  mysql_query("UPDATE equipo SET  sintoma_cliente='$sintoma_cliente',  tipo_ingreso='$tipo_ingreso', id_estado='$estado' WHERE id_equipo='$equi'")or die(mysql_error());
  //echo "<meta http-equiv=\"refresh\" content=\"0;URL=equipo.reingreso.crea.php\">";

?>
<?php
// close connection; 
mysql_close();
?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.2.1.js"></script>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="validaletras.js"></script>
    <script src="js/jquery.js"></script>   
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/datepicker-es.js"></script> 
    <script src="listarencargado.js"></script>
    <script src="js/buscaEquipoReingreso.js"></script>
    <script src="js/autollenadoReIngresoEquipo.js"></script>
</body>
<footer></footer>
</html>
<?php
}else{
  echo '<script> window.location="index.php";</script>';
}

?>

