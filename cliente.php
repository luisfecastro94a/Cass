<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="UTF-8">
<?php
include("conexion.php");

$consulta="SELECT * FROM ciudad";
$result=mysql_query($consulta);


?>
	<title>cliente</title>
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
       <li><a  href="index.php">Inicio</a></li>
        
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
        <li><a  href="#">Orden de Trabajo</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
</nav>

<body>
	<div class="contenedor">


<a href="cliente.php"><button  class="btn btn-default" type="submit"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"> NUEVO</span></button></a>
<a href="cliente.buscar.php"><button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"> BUSCAR</span></button></a>
<button class="btn btn-default" type="button"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"> VOLVER</span></button>

<br><br>
<h1>Crear Cliente</h1>

<form class="form-group" action=""  method="POST" onSubmit="return validar()">

<div class="container">


<div class="form-group" >
<label for="">Nombre Empresa:</label>
<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre Empresa"  required=""></div>
<div class="form-group" >
<label for="">Rut Empresa:</label>
<input type="text" class="form-control" id="rut" name="rut"  placeholder="Rut"  required oninput="checkRut(this)"></div>


<div class="form-group" >
<label for="">Fono/Fax Empresa:</label>
<input type="text" class="form-control" name="fono" id="fono" placeholder="Fono/Fax" onKeyPress="return SoloNumeros(event)"
  required=""></div>


<div class="form-group" >
<label for="">Correo:</label>
<input type="email" class="form-control" name="correo" id="correo"   placeholder="E-mail" required=""></div>
<div class="form-group" >
<label for="">Giro:</label>
<input type="text" class="form-control" name="giro" placeholder="Giro" onKeyPress="return soloLetras(event)" required=""></div>
<div class="form-group" >
<label for="">Direccion:</label>
<input type="text" class="form-control" name="direccion" placeholder="Direccion" required=""></div>

<div class="form-group" >
<label for="">Ciudad:</label>
<select id="id_ciudad" class="form-control" name="id_ciudad" > 
<option value="" selected="">Seleccionar Ciudad</option>
 <?php
      while($fila=mysql_fetch_array($result))
  {?>
      <option value="<?php echo $fila['0']?>"> <?php echo $fila['1'];?></option>
  <?php } ?>
</select>
</div>
<div class="form-group" >
<label for="">Nombre Contacto:</label>
<input type="text" class="form-control" name="nombre_contacto" placeholder="Nombre Contacto" onKeyPress="return soloLetras(event)" required=""></div>
<div class="form-group" >
<label for="">Fono Contacto:</label>
<input type="text" class="form-control" name="fono_contacto" placeholder="Fono Contacto" onKeyPress="return SoloNumeros(event)" required=""></div>
<div class="form-group" >
<label for="">Correo Contacto:</label>
<input type="email" class="form-control" name="correo_contacto" placeholder="Correo Contacto" required=""></div>
<div class="form-group" >
<label for="">Cargo Contacto:</label>
<input type="text" class="form-control" name="cargo_contacto" placeholder="Cargo Contacto" onKeyPress="return soloLetras(event)" required=""></div>

<div class="form-group">
<label for="">Condición de Pago:</label>
<select class="form-control" name="condicion_pago">
<option value="" selected="">--Selecciona Condicion de Pago--</option>
  <option value="EFECTIVO">EFECTIVO</option>
  <option value="CREDITO 30 DÍAS">CREDITO 30 DÍAS</option>
  <option value="CREDITO 60 DÍAS">CREDITO 60 DÍAS</option>
  <option value="CREDITO 90 DÍAS">CREDITO 90 DÍAS</option>
</select>
</div>
  
  <button type="submit" id="enviar" class="btn btn-primary btn-lg btn-block">Guardar</button>
  <button type="button" class="btn btn-default btn-lg btn-block">Cancelar</button>
  

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
$selected = mysql_select_db("cass_computacion",$dbhandle) 
  or die("No se pudo seleccionar la base de datos CASS");

// Comprobamos si el usuario esta registrado 

$nuevo_usuario=mysql_query("SELECT nombre FROM cliente WHERE nombre='$Nombre'"); 
if(mysql_num_rows($nuevo_usuario)>0) 
{ 
echo " 
<p class='avisos'>El nombre de usuario ya esta registrado</p> 
<p class='avisos'><a href='javascript:history.go(-1)' class='clase1'>Volver atrás</a></p> 
"; 
} 
// ------------ Si no esta registrado el usuario continua el script 
else 
{ 
// ============================================== 
// Comprobamos si el email esta registrado 

$nuevo_rut=mysql_query("SELECT rut FROM cliente WHERE rut='$Rut'"); 
if(mysql_num_rows($nuevo_rut)>0) 
{ 
echo " 
<p class='avisos'>El RUT ya esta registrado</p> 
<p class='avisos'><a href='javascript:history.go(-1)' class='clase1'>Volver atrás</a></p> 
"; 
}else{
  
  $consulta=mysql_query("INSERT INTO cliente (id_ciudad, nombre, rut, fono, correo, giro, direccion, nombre_contacto, fono_contacto, correo_contacto, cargo_contacto, condicion_pago) VALUES ('$Ciudad', '$Nombre','$Rut','$Fono','$Correo','$Giro', '$Direccion',  '$Nombre_contacto','$Fono_contacto','$Correo_contacto','$Cargo_contacto','$Condicion_pago')") or die(mysql_errno());
  echo " 
    <p class='avisos'>Registro insertado con exito</p> 
    <p class='avisos'><a href='javascript:history.go(-1)' class='clase1'>Volver atrás</a></p> 
    "; 

}
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
    <script src="validaremail.js"></script>
    <script src="validartelefono.js"></script>
    
</body>
<footer> </footer>
</html>