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
//var_dump($_POST); esto es para ver los datos que pasan, que datos estan pasando 
$consulta="SELECT * FROM cargo";
$result=mysql_query($consulta);


?>
	<title>Usuario</title>

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


<a href="usuario.php"><button  class="btn btn-default" type="submit"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"> NUEVO</span></button></a>
<a href="usuario.buscar.php"><button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"> BUSCAR</span></button></a>
<button class="btn btn-default" type="button"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"> VOLVER</span></button>

<br><br>
<h1>Crear Usuario</h1>

<form class="form-group" action=""  method="POST" onSubmit="return validar()">

<div class="container">


<div class="col-xs-5" ><!--al div hay que cambiar el form-group por col-xs-->
<label for="">Nombre Completo</label>
<input type="text" class="form-control"  name="nombreUsuario" placeholder="Nombre" onKeyPress="return soloLetras(event)" autofocus=""  required=""></div>


<div class="col-xs-5" >
<label for="">Domicilio</label>
<input type="text" class="form-control"  name="domicilio" placeholder="Domicilio"  required=""></div>

<div class="col-xs-5" >
<label for="">Fono </label>
<input type="text" class="form-control"  name="fono" placeholder="Fono " onKeyPress="return SoloNumeros(event)" required=""></div>

<div class="col-xs-5" >
<label for="">Rut</label>
<input type="text" class="form-control"  name="rut"  placeholder="Rut"  required oninput="checkRut(this)"></div>


<div class="col-xs-5" >
<label for="">Correo</label>
<input type="email" class="form-control" name="correo"   placeholder="E-mail" required=""></div>

<div class="col-xs-5" >
<label for="">Clave</label>
<input type="password" class="form-control" name="clave"  placeholder="Contraseña" required=""></div>

            <div class="col-xs-5" >
              <label for="" >Cargo</label>
              <select id="id_cargo" class="form-control" name="id_cargo" > 
                <option value="" selected="">-------------Selecciona Cargo-------------</option>
                 <?php
                        while($fila=mysql_fetch_array($result))
                 {?>
                   <option value="<?php echo $fila['0']?>"> <?php echo $fila['1'];?></option>
                 <?php } ?>
              </select>
            </div>
            <?php
            include("conexion.php");

            $sol="SELECT * FROM nivelacceso";
            $reg=mysql_query($sol);

            ?>    
            <div class="col-xs-5" >
              <label for="">Nivel de Acceso</label>
              <select id="id_nivelacceso" class="form-control" name="id_nivelacceso" > 
                <option value="" selected="">-------------Selecciona Cargo-------------</option>
                 <?php
                        while($fila1=mysql_fetch_array($reg))
                 {?>
                   <option value="<?php echo $fila1['0'];?>"> <?php echo $fila1['1'];?></option>
                 <?php } ?>
              </select>
            </div>

            <div class="col-xs-5">
              <button type="submit"  class="btn btn-primary btn-lg btn-block">Registrar</button>
            </div>
            <div class="col-xs-5">
                    <a href="index.php" class="btn btn-danger">Login</a>
            </div>
</div>
</form>
</div>
<?php
include("conexion.php");

if
    (
     isset($_POST['id_nivelacceso']) && !empty($_POST['id_nivelacceso']) &&
     isset($_POST['id_cargo']) && !empty($_POST['id_cargo']) &&
     isset($_POST['nombreUsuario']) && !empty($_POST['nombreUsuario']) &&
     isset($_POST['domicilio']) && !empty($_POST['domicilio']) &&
     isset($_POST['fono']) && !empty($_POST['fono']) &&
     isset($_POST['rut']) && !empty($_POST['rut']) &&
     isset($_POST['clave']) && !empty($_POST['clave']) &&
     isset($_POST['correo']) && !empty($_POST['correo']))
    
  {

      $nivelacceso = $_POST['id_nivelacceso']; 
      $cargo = $_POST['id_cargo'];
      $nombre = $_POST['nombreUsuario'];
      $domicilio = $_POST['domicilio'];
      $fono = $_POST['fono'];
      $rut = $_POST['rut'];
      $clave = $_POST['clave'];
      $correo = $_POST['correo'];

// ============================================== 
// Comprobamos si el rut esta registrado 


$nuevo=mysql_query("SELECT rut FROM usuario WHERE rut='$rut'"); 
if(mysql_num_rows($nuevo)>0) 
{ 
echo " 
<p class='avisos'>El RUT ya esta registrado</p> 
<p class='avisos'><a href='javascript:history.go(-1)' class='clase1'>Volver atrás</a></p> 
"; 
}
else{
  mysql_query("INSERT INTO usuario (id_nivelacceso, id_cargo, nombreUsuario,  domicilio, fono, rut, clave, correo) VALUES ('$nivelacceso', '$cargo','$nombre','$domicilio','$fono', '$rut',  '$clave','$correo')")or die(mysql_errno());
   echo '<script> alert("Usuario Creado con Exito."); </script>';
}

}
else{
  
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
     
</body>
<footer> </footer>
</html>
<?php
}else{
  echo '<script> window.location="index.php";</script>';
}

?>