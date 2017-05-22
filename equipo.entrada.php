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
//var_dump($_POST);
$consulta="SELECT * FROM cliente ORDER BY nombre ASC";
$result=mysql_query($consulta);


?>
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
            <li><a href="#">Ingreso Garantia</a></li>
            <li><a href="#">Presupuesto</a></li>
            <li><a href="#">Cotización</a></li>
            <li><a href="#">Repuesto</a></li>
            <li><a href="#">Generar OT</a></li>
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
        <li><a  href="#">Repuestos</a></li>
        <li><a  href="ot.php">Orden de Trabajo</a></li>
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
<button class="btn btn-default" type="button"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"> VOLVER</span></button>

<br><br>
<h1>Entrada de Equipo</h1>

<form class="form-group" action=""  method="POST" onSubmit="return validar()" enctype="multipart/form-data" >

<div class="container">

<div class="form-group" >
<label class="fe" for="">Fecha Creación</label>
<input class="fecha" type="text" name="fecha_creacion" id="fecha_creacion"></div>

<div class="col-xs-5" >
<label for="">Cliente</label>
<select id="id_cliente" class="form-control" name="id_cliente" autofocus="" title="Seleccione el cliente" > 
<option value="" selected="">---Seleccionar Cliente---</option>
 <?php
      while($fila=mysql_fetch_array($result))
  {?>
      <option value="<?php echo $fila['0']?>"> <?php echo $fila['2'];?></option>
  <?php } ?>
</select>
</div>



<div class="col-xs-5" >
<label for="">Sintoma del Cliente</label>
<textarea rows="4" cols="53" title="Ingresar el sintoma del cliente" name="sintoma_cliente"></textarea>
</div>

<div class="col-xs-5" >
<label for="">Serie de Equipo</label>
<input type="text" class="form-control" title="Numero de Serie" name="serie_equipo" id="serie_equipo" placeholder="Serie del Equipo" required=""></div>



<?php
include("conexion.php");

$consulta1="SELECT * FROM marca ORDER BY marca ASC";
$resultM=mysql_query($consulta1);


?>
<div class="col-xs-5" >
<label for="">Marca</label>
<select id="id_marca" class="form-control" name="id_marca" title="Seleccionar Marca del equipo" > 
<option value="" selected="">---Seleccionar la Marca---</option>
 <?php
      while($marca=mysql_fetch_array($resultM))
  {?>
      <option value="<?php echo $marca['0']?>"><?php echo $marca['1'];?></option>
  <?php } ?>
</select>
</div>

<div class="col-xs-5" >
<label for="">Modelo del Equipo</label>
<input type="text" class="form-control" name="modelo" id="modelo" title="Modelo del equipo"  placeholder="Modelo del Equipo" required=""></div>

<div class="col-xs-5">
<label for="">Tipo de Ingreso</label>
<select class="form-control" name="tipo_ingreso" title="Seleccione el tipo de ingreso" >
<option value="" selected="">--Selecciona el tipo de Ingreso--</option>
  <option value="REPARACION">REPARACION</option>
  <option value="CONTRATO">CONTRATO</option>
  <option value="GARANTIA CASS">GARANTIA CASS</option>
  <option value="GARANTIA CANON">GARANTIA CANON</option>
  <option value="GARANTIA ACER">GARANTIA ACER</option>
</select>
</div>

<?php
include("conexion.php");

$consulta2="SELECT * FROM estado WHERE relacion='equipo' ORDER BY estado ASC ";
$resultE=mysql_query($consulta2);


?>
<div class="col-xs-5" >
<label for="">Estado</label>
<select id="id_estado" class="form-control" name="id_estado" title="Seleccione un estado" > 
<option value="" selected="">---Seleccionar el Estado---</option>
 <?php
      while($esta=mysql_fetch_array($resultE))
  {?>
      <option value="<?php echo $esta['0']?>"><?php echo $esta['1'];?></option>
  <?php } ?>
</select>
</div>

<div class="col-xs-5" >
<label for="">Sintoma del Técnico</label>
<textarea rows="4" cols="53" name="sintoma_tecnico" title="¡hee Técnico, Ingresa tu sintoma!" ></textarea>
</div>
<!--subir imagen-->


<div class="col-xs-5">
    <label for="">Subir Fotografia de Equipo</label><br>
    <input type="text" name="nombreImagen" value="" placeholder="Nombre Imagen....">
    <input type="file" name="imagen" value="">
  
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
    (isset($_POST['id_cliente']) && !empty($_POST['id_cliente']) &&
     isset($_POST['id_marca']) && !empty($_POST['id_marca']) &&
     isset($_POST['id_estado']) && !empty($_POST['id_estado']) &&
     isset($_POST['fecha_creacion']) && !empty($_POST['fecha_creacion']) &&
     isset($_POST['modelo']) && !empty($_POST['modelo']) &&
     isset($_POST['tipo_ingreso']) && !empty($_POST['tipo_ingreso']) &&
     isset($_POST['serie_equipo']) && !empty($_POST['serie_equipo']) &&
     isset($_POST['sintoma_cliente']) && !empty($_POST['sintoma_cliente']) &&
     isset($_POST['nombreImagen']) && !empty($_POST['nombreImagen']))
  {



      $id_cliente = $_POST['id_cliente']; 
      $id_marca = $_POST['id_marca'];
      $id_estado = $_POST['id_estado'];
      $fecha_creacion = $_POST['fecha_creacion'];
      $modelo = $_POST['modelo'];
      $tipo_ingreso = $_POST['tipo_ingreso'];
      $serie_equipo = $_POST['serie_equipo'];
      $sintoma_cliente = $_POST['sintoma_cliente'];
      $sintoma_tecnico = $_POST['sintoma_tecnico'];
      $nombreImagen = $_POST['nombreImagen'];
      $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));//aqui guardo los bits en la variable
                

    // conexión a la base de datos de
$dbhandle = mysql_connect($hostname, $username, $password) 
 or die("No se pudo Contactar a Base de Datos MySQL");


// seleccionar una base de datos para trabajar con
$selected = mysql_select_db("bdcass",$dbhandle) 
  or die("No se pudo seleccionar la base de datos CASS");

// ============================================== 
// Comprobamos si el rut esta registrado 
include("conexion.php");

$nuevo_rut=mysql_query("SELECT serie_equipo FROM equipo WHERE serie_equipo='$serie_equipo'"); 
if(mysql_num_rows($nuevo_rut)>0) 
{ 
echo " 
<p class='avisos'>El Equipo ya esta registrado</p> 
<p class='avisos'><a href='javascript:history.go(-1)' class='clase1'>Volver atrás</a></p> 
"; 
}
else{
  
  $consulta=mysql_query("INSERT INTO equipo (id_cliente, id_marca, id_estado, fecha_creacion, modelo, tipo_ingreso, serie_equipo, sintoma_cliente, sintoma_tecnico, nombreImagen, imagen) VALUES ('$id_cliente', '$id_marca','$id_estado','$fecha_creacion','$modelo','$tipo_ingreso', '$serie_equipo',  '$sintoma_cliente','$sintoma_tecnico','$nombreImagen','$imagen')") or die(mysql_errno());
 echo '<script> alert("Equipo Creado con Exito."); </script>';

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
</body>
<footer> </footer>
</html>
<?php
}else{
  echo '<script> window.location="index.php";</script>';
}

?>