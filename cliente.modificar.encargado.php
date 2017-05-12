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

$consulta="SELECT * FROM cliente";
$result=mysql_query($consulta);


?>
  <title>Cliente Encargado</title>
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
            <li><a href="#">Ingresar Encargado</a></li>
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


<a href="cliente.encargado.php"><button  class="btn btn-default" type="submit"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"> NUEVO</span></button></a>
<a href="cliente.encargado.buscar.php"><button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"> BUSCAR</span></button></a>
<button class="btn btn-default" type="button"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"> VOLVER</span></button>

<br><br>
<?php
  /*$consulta=mysql_query("SELECT cliente_encargado.nombreE, cliente_encargado.apellido, cliente_encargado.rut, cliente_encargado.fono, cliente_encargado.correo, cliente.nombre FROM cliente_encargado INNER JOIN cliente ON cliente_encargado.id_cliente=cliente.id_cliente WHERE id_cliente_encargado='$id'")or die(mysql_error());
      $reg=mysql_fetch_array($consulta);*/

    $id=$_REQUEST['id'];
    include("conexion.php");
      
      $pedir=mysql_query("SELECT * FROM cliente_encargado WHERE id_cliente_encargado='$id' ")or die(mysql_error());
      $reg=mysql_fetch_array($pedir);
  ?>
<h1>Modificar Cliente Encargado</h1>

<form class="form-group" action=""  method="POST">

<div class="container">

<div class="form-group" >
<label for="">Cliente a asociar</label>
<select id="id_cliente" class="form-control" name="id_cliente"> 
<option value="<?php echo $fila['id_cliente']?>">---Seleccionar Cliente---</option>
<?php
      while($fila=mysql_fetch_array($result))
  {?>
      <option value="<?php echo $fila['id_cliente']?>"><?php echo $fila['nombre'];?></option>
  <?php } ?>
</select>
</div>

<div class="form-group" >
<label for="">Nombre</label>
<input type="text" class="form-control" name="nombreE" placeholder="Nombres"  required="" value="<?php echo $reg['nombreE'];?>"></div>

<div class="form-group" >
<label for="">Apellido</label>
<input type="text" class="form-control" name="apellido" placeholder="Apellidos" onKeyPress="return soloLetras(event)" required="" value="<?php echo $reg['apellido'];?>"></div>


<div class="form-group" >
<label for="">rut</label>
<input type="text" class="form-control" name="rut" id="rut" placeholder="Rut"  required oninput="checkRut(this)" value="<?php echo $reg['rut'];?>"></div>



<div class="form-group" >
<label for="">fono</label>
<input type="text" class="form-control" name="fono" id="fono" placeholder="Fono/Fax" onKeyPress="return SoloNumeros(event)"
  required="" value="<?php echo $reg['fono'];?>"></div>

<div class="form-group" >
<label for="">correo</label>
<input type="email" class="form-control" name="correo" id="correo"   placeholder="E-mail" required="" value="<?php echo $reg['correo'];?>"></div>

  
  <button type="submit" class="btn btn-primary btn-lg btn-block">Modificar</button>
  <button type="reset" class="btn btn-default btn-lg btn-block">Cancelar</button>

</div>
</form>
</div>

<?php
include("conexion.php");

      
      $id=$_REQUEST['id'];          
      $Cliente = isset($_POST['id_cliente'])? $_POST['id_cliente']:''; 
      $Nombre =isset($_POST['nombreE'])? $_POST['nombreE']:''; 
      $Apellido = isset($_POST['apellido'])? $_POST['apellido']:''; 
      $Rut = isset($_POST['rut'])? $_POST['rut']:''; 
      $Fono = isset($_POST['fono'])? $_POST['fono']:''; 
      $Correo = isset($_POST['correo'])? $_POST['correo']:''; 
      
    // conexión a la base de datos de
$dbhandle = mysql_connect($hostname, $username, $password) 
 or die("No se pudo Contactar a Base de Datos MySQL");


// seleccionar una base de datos para trabajar con
$selected = mysql_select_db("bdcass",$dbhandle) 
  or die("No se pudo seleccionar la base de datos CASS");
  


  mysql_query("UPDATE cliente_encargado SET id_cliente='$Cliente', nombreE='$Nombre', apellido='$Apellido', rut='$Rut', fono='$Fono', correo='$Correo' WHERE id_cliente_encargado='$id'")or die(mysql_error());

?>
<?php
// close connection; 
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
    <script src="validartelefono.js"></script>
</body>
<footer> </footer>
</html>
<?php
}else{
  echo '<script> window.location="index.php";</script>';//esto se podria llamar login.php, me dirije al login
}

?>
