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
	<title>Proveedor</title>
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
  .fecha{
    margin: 3px 2px 5px 40px;
  }
  .fe {
    margin: 3% 1% 3% 60%;/*superior, derecho, inferior, izquierdo*/
    font-size: 17px;
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


<a href="proveedor.php"><button  class="btn btn-default" type="submit"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"> NUEVO</span></button></a>
<a href="proveedor.buscar.php"><button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"> BUSCAR</span></button></a>
<button class="btn btn-default" type="button"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"> VOLVER</span></button>

<br><br>
<h1>Crear Proveedor</h1>

<form class="form-group" action=""  method="POST" onSubmit="return validar()"> 

<div class="container">
<label class="fe" for="">Fecha Creación:<input class="fecha" type="text" name="fecha_creacion" id="fecha_creacion"></label><!--fecha con jquey-->

<div class="col-xs-5" >
<label for="">Ciudad:</label>
<select id="id_ciudad" class="form-control" name="id_ciudad" autofocus="" > 
<option value="" selected="">Seleccionar Ciudad</option>
 <?php
      while($fila=mysql_fetch_array($result))
  {?>
      <option value="<?php echo $fila['0']?>"><?php echo $fila['1'];?></option>
  <?php } ?>
</select>
</div>

<div class="col-xs-5" >
<label for="">Rut Empresa</label>
<input type="text" class="form-control" id="rut" name="rut"  placeholder="Rut"  required oninput="checkRut(this)"></div>

<div class="col-xs-5" >
<label for="">Razon Social</label>
<input type="text" class="form-control" id="razon_social" name="razon_social" placeholder="Razon Social"  required=""></div>

<div class="col-xs-5" >
<label for="">Direccion</label>
<input type="text" class="form-control" name="direccion" placeholder="Direccion" required=""></div>


<div class="col-xs-5" >
<label for="">Fono/Fax Empresa</label>
<input type="text" class="form-control" name="fono" id="fono" placeholder="Fono/Fax" onKeyPress="return SoloNumeros(event)"
  required=""></div>

<div class="col-xs-5" >
<label for="">Giro</label>
<input type="text" class="form-control" name="giro" placeholder="Giro" onKeyPress="return soloLetras(event)" required=""></div>

<div class="col-xs-5" >
<label for="">Correo</label>
<input type="email" class="form-control" name="correo" id="correo"   placeholder="E-mail" required=""></div>

<div class="col-xs-5" >
<label for="">Nombre Contacto:</label>
<input type="text" class="form-control" name="nombre_contacto" placeholder="Nombre Contacto" onKeyPress="return soloLetras(event)" required=""></div>

<div class="col-xs-5" >
<label for="">Fono Contacto:</label>
<input type="text" class="form-control" name="fono_contacto" placeholder="Fono Contacto" onKeyPress="return SoloNumeros(event)" required=""></div>

<div class="col-xs-5" >
<label for="">Correo Contacto:</label>
<input type="email" class="form-control" name="correo_contacto" placeholder="Correo Contacto" required=""></div>

<div class="col-xs-5" >
<label for="">Cargo Contacto:</label>
<input type="text" class="form-control" name="cargo_contacto" placeholder="Cargo Contacto" onKeyPress="return soloLetras(event)" required=""></div>
 
  <div class="col-xs-5">
  <button type="submit" id="enviar" class="btn btn-primary btn-lg btn-block">Guardar</button>
  <input type="reset" class="btn btn-default btn-lg btn-block" value="Cancelar">
  </div>

  

</div>
</form>
</div>

<?php
if
    (isset($_POST['id_ciudad']) && !empty($_POST['id_ciudad']) &&
     isset($_POST['rut']) && !empty($_POST['rut']) &&
     isset($_POST['razon_social']) && !empty($_POST['razon_social']) &&
     isset($_POST['direccion']) && !empty($_POST['direccion']) &&
     isset($_POST['fono']) && !empty($_POST['fono']) &&
     isset($_POST['giro']) && !empty($_POST['giro']) &&
     isset($_POST['correo']) && !empty($_POST['correo']) &&
     isset($_POST['nombre_contacto']) && !empty($_POST['nombre_contacto']) &&
     isset($_POST['fono_contacto']) && !empty($_POST['fono_contacto']) &&
     isset($_POST['correo_contacto']) && !empty($_POST['correo_contacto']) &&
     isset($_POST['cargo_contacto']) && !empty($_POST['cargo_contacto']) &&
     isset($_POST['fecha_creacion']) && !empty($_POST['fecha_creacion']))
  {

      $ciudad = $_POST['id_ciudad']; 
      $rut = $_POST['rut'];
      $razon_social = $_POST['razon_social'];
      $direccion = $_POST['direccion'];
      $fono = $_POST['fono'];
      $giro = $_POST['giro'];
      $correo = $_POST['correo'];
      $nombre_contacto = $_POST['nombre_contacto'];
      $fono_contacto = $_POST['fono_contacto'];
      $correo_contacto = $_POST['correo_contacto'];
      $cargo_contacto = $_POST['cargo_contacto'];
      $fecha_creacion = $_POST['fecha_creacion'];

    // conexión a la base de datos de
$dbhandle = mysql_connect($hostname, $username, $password) 
 or die("No se pudo Contactar a Base de Datos MySQL");


// seleccionar una base de datos para trabajar con
$selected = mysql_select_db("bdcass",$dbhandle) 
  or die("No se pudo seleccionar la base de datos CASS");

// ============================================== 
// Comprobamos si el rut esta registrado 
include("conexion.php");

$nuevo_rut=mysql_query("SELECT rut FROM proveedor WHERE rut='$rut'"); 
if(mysql_num_rows($nuevo_rut)>0) 
{ 
echo '<script> alert("El Rut ya se encuentra registrado."); </script>';
echo " 
<p class='avisos'><a href='javascript:history.go(-1)' class='clase1 btn btn-danger'><span class='glyphicon glyphicon-repeat' aria-hidden='true'></span>  Volver a Modificar</a></p> 
"; 
}
else{
  
  mysql_query("INSERT INTO proveedor (id_ciudad, rut, razon_social, direccion, fono, giro, correo, nombre_contacto, fono_contacto, correo_contacto, cargo_contacto,fecha_creacion) VALUES ('$ciudad','$rut', '$razon_social','$direccion','$fono','$giro','$correo', '$nombre_contacto','$fono_contacto','$correo_contacto','$cargo_contacto', '$fecha_creacion')") or die(mysql_errno());
 echo '<script> alert("Proveedor Creado con Exito."); </script>';

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