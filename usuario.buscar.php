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

$consulta="SELECT * FROM  cliente";
$result=mysql_query($consulta);


?>
	<title>Usuario</title>
  <script language="JavaScript" type="text/javascript" src="js/ajax.js"></script>
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
    margin: 10px 300px 20px 400px;
    color: orange;
    border-top: 30px;
   
  }
   h4{
    margin: 10px auto;
    color: #555555;
    
  }
    .contenedor {
    width: 1300px;
    height: 100px;
    margin:  auto;   
}
label {
  color:#555555;
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
  <div class="container-fluid" >
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

<form class="form-group" action=""  method="POST">

<div class="container" >

<div class="form-group" id="datos">
<h4><label for="caja_busqueda"><h1>Buscar Usuario</h1></label></h4>
    <input type="text" name="busca" id="busqueda" class="form-control" placeholder="Buscar">
    <button type="submit" name="submit" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true"> BUSCAR</span></button>

</div>


<table  class="table table-striped" id="" name="" >
<thead>
      <th colspan="1"><a href="usuario.php" class="btn btn-primary">Nuevo Usuario</a></th>
      <th colspan="11">Lista de Usuarios</th>
    </thead>
    <tbody>
      <tr>
        <td><h4>Nivel Acceso</h4></td>
        <td><h4>Cargo</h4></td>
        <td><h4>Nombre</h4></td>
        <td><h4>Domicilio</h4></td>
        <td><h4>Fono</h4></td>
        <td><h4>Rut</h4></td>
        <td><h4>Correo</h4></td>
        <td colspan="1"><h4>Operaciones</h4></td>
      </tr>
<?php


$busca="";
$busca=isset($_POST['busca'])?$_POST['busca']: NULL;  
include("conexion.php");
if($busca!=""){
 //  Consulta Mysql donde se aplica INNER JOIN
        $dbhandle=mysql_query("SELECT usuario.id_usuario, usuario.nombre, usuario.domicilio, usuario.fono, usuario.rut, usuario.clave, usuario.correo, nivelacceso.nivel, cargo.nombreC FROM usuario INNER JOIN nivelacceso  ON usuario.id_nivelacceso=nivelacceso.id_nivelacceso INNER JOIN cargo ON usuario.id_cargo=cargo.id_cargo WHERE nombre like '%".$busca."%' ")or die(mysql_error());
      
  while($fila=mysql_fetch_array($dbhandle)){
   echo '<tr>';
   echo '<td>'.$fila['nivel'].'</td>';
   echo '<td>'.$fila['nombreC'].'</td>';
   echo '<td>'.'<strong>'.$fila['nombre'].'</strong>'.'</td>';
   echo '<td>'.$fila['domicilio'].'</td>';
   echo '<td>'.$fila['fono'].'</td>';
   echo '<td>'.$fila['rut'].'</td>';
   echo '<td>'.$fila['correo'].'</td>';
   echo '<td>'.'<a href="usuario.modificar.php?id='.$fila['id_usuario'].'" 
   class="btn btn-primary">'.'Modificar'.'</a>'.'</td>';
  
}
}
?>  

         
  </ul>
      </tbody>
</table>

<?php
// close connection; 
mysql_close();
?>
<nav aria-label="">
  <ul class="pagination">
    <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
    <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
</nav>
</ul>
</nav>
</div>
</form>
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
</body>
<footer> </footer>
</html>
<?php
}else{
  echo '<script> window.location="index.php";</script>';//esto se podria llamar login.php, me dirije al login
}

?>