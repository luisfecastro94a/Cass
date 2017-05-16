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


$consulta="SELECT * FROM ciudad";
$result=mysql_query($consulta);


?>




	<title>Orden de Trabajo</title>
   <script language="JavaScript" type="text/javascript" src="js/ajax.js"></script>
	<link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/jquery-ui.min.css">
  <link rel="stylesheet" href="css/calendario.css">
  <link rel="stylesheet" href="js/bootstrap.min.js">
  <link href="css/jqueryui.css" type="text/css" rel="stylesheet"/>
  <script language="JavaScript" type="text/javascript" src="js/calendario.js"></script>
  <!--link para el estilo del calendario en jquery-->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  
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
    <script>
  $( function() {
    $( "#fecha_plazo_entrega" ).datepicker({
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
          </ul>
        </li>
      </ul>
       <a  href="cerrarsesion.php"><img class="cerrar" src="img/cerrar_sesion.png" alt="" ></a>
    </div><!-- /.navbar-collapse -->
</nav>

<body>
	<div class="contenedor">


<a href="cliente.php"><button  class="btn btn-default" type="submit"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"> NUEVO</span></button></a>
<a href="cliente.buscar.php"><button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"> BUSCAR</span></button></a>
<button class="btn btn-default" type="button"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"> VOLVER</span></button>

<br><br>
<h1> Crear Orden de Trabajo</h1>

<form class="form-group" action=""  method="POST" onSubmit="return validar()">

<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Orden de Trabajo
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">

      <div class="container">

<!--INICIO DE TODO FORMULARIO-->

<?php
include("conexion.php");


$consulta="SELECT id_orden_trabajo FROM orden_trabajo";
$ot=mysql_query($consulta);

?>
<div class="col-xs-5">
<label for="">Numero de Orden de Trabajo</label>
<input type="text" class="form-control" id="id_orden_trabajo" value="<?php echo $ot['id_orden_trabajo']?>" name="id_orden_trabajo"  ></div>

<div class="col-xs-5">
<label class="fe" for="">Fecha Creación<input class="" type="text" name="fecha_creacion" id="fecha_creacion"></label></div><!--fecha con jquey-->

<div class="col-xs-5">
<label class="fe" for="">Fecha Plazo de Entrega<input class="" type="text" name="fecha_plazo_entrega" id="fecha_plazo_entrega"></label></div><!--fecha con jquey-->


<?php
include("conexion.php");


$consulta1="SELECT * FROM usuario";
$asig=mysql_query($consulta1);

?>
<div class="col-xs-5" >
<label for="">Asigar a Técnico</label>
<select id="id_ciudad" class="form-control" name="id_ciudad" > 
<option value="" selected="">---Asignar Técnico---</option>
 <?php
      while($reci=mysql_fetch_array($asig))
  {?>
      <option value="<?php echo $reci['0']?>"><?php echo $reci['3'];?></option>
  <?php } ?>
</select>
</div>

<?php
include("conexion.php");


$consulta2="SELECT * FROM ot_tipo";
$asig1=mysql_query($consulta2);

?>
<div class="col-xs-5" >
<label for="">Tipo de OT</label>
<select id="id_ciudad" class="form-control" name="id_ciudad" > 
<option value="" selected="">---Tipo de Orde de Trabajo---</option>
 <?php
      while($f=mysql_fetch_array($asig1))
  {?>
      <option value="<?php echo $f['0']?>"><?php echo $f['1'];?></option>
  <?php } ?>
</select>
</div>

<?php
include("conexion.php");


$consulta3="SELECT * FROM area";
$asig2=mysql_query($consulta3);

?>
<div class="col-xs-5" >
<label for="">Area</label>
<select id="id_ciudad" class="form-control" name="id_ciudad" > 
<option value="" selected="">---Area de Trabajo---</option>
 <?php
      while($fi=mysql_fetch_array($asig2))
  {?>
      <option value="<?php echo $fi['0']?>"><?php echo $fi['1'];?></option>
  <?php } ?>
</select>
</div>


<?php
include("conexion.php");


$consulta4="SELECT * FROM estado";
$asig3=mysql_query($consulta4);

?>
<div class="col-xs-5" >
<label for="">Estado</label>
<select id="id_ciudad" class="form-control" name="id_ciudad" > 
<option value="" selected="">---Estado Orden de Trabajo---</option>
 <?php
      while($fil=mysql_fetch_array($asig3))
  {?>
      <option value="<?php echo $fil['0']?>"><?php echo $fil['1'];?></option>
  <?php } ?>
</select>
</div>

  
        </div>
    </div>
  </div>
<!--DATOS DEL CLIENTE-->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Datos del Cliente
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">

      <!--aqui va formulario de div-->
      
<div class="col-xs-5" >
<label for="">Cliente</label>
<select id="nombreCliente" class="form-control" name="nombreCliente" onchange="escola(this.value)" value="" > 
<option value="0">---Selecionar Cliente---</option>
</select>
</div>


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
<label for="">Ciudad:</label>
<input type="text" class="form-control" id="nombrec" name="nombrec" placeholder="Ciudad" required="" value=""></div>
<!--Consulta para buscar al Encargado del Cliente-->


<div class="col-xs-5" >
<label for="">Encargado Cliente:</label>
<select  class="form-control" id="nombreE" name="nombreE" value=""> 
<option value="0" ></option>
</select>
</div> 

      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Datos del Equipo
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
        aqui son los datos del equipo
      </div>
    </div>
  </div>

    <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingFour">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
         Causas de Visita
        </a>
      </h4>
    </div>
    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
      <div class="panel-body">
        aqui van las causas de la visita
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingFive">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
         Costos
        </a>
      </h4>
    </div>
    <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
      <div class="panel-body">
        aqui van los COOSTOS
      </div>
    </div>
  </div>

</div><!--el segundo div del acordion-->
</div><!--el primer div del acordion-->

</div><!--div contenedor-->
  
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
<p class='avisos'>El RUT ya esta registrado</p> 
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
    <script src="js/jquery.js"></script>    
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/datepicker-es.js"></script>
    <script src="js/autollenado.js" ></script>
    <script src="listarencargado.js"></script>
</body>
<footer> </footer>
</html>
<?php
}else{
  echo '<script> window.location="index.php";</script>';
}

?>