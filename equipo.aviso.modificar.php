<?php
session_start();
include("conexion.php");
if (isset($_SESSION['correo'])) {?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">

  <title>Modificar Aviso de Equipo</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="js/bootstrap.min.js">
<script>
  $( function() {
    $( "#fecha_aviso1" ).datepicker({
      changeMonth:true,
      changeYear:true,
      showOn: "button",
      buttonImage: "css/images/cale.png",
      buttonImageOnly: true,
      buttonText: "Select date",
      showButtonPanel:true, 

    });
  } );
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
    margin: 10px 500px 20px 400px;
    color: orange;
    border-top: 30px;
    width: 100%;
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


<a href="equipo.aviso.php"><button  class="btn btn-default" type="submit"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"> NUEVO</span></button></a>
<a href="equipo.aviso.modificar.php"><button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"> BUSCAR</span></button></a>
<button class="btn btn-default" type="button"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"> VOLVER</span></button>

<br><br>
<?php


    $id=$_REQUEST['id'];
    include("conexion.php");
      
      $pedir=mysql_query("SELECT equipo_aviso.fecha_aviso, equipo_aviso.medio_aviso, equipo.serie_equipo, equipo.sintoma_cliente, marca.id_marca, marca.marca, cliente.id_cliente, cliente.nombre, cliente.rut, cliente.fono, cliente.correo, cliente.direccion, estado.estado FROM equipo_aviso INNER JOIN equipo ON equipo_aviso.id_equipo=equipo.id_equipo INNER JOIN cliente ON equipo.id_cliente=cliente.id_cliente INNER JOIN marca ON equipo.id_marca=marca.id_marca INNER JOIN estado ON equipo.id_estado=estado.id_estado  WHERE id_equipo_aviso='$id' ")or die(mysql_error());
      $reg=mysql_fetch_array($pedir);
  ?>
<h1>Modificar Aviso de Equipo</h1>

<form class="form-group" action=""  method="POST">

<div class="container">



<div class="col-xs-5" >
<label for="">Serie del Equipo:</label>
<input type="text" class="form-control" id="id_equipo" name="id_equipo" placeholder="Marca" required="" value="<?php echo $reg['serie_equipo'];?>" disabled></div>

<div class="col-xs-5" >
<label for="">Sintoma del Cliente:</label>
<textarea rows="4" cols="53" title="Ingresar el sintoma del cliente" id="sintoma_cliente" name="sintoma_cliente" disabled=""><?php echo $reg['sintoma_cliente'];?></textarea>
</div>


<div class="col-xs-5" >
<label for="">Marca:</label>
<input type="text" class="form-control" id="marca" name="marca" placeholder="Marca" required="" value="<?php echo $reg['marca'];?>" disabled></div>

<div class="col-xs-5" >
<label for="">Estado:</label>
<input type="text" class="form-control" id="estado" name="estado" placeholder="Estado" required="" value="<?php echo $reg['estado'];?>" disabled></div>

<div class="col-xs-5" >
<label for="">Cliente:</label>
<input type="text" class="form-control" name="nombre" id="nombre" maxlength="9" placeholder="Cliente" required="" value="<?php echo $reg['nombre'];?>" disabled></div>


<div class="col-xs-5" >
<label for="">Rut Empresa:</label>
<input type="text" class="form-control" id="rut" name="rut"  placeholder="Rut"  required oninput="checkRut(this)" value="<?php echo $reg['rut'];?>" disabled></div>


<div class="col-xs-5" >
<label for="">Fono/Fax Empresa:</label>
<input type="text" class="form-control" name="fono" id="fono" maxlength="9" placeholder="Fono/Fax" onKeyPress="return SoloNumeros(event)"
  required="" value="<?php echo $reg['fono'];?>" disabled></div>


<div class="col-xs-5" >
<label for="">Correo:</label>
<input type="email" class="form-control" name="correo" id="correo"   placeholder="E-mail" required="" value="<?php echo $reg['correo'];?>" disabled></div>

<div class="col-xs-5" >
<label for="">Direccion:</label>
<input type="text" class="form-control" id="direccion" name="direccion" placeholder="Direccion" required="" value="<?php echo $reg['direccion'];?>" disabled></div>


<div class="col-xs-5" >
<label class="fe" for="">Fecha Aviso 1</label>
<input class="fecha" type="text" name="fecha_aviso" id="fecha_aviso" value="<?php echo $reg['fecha_aviso'];?>" disabled>
<br>
<label for="">Medio de Aviso</label>
<select class="form-control" name="medio_aviso" id="medio_aviso" value="" disabled>
<option value="<?php echo $reg['medio_aviso'];?>"><?php echo $reg['medio_aviso'];?></option>
  <option value="TELEFONO">TELEFONO</option>
  <option value="CORREO">CORREO</option>
  <option value="DOMICILIO">DOMICILIO</option>
</select>
</div>

<div class="col-xs-5" >
<label class="fe" for="">Fecha Aviso 2</label>
<input class="fecha" type="text" name="fecha_aviso1" id="fecha_aviso1" value="<?php echo date("d/m/Y"); ?>" >
<br>
<label for="">Medio de Aviso</label>
<select class="form-control" name="medio_aviso1" id="medio_aviso1" >
<option value="">---Selecionar Medio de Aviso---</option>
  <option value="TELEFONO">TELEFONO</option>
  <option value="CORREO">CORREO</option>
  <option value="DOMICILIO">DOMICILIO</option>
</select></div>


<div class="col-xs-5" >
<label class="fe" for="">Fecha Aviso 3</label>
<input class="fecha" type="text" name="fecha_aviso2" id="fecha_aviso2" value="<?php echo date("d/m/Y"); ?>" >
<br>
<label for="">Medio de Aviso</label>
<select class="form-control" name="medio_aviso2" id="medio_aviso2">
<option value="">---Selecionar Medio de Aviso---</option>
  <option value="TELEFONO">TELEFONO</option>
  <option value="CORREO">CORREO</option>
  <option value="DOMICILIO">DOMICILIO</option>
</select>
</div>


  <div class="col-xs-5">
  <button type="submit" title="Modificar Equipo" class=" btn btn-primary btn-lg btn-block">Modificar</button>
  <button type="reset" title="Cancelar Ingreso" class="btn btn-default btn-lg btn-block">Cancelar</button>
  </div>

</div>
</form>
</div>

<?php
include("conexion.php");
     
      $id=$_REQUEST['id'];          
      $fecha_aviso1 = isset($_POST['fecha_aviso1'])? $_POST['fecha_aviso1']:''; 
      $medio_aviso1 = isset($_POST['medio_aviso1'])? $_POST['medio_aviso1']:''; 
    
    // conexión a la base de datos de
$dbhandle = mysql_connect($hostname, $username, $password) 
 or die("No se pudo Contactar a Base de Datos MySQL");


// seleccionar una base de datos para trabajar con
$selected = mysql_select_db("bdcass",$dbhandle) 
  or die("No se pudo seleccionar la base de datos CASS");

  
$sql=mysql_query("SELECT fecha_aviso2 FROM equipo_aviso WHERE fecha_aviso2>0");
if(mysql_num_rows($sql)>0) 
{ 
echo " 
<script> alert('Ya se Aviso demasiadas Veces!!') </script>
<p class='avisos'><a href='javascript:history.go(-1)' class='clase1 btn btn-danger'>Volver atrás</a></p> 
"; 
}
else
{
$consulta=mysql_query("UPDATE equipo_aviso SET fecha_aviso1='$fecha_aviso1', medio_aviso1='$medio_aviso1' WHERE id_equipo_aviso='$id'")or die(mysql_errno());
 echo '<script> alert("Aviso Registrado Exitosamente"); </script>';
}


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