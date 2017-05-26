<?php
session_start();
include("conexion.php");
if (isset($_SESSION['correo'])) {?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">


	<title>Orden de Trabajo</title>
   <script language="JavaScript" type="text/javascript" src="js/ajax.js"></script>
	<link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/jquery-ui.min.css">
  <link rel="stylesheet" href="css/calendario.css">
  <link rel="stylesheet" href="js/bootstrap.min.js">
  <link href="css/jqueryui.css" type="text/css" rel="stylesheet"/>
  <script language="JavaScript" type="text/javascript" src="js/calendario.js"></script>
  <!--link para el estilo del calendario en jquery-->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  
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
            <li><a href="garantia.php">Ingreso Garantia</a></li>
            <li><a href="presupuesto.php">Presupuesto</a></li>
            <li><a href="cotizacion.php">Cotización</a></li>
            <li><a href="repuesto.php">Repuesto</a></li>
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
        <li><a  href="repuesto.php">Repuestos</a></li>

        <li class="dropdown">
           <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Orden de Trabajo<span class="caret"></span></a>
               <ul class="dropdown-menu">
                     <li><a  href="ot.php" title="Generar OT a un Técnico">Orden de Trabajo</a></li>
                     <li><a  href="proforma.php" title="Generar proforma para cerrar la OT">Proforma (cerrar ot)</a></li>
                     <li><a  href="factura.php" title="Generar factura para cerrar Proforma">Factura</a></li>
               </ul>
        </li>

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


<a href="ot.php"><button  class="btn btn-default" type="submit"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"> NUEVO</span></button></a>
<a href="ot.buscar.php"><button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"> BUSCAR</span></button></a>
<button class="btn btn-default" type="button"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"> VOLVER</span></button>

<?php
    $id=$_REQUEST['id'];
    include("conexion.php");

      $consulta=mysql_query("SELECT  orden_trabajo.correlativo_ot, orden_trabajo.fecha_creacion, orden_trabajo.motivo, orden_trabajo.comentario, orden_trabajo.valorReparacion, orden_trabajo.fechaPresupuesto, orden_trabajo.hora_llegada, orden_trabajo.hora_salida, ot_tipo.nombreTipo, cliente.nombre, cliente.rut,cliente.fono, cliente.correo, cliente.direccion, ciudad.nombrec, cliente_encargado.nombreE, equipo.serie_equipo, equipo.sintoma_cliente, marca.marca, estado.estado, cotizacion.correlativo_cotizacion, cotizacion.fecha_cotizacion, cotizacion.valorRepuesto, cotizacion.valorCotizacion, usuario.nombreUsuario, area.area, estado.estado, usuario.id_usuario, estado.id_estado FROM orden_trabajo INNER JOIN cliente ON orden_trabajo.id_cliente=cliente.id_cliente INNER JOIN cliente_encargado ON cliente.id_cliente=cliente_encargado.id_cliente INNER JOIN equipo ON orden_trabajo.id_equipo=equipo.id_equipo INNER JOIN marca ON equipo.id_marca=marca.id_marca INNER JOIN estado ON equipo.id_estado=estado.id_estado INNER JOIN ciudad ON cliente.id_ciudad=ciudad.id_ciudad INNER JOIN cotizacion ON orden_trabajo.id_orden_trabajo=cotizacion.id_orden_trabajo INNER JOIN ot_tipo ON orden_trabajo.id_ot_tipo=ot_tipo.id_ot_tipo INNER JOIN usuario ON orden_trabajo.id_usuario=usuario.id_usuario INNER JOIN area ON orden_trabajo.id_area=area.id_area WHERE correlativo_ot='$id'")or die(mysql_error());
       $reg=mysql_fetch_array($consulta);
  ?>


<h1> Crear Orden de Trabajo</h1>

<form class="form-group" action=""  method="POST" >

<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Orden de Trabajo
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">

      <div class="container">

<!--INICIO DE TODO FORMULARIO-->


<div class="col-xs-5">
<label for="">Numero de Orden de Trabajo</label>
<input type="text" class="form-control" id="correlativo_ot" value="<?php echo $reg['correlativo_ot'];?>" name="correlativo_ot"  ></div>

<div class="col-xs-2">
<label for="">Hora Llegada</label>
<input type="text" class="form-control" id="hora_llegada" value="<?php echo $reg['hora_llegada'];?>" name="hora_llegada"  ></div>

<div class="col-xs-2">
<label for="">Hora Salida</label>
<input type="text" class="form-control" id="hora_salida" value="<?php echo $reg['hora_salida'];?>" name="hora_salida"  ></div>
</br>
<div class="col-xs-5">
<label class="fe" for="">Fecha Creación<input class="" value="<?php echo $reg['fecha_creacion'];?>" type="text" name="fecha_creacion" id="fecha_creacion"></label></div><!--fecha con jquey-->

<?php
include("conexion.php");


$consulta1="SELECT * FROM usuario";
$asig=mysql_query($consulta1);

?>
<div class="col-xs-5" >
<label for="">Asigar a Técnico</label>
<select id="id_usuario" class="form-control" name="id_usuario" > 
<option value="<?php echo $reg['id_usuario'];?>" selected=""><?php echo $reg['nombreUsuario']?></option>
 <?php
      while($reci=mysql_fetch_array($asig))
  {?>
      <option value="<?php echo $reci['0'];?>"><?php echo $reci['3'];?></option>
  <?php } ?>
</select>
</div>

<?php
include("conexion.php");


$consulta2="SELECT * FROM ot_tipo";
$asig1=mysql_query($consulta2);

?>
<div class="col-xs-5" >
<label for="">Tipo de OT</label>
<select id="id_ot_tipo" class="form-control" name="id_ot_tipo" > 
<option value="" selected=""><?php echo $reg['nombreTipo']?></option>
 <?php
      while($f=mysql_fetch_array($asig1))
  {?>
      <option value="<?php echo $f['0']?>"><?php echo $f['1']?></option>
  <?php } ?>
</select>
</div>

<?php
include("conexion.php");


$consulta3="SELECT * FROM area";
$asig2=mysql_query($consulta3);

?>
<div class="col-xs-5" >
<label for="">Area</label>
<select id="id_area" class="form-control" name="id_area" > 
<option value="<?php echo $fi['0']?>" selected=""><?php echo $reg['area']?></option>
 <?php
      while($fi=mysql_fetch_array($asig2))
  {?>
      <option value="<?php echo $fi['0']?>"><?php echo $fi['1'];?></option>
  <?php } ?>
</select>
</div>


<?php
include("conexion.php");


$consulta4="SELECT * FROM estado WHERE relacion='ot'";
$asig3=mysql_query($consulta4);

?>
<div class="col-xs-5" >
<label for="">Estado</label>
<select id="id_estado" class="form-control" name="id_estado" > 
<option value="<?php echo $reg['id_estado'];?>" selected=""><?php echo $reg['estado'];?></option>
 <?php
      while($fil=mysql_fetch_array($asig3))
  {?>
      <option value="<?php echo $fil['0'];?>"><?php echo $fil['1'];?></option>
  <?php } ?>
</select>
</div>

  
        </div>
    </div>
  </div>
<!--DATOS DEL CLIENTE-->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Datos del Cliente
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">

      <!--aqui va formulario de div-->
      


<div class="col-xs-5" >
<label for="">Cliente</label>
<input type="text" class="form-control" name="nombre" id="nombre" maxlength="9"  
  required="" value="<?php echo $reg['nombre'];?>" ></div>


<div class="col-xs-5" >
<label for="">Rut Empresa:</label>
<input type="text" class="form-control" id="rut" name="rut"  placeholder="Rut"  required oninput="checkRut(this)" value="<?php echo $reg['rut'];?>" ></div>


<div class="col-xs-5" >
<label for="">Fono/Fax Empresa:</label>
<input type="text" class="form-control" name="fono" id="fono" maxlength="9" placeholder="Fono/Fax" onKeyPress="return SoloNumeros(event)"
  required="" value="<?php echo $reg['fono'];?>" ></div>


<div class="col-xs-5" >
<label for="">Correo:</label>
<input type="email" class="form-control" name="correo" id="correo"   placeholder="E-mail" required="" value="<?php echo $reg['correo'];?>" ></div>

<div class="col-xs-5" >
<label for="">Direccion:</label>
<input type="text" class="form-control" id="direccion" name="direccion" placeholder="Direccion" required="" value="<?php echo $reg['direccion'];?>"></div>

<div class="col-xs-5" >
<label for="">Ciudad:</label>
<input type="text" class="form-control" id="nombrec" name="nombrec" placeholder="Ciudad" required="" value="<?php echo $reg['nombrec'];?>"></div>
<!--Consulta para buscar al Encargado del Cliente-->

<div class="col-xs-5" >
<label for="">Encargado Cliente:</label>
<input type="text" class="form-control" id="nombreE" name="nombreE"  required="" value="<?php echo $reg['nombreE'];?>"></div>


      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Datos del Equipo
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">

      <!--Aqui va los datos del EQUIPO-->



<div class="col-xs-5" >
<label for="">Serie del Equipo</label>
<input type="text" class="form-control" id="serie_equipo" name="serie_equipo"  required="" value="<?php echo $reg['serie_equipo'];?>"></div>


<div class="col-xs-5" >
<label for="">Sintoma del Cliente</label>
<textarea rows="4" cols="53" title="Ingresar el sintoma del cliente" id="sintoma_cliente" name="sintoma_cliente"><?php echo $reg['sintoma_cliente'];?></textarea>
</div>


<div class="col-xs-5" >
<label for="">Marca</label>
<input type="text" class="form-control" id="marca" name="marca" placeholder="Marca" required="" value="<?php echo $reg['marca'];?>"></div>

<div class="col-xs-5" >
<label for="">Estado</label>
<input type="text" class="form-control" id="estado" name="estado" placeholder="Estado" required="" value="<?php echo $reg['estado'];?>"></div>


      </div>
    </div>
  </div>




    <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingFour">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
         Causas de Visita
        </a>
      </h4>
    </div>
    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
      <div class="panel-body">
     
<div class="col-xs-5" >
<label for="">Motivo</label>
<input type="text" class="form-control" id="motivo" name="motivo" placeholder="Motivo de la Visita"  value="<?php echo $reg['motivo'];?>"></div>

<div class="col-xs-5" >
<label for="">Comentario</label>
<textarea name="comentario" id="comentario" cols="53"  rows="4"><?php echo $reg['comentario'];?></textarea>
</div>
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingFive">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
         Presupuesto
        </a>
      </h4>
    </div>
    <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
      <div class="panel-body">
        <!--INICIO DEL PRESUPUESTO-->

        <div class="col-xs-5" >
          <label for="">Valor por Reparación</label>
          <input type="text" class="form-control" id="valorReparacion" required="" value="<?php echo $reg['valorReparacion'];?>" onKeyPress="return SoloNumeros(event)
          " name="valorReparacion" ></div>

<div class="col-xs-5">
<label class="fe" for="">Fecha Presupuesto<input class="" value="<?php echo date("d/m/Y");?>" type="text" name="fechaPresupuesto" id="fechaPresupuesto"></label></div><!--fecha con jquey-->

      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingSix">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
         Cotización
        </a>
      </h4>
    </div>
    <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
      <div class="panel-body">

<div class="col-xs-5" >
          <label for="">Numero de Cotización</label>
          <input type="text" class="form-control" id="correlativo_cotizacion" value="<?php echo $reg['correlativo_cotizacion'];?>" onKeyPress="return SoloNumeros(event)" name="correlativo_cotizacion" ></div>

         <div class="col-xs-5">
<label class="fe" for="">Fecha Cotización<input class="" value="<?php echo $reg['fecha_cotizacion'];?>" type="text" name="fecha_cotizacion" id="fecha_cotizacion"></label></div><!--fecha con jquey-->

 <div class="col-xs-5" >
          <label for="">Valor por Repuesto</label>
          <input type="text" class="form-control" id="valorRepuestoOT" value="<?php echo $reg['valorRepuesto'];?>" onKeyPress="return SoloNumeros(event)" name="valorRepuestoOT" ></div>
 
 <div class="col-xs-5" >
          <label for="">Valor Total Cotización</label>
          <input type="text" class="form-control" id="valorCotizacionOT" value="<?php echo $reg['valorCotizacion'];?>" onKeyPress="return SoloNumeros(event)" name="valorCotizacionOT" ></div>

      </div>
    </div>
  </div>

</div><!--el segundo div del acordion-->
</div><!--el primer div del acordion-->

  <div class="col-xs-5">
  <button type="submit" id="enviar" onclick="alert('¡Modificación realizada con Exito :) !!')" name="enviar" class="btn btn-primary btn-lg btn-block">Modificar</button></div>
  <div class="col-xs-5">
  <button type="reset" class="btn btn-default btn-lg btn-block">Cancelar</button>
  </div>
  <br>
  <br>
  <br>

</div><!--div contenedor-->
  
</form>
</div>
    
<?php
include("conexion.php");

      $id=$_REQUEST['id'];  
   /*   
   esto igual funciona 
      $id_usuario = @$_POST['id_usuario']; 
      $id_estado = @$_POST['id_estado']; 
      $correlativo_cotizacion = @$_POST['correlativo_cotizacion']; 
      $valorReparacion = @$_POST['valorReparacion']; 
      $fechaPresupuesto = @$_POST['fechaPresupuesto']; 
      $valorRepuestoOT = @$_POST['valorRepuestoOT']; 
      $valorCotizacionOT = @$_POST['valorCotizacionOT'];*/

      $id_usuario = isset($_POST['id_usuario']) ? $_POST['id_usuario']: ''; 
      $id_estado = isset($_POST['id_estado']) ? $_POST['id_estado']: '';    
      $correlativo_cotizacion = isset($_POST['correlativo_cotizacion']) ? $_POST['correlativo_cotizacion']: ''; 
      $valorReparacion = isset($_POST['valorReparacion']) ? $_POST['valorReparacion']: '';
      $fechaPresupuesto = isset($_POST['fechaPresupuesto']) ? $_POST['fechaPresupuesto']: '';
      $valorRepuestoOT = isset($_POST['valorRepuestoOT']) ? $_POST['valorRepuestoOT']: '';
      $valorCotizacionOT = isset($_POST['valorCotizacionOT']) ? $_POST['valorCotizacionOT']: '';
      

  $sql=mysql_query("UPDATE `orden_trabajo` SET `id_usuario`='$id_usuario', `id_estado`='$id_estado', `correlativo_cotizacion`='$correlativo_cotizacion', `valorReparacion`='$valorReparacion', `fechaPresupuesto`='$fechaPresupuesto', `valorRepuestoOT`='$valorRepuestoOT', `valorCotizacionOT`='$valorCotizacionOT'  WHERE `id_orden_trabajo`='$id'");

?>


<?php
// close connection; 
mysql_close();
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
    <script src="js/autollenado.js" ></script>
    <script src="listarencargado.js"></script>
    <script src="listaequipos.js"></script>
    <script src="js/autollenadoequipo.js"></script>

<footer></footer><!--antes de que se cierre el body se agrega el footer o pie de pagina-->
</body>

</html>
<?php
}else{
  echo '<script> window.location="index.php";</script>';
}

?>
