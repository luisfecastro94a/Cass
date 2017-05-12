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

$consultam="SELECT * FROM cargo";
$regs=mysql_query($consultam);


?>
	<title>Usuario</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="js/bootstrap.min.js">
<script type="text/javascript">
function Limpiar() {
var t = document.getElementById("f").getElementsByTagName("input");
for (var i=0; i<t.length; i++) {
    t[i].value = "";
    }
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
  color:#8E8E8E;
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
        <li><a  href="#">Orden de Trabajo</a></li>
         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mantenedor<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="ciudad.php">Ciudad</a></li>
            <li><a href="usuario.php">Usuario</a></li>
             <li><a href="proveedor.php">Proveedor</a></li>
            <li><a href="uf.php">Uf</a></li>
            <li><a href="comision.php">Comisiones</a></li>
            <li><a href="periodo.php">Periodo</a></li>
          </ul>
        </li>
      </ul>
       <a  href="cerrarsesion.php"><img class="cerrar" src="img/cerrar_sesion.png" alt="" ></a>
    </div><!-- /.navbar-collapse -->
</nav>

<body>
	<div class="contenedor">


<a href="usuario.php"><button  class="btn btn-default" type="submit"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"> NUEVO</span></button></a>
<a href="usuario.buscar.php"><button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"> BUSCAR</span></button></a>
<button class="btn btn-default" type="button"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"> VOLVER</span></button>

<br><br>
<?php
    $id=$_REQUEST['id'];
    include("conexion.php");

      
      
      $consulta=mysql_query("SELECT usuario.id_usuario, usuario.nombre, usuario.apellido, usuario.domicilio, usuario.fono, usuario.rut, usuario.clave, usuario.correo, nivelacceso.nivel, cargo.nombreC FROM usuario INNER JOIN nivelacceso  ON usuario.id_nivelacceso=nivelacceso.id_nivelacceso INNER JOIN cargo ON usuario.id_cargo=cargo.id_cargo WHERE id_usuario='$id'")or die(mysql_error());
      $reg=mysql_fetch_array($consulta);
  ?>
<h1>Modificar Usuario</h1>
<!--Comienzo de Formulario-->
<form class="form-group" action=""  method="POST">

<div class="container">


<div class="form-group" >
<label for="">Nombre </label>
<input type="text" class="form-control" name="nombre" placeholder="Nombre Empresa"  required="" value="<?php echo $reg['nombre'];?>"></div>
<div class="form-group" >
<label for="">Apellido </label>
<input type="text" class="form-control" name="apellido" placeholder="Apellido"  required="" value="<?php echo $reg['apellido'];?>"></div>
<div class="form-group" >
<label for="">Domicilio </label>
<input type="text" class="form-control" name="domicilio" placeholder="Domicilio"  required="" value="<?php echo $reg['domicilio'];?>"></div>
<div class="form-group" >
<label for="">Fono</label>
<input type="text" class="form-control" name="fono" placeholder="Fono" onKeyPress="return SoloNumeros(event)" required="" value="<?php echo $reg['fono'];?>"></div>
<div class="form-group" >
<label for="">Rut</label>
<input type="text" class="form-control" name="rut" id="rut" placeholder="Rut"  required oninput="checkRut(this)" value="<?php echo $reg['rut'];?>"></div>

<div class="form-group" >
<label for="">Correo:</label>
<input type="email" class="form-control" name="correo" id="correo"   placeholder="E-mail" required="" value="<?php echo $reg['correo'];?>"></div>
<div class="form-group" >
<label for="">Clave</label>
<input type="password" class="form-control" name="clave" placeholder="Clave" onKeyPress="return SoloNumeros(event)" required="" value="<?php echo $reg['clave'];?>"></div>


<div class="form-group" >
<label for="">Cargo</label>
<select id="id_cargo" class="form-control" name="id_cargo"> 
<?php
      while($result=mysql_fetch_array($regs))
  {?>
      <option value="<?php echo $result['id_cargo']?>"><?php echo $result['nombreC'];?></option>
  <?php } ?>
</select>
</div>
<?php


include("conexion.php");

$consultam="SELECT * FROM nivelacceso";
$nivel=mysql_query($consultam);


?>

<div class="form-group" >
<label for="">Nivel de Acceso</label>
<select id="id_nivelacceso" class="form-control" name="id_nivelacceso"> 
<?php
      while($acceso=mysql_fetch_array($nivel))
  {?>
      <option value="<?php echo $acceso['id_nivelacceso']?>"><?php echo $acceso['nivel'];?></option>
  <?php } ?>
</select>
</div>




  <button type="submit" class="btn btn-primary btn-lg btn-block"  onclick="Limpiar();">Modificar</button>
  <button type="reset" class="btn btn-default btn-lg btn-block">Cancelar</button>

</div>
</form>
</div>

<?php
include("conexion.php");
 


      $id=$_REQUEST['id'];  
      $nivelacceso = isset($_POST['id_nivelacceso']) ? $_POST['id_nivelacceso']: '';    
      $cargo = isset($_POST['id_cargo']) ? $_POST['id_cargo']: '';
      $nombre = isset($_POST['nombre']) ? $_POST['nombre']:'';
      $apellido = isset($_POST['apellido']) ? $_POST['apellido']:'';
      $domicilio = isset($_POST['domicilio']) ? $_POST['domicilio']:'';
      $fono = isset($_POST['fono']) ? $_POST['fono']: '';
      $rut = isset($_POST['rut']) ? $_POST['rut']:'';
      $clave = isset($_POST['clave']) ? $_POST['clave']: '';
      $correo = isset($_POST['correo']) ? $_POST['correo']: '';
     

   // conexión a la base de datos de
$dbhandle = mysql_connect($hostname, $username, $password) 
 or die("No se pudo Contactar a Base de Datos MySQL");


// seleccionar una base de datos para trabajar con
$selected = mysql_select_db("bdcass",$dbhandle) 
  or die("No se pudo seleccionar la base de datos CASS");


$query=mysql_query("UPDATE  usuario SET id_nivelacceso=$nivelacceso, id_cargo=$cargo, nombre='$nombre', apellido='$apellido', domicilio='$domicilio', fono='$fono', rut='$rut' , clave='$clave' , correo='$correo' WHERE id_usuario='$id'");




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
</body>
<footer> </footer>
</html>
<?php
}else{
  echo '<script> window.location="index.php";</script>';//esto se podria llamar login.php, me dirije al login
}

?>