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
  });
 </script>
 <script>
  function sumar(){
    a=document.presupuesto.valor_mano.value;
    b=document.presupuesto.valor_mano1.value;
    c=document.presupuesto.valor_mano2.value;
    d=document.presupuesto.valor_mano3.value;
    e=document.presupuesto.valor_mano4.value;
    f=document.presupuesto.valor_mano5.value;
    g=document.presupuesto.valor_mano6.value;
    h=document.presupuesto.valorReparacion.value;

    h=parseInt(a)+parseInt(b)+parseInt(c)+parseInt(d)+parseInt(e)+parseInt(f)+parseInt(g);
    document.presupuesto.valorReparacion.value=h;
  }
</script> 
<script >
    function habilita(){
        $(".inputText").removeAttr("disabled");
    }
    function deshabilita(){
        $(".inputText").attr("disabled","disabled");
    }
        function habilitar(){
        $(".inputText1").removeAttr("disabled");
    }
    function deshabilitar(){
        $(".inputText1").attr("disabled","disabled");
    }
    function habilitar1(){
        $(".inputText2").removeAttr("disabled");
    }
    function deshabilitar1(){
        $(".inputText2").attr("disabled","disabled");
    }
    function habilitar2(){
        $(".inputText3").removeAttr("disabled");
    }
    function deshabilitar2(){
        $(".inputText3").attr("disabled","disabled");
    }
    function habilitar3(){
        $(".inputText4").removeAttr("disabled");
    }
    function deshabilitar3(){
        $(".inputText4").attr("disabled","disabled");
    }
    function habilitar4(){
        $(".inputText5").removeAttr("disabled");
    }
    function deshabilitar4(){
        $(".inputText5").attr("disabled","disabled");
    }
    function habilitar5(){
        $(".inputText6").removeAttr("disabled");
    }
    function deshabilitar5(){
        $(".inputText6").attr("disabled","disabled");
    }
        function habilitar6(){
        $(".inputText7").removeAttr("disabled");
    }
        function habilitar7(){
        $(".inputText8").removeAttr("disabled");
    }
        function habilitar8(){
        $(".inputText9").removeAttr("disabled");
    }
        function habilitar9(){
        $(".inputText10").removeAttr("disabled");
    }
        function habilitar10(){
        $(".inputText11").removeAttr("disabled");
    }
        function habilitar11(){
        $(".inputText12").removeAttr("disabled");
    }
        function habilitar12(){
        $(".inputText13").removeAttr("disabled");
    }
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
.textareaR {
  width:350px;
  height:70px;
  max-width: 400px;
  max-height: 80px;
  border: 2px 
  solid #990000;
}
.lahade {
  color: #D23F61;
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

<form class="" role="form" action="" name="presupuesto" method="POST">

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
<input type="text" class="form-control"  name="serie_equipo" id="serie_equipo" value="<?php echo $reg['serie_equipo'];?>" required="" disabled></div>
<div class="col-xs-5" >
<label for="">Marca</label>
<input type="text" class="form-control" name="id_marca" id="id_marca" value="<?php echo $reg['marca'];?>" placeholder="Serie del Equipo" required="" disabled></div>
<div class="col-xs-5" >
<label for="">Modelo del Equipo</label>
<input type="text" class="form-control" name="modelo" id="modelo" value="<?php echo $reg['modelo'];?>" placeholder="Modelo del Equipo" required="" disabled></div>
<div class="col-xs-5" >
<label for="">Tipo de Ingreso</label>
<input type="text" class="form-control" name="tipo_ingreso" id="tipo_ingreso" value="<?php echo $reg['tipo_ingreso'];?>"  required="" disabled></div>

<div class="col-xs-5">
<label for="">Ingreso Mano de Obra</label>
<!-- Large modal -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target=".bs-example-modal-lg"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span> Ingresar Mano de Obra</button>
</div>

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Mano de Obra</h4>
      </div>
      <div class="modal-body">  
           <div class="col-xs-2">      
            <label for="recipient-name" class="control-label">Habilitar</label>
             <input type="radio" name="rad" value="O" onclick="habilitar6()">
          </div>
          <div class="col-xs-5">      
            <label for="recipient-name" class="control-label">Glosa</label>
            <input type="text" class="inputText7 form-control" disabled id="" name="manoObra">
          </div>
          <div class="col-xs-5">
            <label for="recipient-name" class="control-label">Valor </label>
            <input type="text" class="inputText7 form-control" disabled onkeyup="sumar()" id="valor_mano" name="valor_mano" value="0">
          </div>
            <div class="col-xs-2">      
            <label for="recipient-name" class="control-label">Habilitar</label>
             <input type="radio" name="rad" value="O" onclick="habilitar7()">
          </div>
          <div class="col-xs-5">
            <label for="recipient-name" class="control-label">Glosa</label>
            <input type="text" class="inputText8 form-control" id="" disabled="" name="manoObra1">
          </div>
            <div class="col-xs-5">
            <label for="recipient-name" class="control-label">Valor </label>
            <input type="text" class="inputText8 form-control" disabled="" onkeyup="sumar()" id="valor_mano1" name="valor_mano1" value="0">
          </div>
          <div class="col-xs-2">      
            <label for="recipient-name" class="control-label">Habilitar</label>
             <input type="radio" name="rad" value="O" onclick="habilitar8()">
          </div>
          <div class="col-xs-5">
            <label for="recipient-name" class="control-label">Glosa</label>
            <input type="text" class="inputText9 form-control" id="" disabled="" name="manoObra2">
          </div>
            <div class="col-xs-5">
            <label for="recipient-name" class="control-label">Valor </label>
            <input type="text" class="inputText9 form-control" disabled="" onkeyup="sumar()" id="valor_mano2" name="valor_mano2" value="0">
          </div>
          <div class="col-xs-2">      
            <label for="recipient-name" class="control-label">Habilitar</label>
             <input type="radio" name="rad" value="O" onclick="habilitar9()">
          </div>
          <div class="col-xs-5">
            <label for="recipient-name" class="control-label">Glosa</label>
            <input type="text" class="inputText10 form-control" id="" disabled="" name="manoObra3">
          </div>
            <div class="col-xs-5">
            <label for="recipient-name" class="control-label">Valor </label>
            <input type="text" class="inputText10 form-control" disabled="" onkeyup="sumar()" id="valor_mano3" name="valor_mano3" value="0">
          </div>
          <div class="col-xs-2">      
            <label for="recipient-name" class="control-label">Habilitar</label>
             <input type="radio" name="rad" value="O" onclick="habilitar10()">
          </div>
          <div class="col-xs-5">
            <label for="recipient-name" class="control-label">Glosa</label>
            <input type="text" class="inputText11 form-control" id="" disabled="" name="manoObra4">
          </div>
            <div class="col-xs-5">
            <label for="recipient-name" class="control-label">Valor </label>
            <input type="text" class="inputText11 form-control" disabled="" onkeyup="sumar()" id="valor_mano4" name="valor_mano4" value="0">
          </div>
          <div class="col-xs-2">      
            <label for="recipient-name" class="control-label">Habilitar</label>
             <input type="radio" name="rad" value="O" onclick="habilitar11()">
          </div>
          <div class="col-xs-5">
            <label for="recipient-name" class="control-label">Glosa</label>
            <input type="text" class="inputText12 form-control" id="" disabled="" name="manoObra5">
          </div>
            <div class="col-xs-5">
            <label for="recipient-name" class="control-label">Valor </label>
            <input type="text" class="inputText12 form-control"  disabled="" onkeyup="sumar()" id="valor_mano5" name="valor_mano5" value="0">
          </div>
          <div class="col-xs-2">      
            <label for="recipient-name" class="control-label">Habilitar</label>
             <input type="radio" name="rad" value="O" onclick="habilitar12()">
          </div>
          <div class="col-xs-5">
            <label for="recipient-name" class="control-label">Glosa</label>
            <input type="text" class="inputText13 form-control" id="" disabled="" name="manoObra6">
          </div>
            <div class="col-xs-5">
            <label for="recipient-name" class="control-label">Valor </label>
            <input type="text" class="inputText13 form-control" disabled="" onkeyup="sumar()" id="valor_mano6" name="valor_mano6" value="0">
          </div> 
         <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
      </div>                                            
      </div>
    </div>
  </div>
</div>


<div class="col-xs-5 has-error" >
<label for="">Valor de Reparación</label>
<input type="text" class="form-control" onkeyup="sumar()" name="valorReparacion" id="valorReparacion" value="" placeholder="$" required="" onKeyPress="return SoloNumeros(event)" readonly="">
</div>

<div class="col-xs-10 has-error">
<h2 class="bg-primary text-center pad-basic no-btn">Agregar Repuesto</h2>
<table class="table bg-info" id="tabla">
  <tr class="fila-fija">
  <td>N° 1</td>
  <td>
    <label for="" class="lahade">Habilitar</label>
    <input type="radio" name="rad" value="O" onclick="habilita()">
  </td>
  <td>
    <label for="" >Desabilitar</label>
    <input type="radio" name="rad" value="F" onclick="deshabilita()">
  </td>
    <td>
    <label for="">Part Number</label>
    <input class="inputText form-control" name="n_partner" id="" type="text" disabled>
    </td>
    <td>
    <label for="">Marca</label>
    <input class="inputText form-control" name="marca" id="" type="text" disabled>
    </td>
    <td>
    <label  for="default">Descripción</label>
    <textarea class="inputText textareaR" name="comentarioo" id="" cols="30" rows="3" disabled></textarea>
    </td>
  </tr>
   <tr class="fila-fija">
   <td>N° 2</td>
     <td>
    <label for="" class="lahade">Habilitar</label>
    <input type="radio" name="rad" value="O" onclick="habilitar()">
  </td>
  <td>
    <label for="" >Desabilitar</label>
    <input type="radio" name="rad" value="F" onclick="deshabilitar()">
  </td>
    <td>
    <label for="">Part Number</label>
    <input class="inputText1 form-control" name="n_partner1" id="" type="text" disabled>
    </td>
    <td>
    <label for="">Marca</label>
    <input class="inputText1 form-control" name="marca1" id="" type="text" disabled>
    </td>
    <td>
    <label  for="default">Descripción</label>
    <textarea class="inputText1 textareaR" name="comentario1" id="" cols="30" rows="3" disabled></textarea>
    </td>
  </tr>
   <tr class="fila-fija">
   <td>N° 3</td>
     <td>
    <label for="" class="lahade">Habilitar</label>
    <input type="radio" name="rad" value="O" onclick="habilitar1()">
  </td>
  <td>
    <label for="" >Desabilitar</label>
    <input type="radio" name="rad" value="F" onclick="deshabilitar1()">
  </td>
    <td>
    <label for="">Part Number</label>
    <input class="inputText2 form-control" name="n_partner2" id="" type="text" disabled>
    </td>
    <td>
    <label for="">Marca</label>
    <input class="inputText2 form-control" name="marca2" id="" type="text" disabled>
    </td>
    <td>
    <label  for="default">Descripción</label>
    <textarea class="inputText2 textareaR" name="comentario2" id="" cols="30" rows="3" disabled></textarea>
    </td>
  </tr>
   <tr class="fila-fija">
   <td>N° 4</td>
     <td>
    <label for="" class="lahade">Habilitar</label>
    <input type="radio" name="rad" value="O" onclick="habilitar2()">
  </td>
  <td>
    <label for="" >Desabilitar</label>
    <input type="radio" name="rad" value="F" onclick="deshabilitar2()">
  </td>
    <td>
    <label for="">Part Number</label>
    <input class="inputText3 form-control" name="n_partner3" id="" type="text" disabled>
    </td>
    <td>
    <label for="">Marca</label>
    <input class="inputText3 form-control" name="marca3" id="" type="text" disabled>
    </td>
    <td>
    <label  for="default">Descripción</label>
    <textarea class="inputText3 textareaR" name="comentario3" id="" cols="30" rows="3" disabled></textarea>
    </td>
  </tr>
   <tr class="fila-fija">
   <td>N° 5</td>
     <td>
    <label for="" class="lahade">Habilitar</label>
    <input type="radio" name="rad" value="O" onclick="habilitar3()">
  </td>
  <td>
    <label for="" >Desabilitar</label>
    <input type="radio" name="rad" value="F" onclick="deshabilitar3()">
  </td>
    <td>
    <label for="">Part Number</label>
    <input class="inputText4 form-control" name="n_partner4" id="" type="text" disabled>
    </td>
    <td>
    <label for="">Marca</label>
    <input class="inputText4 form-control" name="marca4" id="" type="text" disabled>
    </td>
    <td>
    <label  for="default">Descripción</label>
    <textarea class="inputText4 textareaR" name="comentario4" id="" cols="30" rows="3" disabled></textarea>
    </td>
  </tr>
   <tr class="fila-fija">
   <td>N° 6</td>
     <td>
    <label for="" class="lahade">Habilitar</label>
    <input type="radio" name="rad" value="O" onclick="habilitar4()">
  </td>
  <td>
    <label for="" >Desabilitar</label>
    <input type="radio" name="rad" value="F" onclick="deshabilitar4()">
  </td>
    <td>
    <label for="">Part Number</label>
    <input class="inputText5 form-control" name="n_partner5" id="" type="text" disabled>
    </td>
    <td>
    <label for="">Marca</label>
    <input class="inputText5 form-control" name="marca5" id="" type="text" disabled>
    </td>
    <td>
    <label  for="default">Descripción</label>
    <textarea class="inputText5 textareaR" name="comentario5" id="" cols="30" rows="3" disabled></textarea>
    </td>
  </tr>
   <tr class="fila-fija">
   <td>N° 7</td>
     <td>
    <label for="" class="lahade">Habilitar</label>
    <input type="radio" name="rad" value="O" onclick="habilitar5()">
  </td>
  <td>
    <label for="" >Desabilitar</label>
    <input type="radio" name="rad" value="F" onclick="deshabilitar5()">
  </td>
    <td>
    <label for="">Part Number</label>
    <input class="inputText6 form-control" name="n_partner6" id="" type="text" disabled>
    </td>
    <td>
    <label for="">Marca</label>
    <input class="inputText6 form-control" name="marca6" id="" type="text" disabled>
    </td>
    <td>
    <label  for="default">Descripción</label>
    <textarea class="inputText6 textareaR" name="comentario6" id="" cols="30" rows="3" disabled></textarea>
    </td>
  </tr>
<td> <button id="adicional" name="adicional" type="button" class="btn btn-warning">Mas +</button></td>
</table>
</div>

  <div class="col-xs-5 btn-ber">
  <button type="submit" title="Modificar Equipo" class=" btn btn-primary btn-lg btn-block"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Cerrar Presupuesto</button></div>
  <div class="col-xs-5">
  <button type="reset" title="Cancelar Ingreso" class="btn btn-default btn-lg btn-block"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Cancelar</button>
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
      $valorReparacion = isset($_POST['valorReparacion']) ? $_POST['valorReparacion']: '';
      $partner = isset($_POST['n_partner']) ? $_POST['n_partner']: '';
      $marca = isset($_POST['marca']) ? $_POST['marca']: '';
      $comentario = isset($_POST['comentarioo']) ? $_POST['comentarioo']: '';
      $partner1 = isset($_POST['n_partner1']) ? $_POST['n_partner1']: '';
      $marca1 = isset($_POST['marca1']) ? $_POST['marca1']: '';
      $comentario1 = isset($_POST['comentario1']) ? $_POST['comentario1']: '';
      $partner2 = isset($_POST['n_partner2']) ? $_POST['n_partner2']: '';
      $marca2 = isset($_POST['marca2']) ? $_POST['marca2']: '';
      $comentario2 = isset($_POST['comentario2']) ? $_POST['comentario2']: '';
      $partner3 = isset($_POST['n_partner3']) ? $_POST['n_partner3']: '';
      $marca3 = isset($_POST['marca3']) ? $_POST['marca3']: '';
      $comentario3 = isset($_POST['comentario3']) ? $_POST['comentario3']: '';
      $partner4 = isset($_POST['n_partner4']) ? $_POST['n_partner4']: '';
      $marca4 = isset($_POST['marca4']) ? $_POST['marca4']: '';
      $comentario4 = isset($_POST['comentario4']) ? $_POST['comentario4']: '';
      $partner5 = isset($_POST['n_partner5']) ? $_POST['n_partner5']: '';
      $marca5 = isset($_POST['marca5']) ? $_POST['marca5']: '';
      $comentario5 = isset($_POST['comentario5']) ? $_POST['comentario5']: '';
      $partner6 = isset($_POST['n_partner6']) ? $_POST['n_partner6']: '';
      $marca6 = isset($_POST['marca6']) ? $_POST['marca6']: '';
      $comentario6 = isset($_POST['comentario6']) ? $_POST['comentario6']: '';
      $manoObra = isset($_POST['manoObra']) ? $_POST['manoObra']: '';
      $valor_mano = isset($_POST['valor_mano']) ? $_POST['valor_mano']: '';
      $manoObra1 = isset($_POST['manoObra1']) ? $_POST['manoObra1']: '';
      $valor_mano1 = isset($_POST['valor_mano1']) ? $_POST['valor_mano1']: '';
      $manoObra2 = isset($_POST['manoObra2']) ? $_POST['manoObra2']: '';
      $valor_mano2 = isset($_POST['valor_mano2']) ? $_POST['valor_mano2']: '';
      $manoObra3 = isset($_POST['manoObra3']) ? $_POST['manoObra3']: '';
      $valor_mano3 = isset($_POST['valor_mano3']) ? $_POST['valor_mano3']: '';
      $manoObra4 = isset($_POST['manoObra4']) ? $_POST['manoObra4']: '';
      $valor_mano4 = isset($_POST['valor_mano4']) ? $_POST['valor_mano4']: '';
      $manoObra5 = isset($_POST['manoObra5']) ? $_POST['manoObra5']: '';
      $valor_mano5 = isset($_POST['valor_mano5']) ? $_POST['valor_mano5']: '';
      $manoObra6 = isset($_POST['manoObra6']) ? $_POST['manoObra6']: '';
      $valor_mano6 = isset($_POST['valor_mano6']) ? $_POST['valor_mano6']: '';

 // conexión a la base de datos de
$dbhandle = mysql_connect($hostname, $username, $password) 
 or die("No se pudo Contactar a Base de Datos MySQL");
// seleccionar una base de datos para trabajar con
$selected = mysql_select_db("bdcass",$dbhandle) 
  or die("No se pudo seleccionar la base de datos CASS");

  $sql=mysql_query("UPDATE orden_trabajo SET fechaPresupuesto='$fechaPresupuesto', valorReparacion='$valorReparacion', n_partner='$partner', marca='$marca', comentarioo='$comentario', n_partner1='$partner1', marca1='$marca1', comentario1='$comentario1', n_partner2='$partner2', marca2='$marca2', comentario2='$comentario2', n_partner3='$partner3', marca3='$marca3', comentario3='$comentario3', n_partner4='$partner4', marca4='$marca4', comentario4='$comentario4', n_partner5='$partner5', marca5='$marca5', comentario5='$comentario5', n_partner6='$partner6', marca6='$marca6', comentario6='$comentario6', manoObra='$manoObra', valor_mano='$valor_mano', manoObra1='$manoObra1', valor_mano1='$valor_mano1', manoObra2='$manoObra2', valor_mano2='$valor_mano2', manoObra3='$manoObra3', valor_mano3='$valor_mano3', manoObra4='$manoObra4', valor_mano4='$valor_mano4', manoObra5='$manoObra5', valor_mano5='$valor_mano5', manoObra6='$manoObra6', valor_mano6='$valor_mano6' WHERE id_equipo = '$id' ")or die(mysql_error());
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