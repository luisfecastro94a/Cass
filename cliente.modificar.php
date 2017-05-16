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

$consultam="SELECT * FROM ciudad";
$regs=mysql_query($consultam);


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


<a href="cliente.php"><button  class="btn btn-default" type="submit"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"> NUEVO</span></button></a>
<a href="cliente.buscar.php"><button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"> BUSCAR</span></button></a>
<button class="btn btn-default" type="button"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"> VOLVER</span></button>

<br><br>
<?php
    $id=$_REQUEST['id'];
    include("conexion.php");

      
      
      $consulta=mysql_query("SELECT cliente.nombre, cliente.rut, cliente.fono, cliente.correo, cliente.giro, cliente.direccion, cliente.nombre_contacto,cliente.fono_contacto, cliente.correo_contacto, cliente.cargo_contacto,cliente.condicion_pago, ciudad.nombrec FROM cliente INNER JOIN ciudad ON cliente.id_ciudad=ciudad.id_ciudad WHERE id_cliente='$id'")or die(mysql_error());
      $reg=mysql_fetch_array($consulta);
  ?>
<h1>Modificar Cliente</h1>
<!--Comienzo de Formulario-->
<form class="form-group" action=""  method="POST">

<div class="container">


<div class="form-group" >
<label for="">Nombre Empresa:</label>
<input type="text" class="form-control" name="nombre" placeholder="Nombre Empresa"  required="" value="<?php echo $reg['nombre'];?>"></div>
<div class="form-group" >
<label for="">Rut Empresa:</label>
<input type="text" class="form-control" name="rut" id="rut" placeholder="Rut"  required oninput="checkRut(this)" value="<?php echo $reg['rut'];?>"></div>
<div class="form-group" >
<label for="">Fono/Fax:</label>
<input type="text" class="form-control" name="fono" maxlength="9" placeholder="Fono/Fax" onKeyPress="return SoloNumeros(event)" required="" value="<?php echo $reg['fono'];?>"></div>
<div class="form-group" >
<label for="">Correo:</label>
<input type="email" class="form-control" name="correo" id="correo"   placeholder="E-mail" required="" value="<?php echo $reg['correo'];?>"></div>
<div class="form-group" >
<label for="">Giro:</label>
<input type="text" class="form-control" name="giro" placeholder="Giro" onKeyPress="return soloLetras(event)" required="" value="<?php echo $reg['giro'];?>"></div>
<div class="form-group" >
<label for="">Direccion:</label>
<input type="text" class="form-control" name="direccion" placeholder="Direccion" required="" value="<?php echo $reg['direccion'];?>"></div>

<div class="form-group" >
<label for="">Ciudad:</label>
<select id="id_ciudad" class="form-control" name="id_ciudad"> 
<?php
      while($result=mysql_fetch_array($regs))
  {?>
      <option value="<?php echo $result['id_ciudad']?>"><?php echo $result['nombrec'];?></option>
  <?php } ?>
</select>
</div>
<div class="form-group" >
<label for="">Nombre Contacto:</label>
<input type="text" class="form-control" name="nombre_contacto" placeholder="Nombre Contacto" onKeyPress="return soloLetras(event)" required="" value="<?php echo $reg['nombre_contacto'];?>"></div>
<div class="form-group" >
<label for="">Fono Contacto:</label>
<input type="text" class="form-control" name="fono_contacto" placeholder="Fono Contacto" onKeyPress="return SoloNumeros(event)" required="" value="<?php echo $reg['fono_contacto'];?>"></div>
<div class="form-group" >
<label for="">Correo Contacto:</label>
<input type="email" class="form-control" name="correo_contacto" placeholder="Correo Contacto" required="" value="<?php echo $reg['correo_contacto'];?>"></div>
<div class="form-group" >
<label for="">Cargo Contacto:</label>
<input type="text" class="form-control" name="cargo_contacto" placeholder="Cargo Contacto" onKeyPress="return soloLetras(event)" required="" value="<?php echo $reg['cargo_contacto'];?>"></div>
<div class="form-group">
<label for="">Condición de Pago:</label>
<select class="form-control" name="condicion_pago">
<option value="<?php echo $reg['condicion_pago'];?>" selected=""><?php echo $reg['condicion_pago'];?></option>
  <option value="EFECTIVO">EFECTIVO</option>
  <option value="CREDITO 30 DIAS">CREDITO 30 DIAS</option>
  <option value="CREDITO 60 DIAS">CREDITO 60 DIAS</option>
  <option value="CREDITO 90 DIAS">CREDITO 90 DIAS</option>
</select>
</div>
  
  <button type="submit" class="btn btn-primary btn-lg btn-block">Modificar</button>
  <button type="reset" class="btn btn-default btn-lg btn-block">Cancelar</button>

</div>
</form>
</div>

<?php
include("conexion.php");
 


      $id=$_REQUEST['id'];  
      $Ciudad = isset($_POST['id_ciudad']) ? $_POST['id_ciudad']: '';    
      $Nombre = isset($_POST['nombre']) ? $_POST['nombre']:'';
      $Rut = isset($_POST['rut']) ? $_POST['rut']:'';
      $Fono = isset($_POST['fono']) ? $_POST['fono']: '';
      $Correo = isset($_POST['correo']) ? $_POST['correo']: '';
      $Giro = isset($_POST['giro']) ? $_POST['giro']: '';
      $Direccion = isset($_POST['direccion']) ? $_POST['direccion']: '';
      $Nombre_contacto = isset($_POST['nombre_contacto']) ? $_POST['nombre_contacto']: '';
      $Fono_contacto = isset($_POST['fono_contacto']) ? $_POST['fono_contacto']: '';
      $Correo_contacto = isset($_POST['correo_contacto']) ? $_POST['correo_contacto']: '';
      $Cargo_contacto = isset($_POST['cargo_contacto']) ? $_POST['cargo_contacto']: '';
      $Condicion_pago = isset($_POST['condicion_pago']) ? $_POST['condicion_pago']: '';

   // conexión a la base de datos de
$dbhandle = mysql_connect($hostname, $username, $password) 
 or die("No se pudo Contactar a Base de Datos MySQL");


// seleccionar una base de datos para trabajar con
$selected = mysql_select_db("bdcass",$dbhandle) 
  or die("No se pudo seleccionar la base de datos CASS");

  mysql_query("UPDATE  cliente SET id_ciudad=$Ciudad, nombre='$Nombre', rut='$Rut' , fono='$Fono' , correo='$Correo' , giro='$Giro' , direccion='$Direccion' , nombre_contacto='$Nombre_contacto' , fono_contacto='$Fono_contacto' , correo_contacto='$Correo_contacto' , cargo_contacto='$Cargo_contacto' , condicion_pago='$Condicion_pago' WHERE id_cliente='$id'");
 
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