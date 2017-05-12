<?php
session_start();
include("conexion.php");
if (isset($_SESSION['correo'])) {?>
<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="UTF-8">

	<title>Proveedor</title>
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



<a href="estado.php"><button  class="btn btn-default" type="submit"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"> NUEVO</span></button></a>
<a href="estado.buscar.php"><button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"> BUSCAR</span></button></a>
<button class="btn btn-default" type="button"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"> VOLVER</span></button>

<br><br>

<form class="form-group" action=""  method="POST">

<div class="container" >

<div class="form-group" id="datos">
<h4><label for="caja_busqueda"><h1>Buscar Proveedor</h1></label></h4>
    <input type="text" name="busca" id="busqueda" class="form-control" placeholder="Buscar" autofocus="">
    <button type="submit" name="submit" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true"> BUSCAR</span></button>

</div>


<table  class="table table-striped" id="" name="" >
<thead>
      <th colspan="1"><a href="proveedor.php" class="btn btn-primary">Nuevo Proveedor</a></th>
      <th colspan="11">Lista de Proveedores</th>
    </thead>
    <tbody>
      <tr>
        <td><h4>#</h4></td>
        <td><h4>Rut</h4></td>
        <td><h4>Razon Social</h4></td>
        <td><h4>Direccion</h4></td>
        <td><h4>Nombre Contacto</h4></td>
        <td><h4>Telefono Contacto</h4></td>
        <td><h4>Cargo</h4></td>
        <td colspan="2"><h4>Operaciones</h4></td>
      </tr>

<?php

$busca="";
$busca=isset($_POST['busca'])?$_POST['busca']: NULL;  
include("conexion.php");
if($busca!=""){
  $dbhandle=mysql_query("SELECT * FROM proveedor WHERE razon_social like '%".$busca."%' ");
}


   while($muestra=mysql_fetch_array($dbhandle)){
   echo '<tr>';
   echo '<td>'.'<a style=\"text-decoration:underline;cursor:pointer;\" onclick="eliminarDato(\"'.$muestra['id_proveedor'].'\")">'.$muestra['id_proveedor'].'</a>'.'</td>';
   echo '<td>'.$muestra['rut'].'</td>';
   echo '<td>'.'<strong>'.$muestra['razon_social'].'</strong>'.'</td>';
   echo '<td>'.$muestra['direccion'].'</td>';
   echo '<td>'.$muestra['nombre_contacto'].'</td>';
   echo '<td>'.$muestra['fono_contacto'].'</td>';
   echo '<td>'.$muestra['cargo_contacto'].'</td>';
   echo '<td>'.'<a href="proveedor.modificar.php?id='.$muestra['id_proveedor'].'" class="btn btn-primary">'.'Modificar'.'</a>'.'</td>';
   echo '<td>'.'<button  type="button" class="btn btn-danger bt-xs"
                         onclick="eliminarDato(\''.$muestra['id_proveedor'].'\');">'.'Eliminar'.'</button> '.'</td>';   
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