<?php
session_start();
include("conexion.php");
if (isset($_SESSION['correo'])) {?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Inicio</title>
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
	background: #E1E1E1;/*# E1E1E1 FEAB63*/
 	}
 	 nav ul li:hover {
	background: #B6B6B6;
  font-size: 15px;
 	}
	img.logo {
		height: 50px;
		margin: auto;
		width: 50px;
		border: auto;
		
	}
 
 .cerrar{
    height: 40px;
    margin: 5px auto;
    width: 60px;
    border: auto;
  }

table {     font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
    font-size: 14px;   margin: 15px;    width: 480px; text-align: left;    }

th {     font-size: 13px;     font-weight: normal;     padding: 8px;     background: #4169E1;
    border-top: 4px    border-bottom: 1px solid #fff; color: white; }

td {    padding: 8px;     background: #e8edff;   border-bottom: 1px solid #fff;
    color: #669;    border-top: 1px solid transparent; }

tr:hover td { background: #d0dafd; color: #339; }


.uno{
  display: inline-block;
}
.dos{
  display: inline-block;

}
.tres{
  display: inline-block;

}
.cuatro{
  display: inline-block;
 
}
.cinco{
  display: inline-block;
}
.seis{
  display: inline-block;
}
h2{
  color: orange;
  width: 100%;
}
h1{
  color: orange;
  width: 100%;
}
.fe{
 margin: 10px 20px 10px 800px;
}
</style>
</head>
  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
   <div class="navbar-header">
       <img class="logo" src="img/cass_logo.png" alt="">
    </div>
      
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
       <li><a  href="iniciotecnico.php">Inicio</a></li>
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Laboratorio <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li class="disabled"><a href="#" >Ingresar Cliente</a></li>
            <li class="disabled"><a href="#">Ingresar Encargado</a></li>
            <li class="disabled"><a href="#">Ingreso Garantia</a></li>
            <li class="disabled"><a href="#">Presupuesto</a></li>
            <li class="disabled"><a href="#">Cotización</a></li>
            <li class="disabled"><a href="#">Repuesto</a></li>
            <li><a href="reportes/reporte1.php">Resumen Venta</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Equipo<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li class="disabled"><a href="#">Entrada Equipo</a></li>
            <li class="disabled"><a href="#">Salida Equipo</a></li>
            <li class="disabled"><a href="#">Avisos reparación</a></li>
          </ul>
        </li>

        <li><a  href="#">Contratos</a></li>
        <li><a  href="#">Terreno</a></li>
        <li><a  href="#">Soporte Instalaciones</a></li>
        <li><a  href="#">Repuestos</a></li>

        <li class="dropdown">
           <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Orden de Trabajo<span class="caret"></span></a>
               <ul class="dropdown-menu">
                     <li class="disabled"><a  href="#" title="Generar OT a un Técnico">Orden de Trabajo</a></li>
                     <li class="disabled"><a  href="#" title="Generar proforma para cerrar la OT">Proforma (cerrar ot)</a></li>
                     <li class="disabled"><a  href="#" title="Generar factura para cerrar Proforma">Factura</a></li>
               </ul>
        </li>

         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mantenedor<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li class="disabled"><a href="#">Ciudad</a></li>
            <li><a href="usuario.buscar.php">Usuario</a></li>
            <li class="disabled"><a href="#">Proveedor</a></li>
            <li class="disabled"><a href="#">Uf</a></li>
            <li class="disabled"><a href="#">Comisiones</a></li>
            <li class="disabled"><a href="#">Periodo</a></li>
            <li class="disabled"><a href="#">Marca</a></li>
            <li class="disabled"><a href="#">Estado</a></li>
            <li class="disabled"><a href="#">Parametro</a></li>
            <li class="disabled"><a href="#">estadisticas</a></li>
            <li class="disabled"><a href="#">Area</a></li>
          </ul>
        </li>
      </ul>
       <a  href="cerrarsesion.php"><img class="cerrar" src="img/cerrar_sesion.png" alt="" ></a>
    </div><!-- /.navbar-collapse -->
</nav>

<body>
<label class="fe" left for="">Fecha de HOY: <?php echo date("d/m/Y");?></label>
<br>

<center><h1>-- Carlos Punulef --</h1></center>

<h2 class="hsinreparar">Sin Reparar</h2>
<div id="datos" class="uno table-responsive" > 
</div>

<h2 class="hproc">Equipos En Proceso</h2>
<div  id="datos5" class="siete table-responsive">     
</div>

<h2 class="hcass">Equipos Cass</h2>
<div  id="dato" class="cuatro table-responsive">      
</div>

<h2 class="hcliente">No reparados por Cliente</h2>
<div  id="datos3" class="cinco table-responsive">     
</div>

<h2 class="havisados">Orden de Trabajo Pendiente</h2>
<div  id="muestraOT" class="seis table-responsive">     
</div>

<h2 class="havisados">Orden de Trabajo Cerrada</h2>
<div  id="muestraOTCe" class="seis table-responsive">     
</div>




    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/mostrar.sinreparar.js"></script>
    <script src="js/mostrar.reparado.js"></script>
    <script src="js/mostrar.sinsolucioncass.js"></script>
    <script src="js/mostrar.sinsolucioncliente.js"></script>
    <script src="js/mostrar.equipoProceso.js"></script>
    <script src="js/mostrar.otTecnico.js"></script>
    <script src="js/mostrar.otTecnicoCerrada.js"></script>
</body>

</html>
<?php
}else{
  echo '<script> window.location="index.php";</script>';//esto se podria llamar login.php, me dirije al login
}

?>