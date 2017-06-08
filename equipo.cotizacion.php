<?php
session_start();
include("conexion.php");
if (isset($_SESSION['correo'])) {?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">

  <title>Reparación de Equipo</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="js/bootstrap.min.js">
 <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.js"></script>
 <script>
  $(function(){
    //clona la fila 
    $("#adicional").on('click', function(){
      $("#tabla tbody tr:eq(0)").clone().removeClass('fila-fija').appendTo('#tabla');
    });
    //evento que selecciona la fila y la elimina
    $(document).on("click", "eliminar", function(){
      var parent = $(this).parents().get(0);
      $(parent).remove();
    });
  });
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

<a href="equipo.entrada.php"><button  class="btn btn-default" type="submit"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"> NUEVO</span></button></a>
<a href="equipo.buscar.php"><button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"> BUSCAR</span></button></a>
<button class="btn btn-default" type="button"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"> VOLVER</span></button>
<?php
    $id=$_REQUEST['id'];
    include("conexion.php");
      
      $pedir=mysql_query("SELECT equipo.fecha_creacion, equipo.modelo, equipo.tipo_ingreso, equipo.serie_equipo, equipo.sintoma_cliente, marca.marca, estado.estado, cliente.nombre, cliente.id_cliente FROM equipo INNER JOIN cliente ON equipo.id_cliente=cliente.id_cliente INNER JOIN marca ON equipo.id_marca=marca.id_marca INNER JOIN estado ON equipo.id_estado=estado.id_estado WHERE id_equipo='$id' ")or die(mysql_error());
      $reg=mysql_fetch_array($pedir);
  ?>
<h1>Reparación de Equipo</h1>

<form class="" role="form" action=""  method="POST">

<div class="container"">

<div  class="form-group" >
<label class="fe" for="">Fecha Creación</label>
<input  class="fecha" type="text" name="fecha_creacion" value="<?php echo $reg['fecha_creacion'];?>" id="fecha_creacion" disabled></div>

<div class="form-group" >
<label class="fe" for="">Fecha Modificación</label>
<input class="fecha" type="text" name="fechaPresupuesto" value="<?php echo date("d/m/Y");?>" id="fechaPresupuesto" ></div>

<?php
include("conexion.php");

$consulta2="SELECT * FROM cliente ORDER BY nombre ASC ";
$resultE=mysql_query($consulta2);
?>
<div class="col-xs-5" >
<label for="">Cliente</label>
<select class="form-control" name="id_cliente" id="id_cliente" disabled="">
  <option value="<?php echo $reg['id_cliente'];?>"><?php echo $reg['nombre'];?></option>
 <?php
      while($c=mysql_fetch_array($resultE))
  {?>
      <option value="<?php echo $c['0']?>"><?php echo $c['2'];?></option>
  <?php } ?>
</select>
</div>

<div class="col-xs-5" >
<label for="">Sintoma del Cliente</label>
<textarea rows="4" cols="53" name="sintoma_cliente" id="sintoma_cliente" value="" disabled><?php echo $reg['sintoma_cliente'];?></textarea>
</div>

<div class="col-xs-5" >
<label for="">Serie de Equipo</label>
<input type="text" class="form-control" name="serie_equipo" id="serie_equipo" value="<?php echo $reg['serie_equipo'];?>" required="" disabled></div>

<div class="col-xs-5" >
<label for="">Marca</label>
<input type="text" class="form-control" name="id_marca" id="id_marca" value="<?php echo $reg['marca'];?>" placeholder="Serie del Equipo" required="" disabled></div>


<div class="col-xs-5" >
<label for="">Modelo del Equipo</label>
<input type="text" class="form-control" name="modelo" id="modelo" value="<?php echo $reg['modelo'];?>" placeholder="Modelo del Equipo" required="" disabled></div>


<div class="col-xs-5" >
<label for="">Tipo de Ingreso</label>
<input type="text" class="form-control" name="tipo_ingreso" id="tipo_ingreso" value="<?php echo $reg['tipo_ingreso'];?>"  required="" disabled></div>


<div class="col-xs-5 has-error" >
<label for="">Mano de Obra</label>
<input type="text" class="form-control" name="valorReparacion" id="valorReparacion" value="" placeholder="$" required="" onKeyPress="return SoloNumeros(event)" >
</div>

<div class="col-xs-10  has-error">
<h2 class="bg-primary text-center pad-basic no-btn">Agregar Repuesto</h2>
<table class="table bg-info" id="tabla">
  <tr class="fila-fija">
    <td><input class="form-control" name="repuesto" id="repuesto" type="text"></td>
    <td><input class="form-control" name="repuesto_uno" id="repuesto_uno" type="text"></td>
    <td><input class="form-control" name="repuesto_dos" id="repuesto_dos" type="text"></td>
    <td><input class="form-control" name="repuesto_tres" id="repuesto_tres" type="text"></td>
    <td><input class="form-control" name="repuesto_cuatro" id="repuesto_cuatro" type="text"></td>
    <td><input class="form-control" name="repuesto_cinco" id="repuesto_cinco" type="text"></td>
  </tr>
  <td> <button id="adicional" name="adicional" type="button" class="btn btn-warning">Mas +</button></td>
</table>
</div>

  <div class="col-xs-5 btn-ber">
  <button type="submit" title="Modificar Equipo" class=" btn btn-primary btn-lg btn-block">Modificar</button></div>
  <div class="col-xs-5">
  <button type="reset" title="Cancelar Ingreso" class="btn btn-default btn-lg btn-block">Cancelar</button>
  </div>

</div>
</div>
</form>
</div>

<?php
include("conexion.php");

      
      $id=$_REQUEST['id'];

      $id_equipo=isset($_POST['id_equipo']);
      $id_ot=isset($_POST['id_orden_trabajo']);

      $fechaPresupuesto = isset($_POST['fechaPresupuesto'])? $_POST['fechaPresupuesto']:'';
      $repuesto = isset($_POST['repuesto'])? $_POST['repuesto']:''; 
      $repuesto_uno = isset($_POST['repuesto_uno'])? $_POST['repuesto_uno']:''; 
      $repuesto_dos = isset($_POST['repuesto_dos'])? $_POST['repuesto_dos']:''; 
      $repuesto_tres = isset($_POST['repuesto_tres'])? $_POST['repuesto_tres']:''; 
      $repuesto_cuatro = isset($_POST['repuesto_cuatro'])? $_POST['repuesto_cuatro']:''; 
      $repuesto_cinco = isset($_POST['repuesto_cinco'])? $_POST['repuesto_cinco']:'';    
      $valorReparacion = isset($_POST['valorReparacion'])? $_POST['valorReparacion']:''; 
        
    // conexión a la base de datos de
$dbhandle = mysql_connect($hostname, $username, $password) 
 or die("No se pudo Contactar a Base de Datos MySQL");


// seleccionar una base de datos para trabajar con
$selected = mysql_select_db("bdcass",$dbhandle) 
  or die("No se pudo seleccionar la base de datos CASS");
  

  $sql=mysql_query("UPDATE orden_trabajo SET fechaPresupuesto='$fechaPresupuesto',  repuesto='$repuesto', repuesto_uno='$repuesto_uno', repuesto_dos='$repuesto_dos', repuesto_tres='$repuesto_tres', repuesto_cuatro='$repuesto_cuatro', repuesto_cinco='$repuesto_cinco', valorReparacion='$valorReparacion' WHERE id_equipo='$id'")or die(mysql_error());

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