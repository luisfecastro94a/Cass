<?php 
include("conexion.php");
 ?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Highcharts Example</title>
            <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../js/bootstrap.min.js">
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
.fe{
 margin: 10px 20px 10px 800px;
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
       <img class="logo" src="../img/cass_logo.png" alt="">
    </div>
      
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
       <li><a  href="../inicio.php">Inicio</a></li>
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Laboratorio <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="../cliente.php">Ingresar Cliente</a></li>
            <li><a href="../cliente.encargado.php">Ingresar Encargado</a></li>
            <li><a href="../garantia.php">Ingreso Garantia</a></li>
            <li><a href="../presupuesto.php">Presupuesto</a></li>
            <li><a href="../cotizacion.php">Cotización</a></li>
            <li><a href="../repuesto.php">Repuesto</a></li>
            <li><a href="../reportes/reporte1.php">Resumen Venta</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Equipo<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="../equipo.entrada.php">Entrada Equipo</a></li>
            <li><a href="../equipo.salida.php">Salida Equipo</a></li>
            <li><a href="../equipo.aviso.php">Avisos reparación</a></li>
          </ul>
        </li>

        <li><a  href="#">Contratos</a></li>
        <li><a  href="#">Terreno</a></li>
        <li><a  href="#">Soporte Instalaciones</a></li>
        <li><a  href="../repuesto.php">Repuestos</a></li>

        <li class="dropdown">
           <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Orden de Trabajo<span class="caret"></span></a>
               <ul class="dropdown-menu">
                     <li><a  href="../ot.php" title="Generar OT a un Técnico">Orden de Trabajo</a></li>
                     <li><a  href="../proforma.php" title="Generar proforma para cerrar la OT">Proforma (cerrar ot)</a></li>
                     <li><a  href="../factura.php" title="Generar factura para cerrar Proforma">Factura</a></li>
               </ul>
        </li>

         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mantenedor<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="../ciudad.php">Ciudad</a></li>
            <li><a href="../usuario.php">Usuario</a></li>
             <li><a href="../proveedor.php">Proveedor</a></li>
            <li><a href="../uf.php">Uf</a></li>
            <li><a href="../comision.php">Comisiones</a></li>
            <li><a href="../periodo.php">Periodo</a></li>
            <li><a href="../marca.php">Marca</a></li>
            <li><a href="../estado.php">Estado</a></li>
            <li><a href="../parametro.php">Parametro</a></li>
            <li><a href="../parametro.php">estadisticas</a></li>
            <li><a href="../area.php">Area</a></li>
          </ul>
        </li>
      </ul>
       <a  href="../cerrarsesion.php"><img class="cerrar" src="../img/cerrar_sesion.png" alt="" ></a>
    </div><!-- /.navbar-collapse -->
</nav>
    <body>

<a href="../iniciotecnico.php"><button class="btn btn-default" type="button"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"> VOLVER</span></button></a>

    <script src="hc/code/highcharts.js"></script>
    <script src="hc/code/modules/exporting.js"></script>    
    <script src="../js/bootstrap.min.js"></script>

<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>



        <script type="text/javascript">

Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Resumen de Ordenes de Trabajo'
    },
    subtitle: {
        text: 'Grafico Mensual'
    },
    xAxis: {
        categories: [
      <?php 
$sql =mysql_query("SELECT fecha_OT, valorCotizacionOT FROM orden_trabajo ORDER BY valorCotizacionOT DESC ");
    while ($res=mysql_fetch_array($sql)) {
 ?>
        ['<?php echo $res['fecha_OT']?>'],
<?php 
}
 ?>
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Monto a Alcanzar'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} </b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Ventas',
        data: [
         <?php 
$sql1 =mysql_query("SELECT  valorCotizacionOT FROM orden_trabajo ORDER BY valorCotizacionOT DESC ");
    while ($res1=mysql_fetch_array($sql1)) {
 ?>
        [<?php echo $res1['valorCotizacionOT']?>],
<?php 
}
 ?>     
        ]

    }]
});
        </script>

    </body>
</html>