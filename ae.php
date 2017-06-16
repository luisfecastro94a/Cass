<html>
<head>
<script>
var iltotal = 0;
function zuma(cual) 
{
f = cual.form;
n = cual.name;
for (var i = 0, nombres = f[n] , total = nombres.length; i < total; i++)
if (f[n][i] == cual && f[n][i].checked)
var b = f[n][i].value = f.chb[i].value;

if (String(b) == "undefined")
{
b = 0;
}

iltotal = iltotal + parseInt(b);

document.getElementById("can").value = String(iltotal);
}


</script>
</head>
<body>
<form class="form-control" action="" method="POST">
2000<input type="checkbox" name="chb" id="chb" value="2000" onclick="zuma(this);"/><br />
3000<input type="checkbox" name="chb" id="chb" value="3000" onclick="zuma(this);"/><br />
1000<input type="checkbox" name="chb" id="chb" value="1000" onclick="zuma(this);"/><br />
<input type="text" name="" id="can" value="">
</form>

<script>
var iltotal = 0;
function zuma(cual) 
{
f = cual.form;
n = cual.name;
for (var i = 0, nombres = f[n] , total = nombres.length; i < total; i++)
if (f[n][i] == cual && f[n][i].checked)
 var b = f[n][i].value = f.chb[i].value;

if (String(b) == "undefined")
{
b = 0;
}

iltotal = iltotal + parseInt(b);

document.getElementById("can").value = String(iltotal);
}


</script>

<div class="col-xs-11  has-error">
<h2 class="bg-primary text-center pad-basic no-btn">Repuesto Solicitados</h2>
<table class="table bg-info" id="tabla">
  <tr class="fila-fija">
    <td><label >Seleccionar</label></td>
    <td><label >Cliente</label></td>
    <td><label >N° Partner</label></td>
    <td><label >Marca</label></td>
    <td><label >Comentario</label></td>
    <td><label >Valor Repuesto</label></td>
  </tr>
  <tr class="fila-fija">
    <td><input type="checkbox" name="chb" id="chb" onclick="zuma(this);"></td>
    <td><input class="form-control" name="" id="" type="text" value="<?php echo $row['nombre'];?>"></td>
    <td><input class="form-control" name="n_partner" id="repuesto" type="text" value="<?php echo $row['n_partner'];?>"></td>
    <td><input class="form-control" name="marca" id="repuesto_uno" type="text" value="<?php echo $row['marca'];?>"></td>
    <td><input class="form-control" name="comentarioo" id="repuesto_dos" type="text" value="<?php echo $row['comentarioo'];?>"></td>
    <td><input class="form-control" onKeyPress="return SoloNumeros(event)" value="<?php echo $row['venta_repuesto'];?>" name="venta_repuesto" id="" type="text"></td>
  </tr>

  <tr>
    <td><input type="checkbox" name="chb" id="chb" onclick="zuma(this);"></td>
    <td></td>
    <td><input class="form-control" name="" id="repuesto_tres" type="text" value="<?php echo $row['n_partner1'];?>"></td>
    <td><input class="form-control" name="" id="repuesto_cuatro" type="text" value="<?php echo $row['marca1'];?>"></td>
    <td><input class="form-control" name="" id="repuesto_cinco" type="text" value="<?php echo $row['comentario1'];?>"></td>
    <td><input class="form-control" onKeyPress="return SoloNumeros(event)"  value="<?php echo $row['venta_repuesto_uno'];?>" name="venta_repuesto_uno" id="" type="text"></td>
  </tr>
  <tr>
  <td><input type="checkbox" name="chb" id="chb" onclick="zuma(this);"></td>
  <td></td>
    <td><input class="form-control" name="" id="n_partner2" type="text" value="<?php echo $row['n_partner2'];?>"></td>
    <td><input class="form-control" name="" id="marca2" type="text" value="<?php echo $row['marca2'];?>"></td>
    <td><input class="form-control" name="" id="comentario2" type="text" value="<?php echo $row['comentario2'];?>"></td>
    <td><input class="form-control" onKeyPress="return SoloNumeros(event)"  value="<?php echo $row['venta_repuesto_dos'];?>" name="venta_repuesto_dos" id="" type="text"></td>
  <tr>
  <td><input type="checkbox" name="chb" id="chb" onclick="zuma(this);"></td>
  <td></td>
    <td><input class="form-control" name="" id="n_partner3" type="text" value="<?php echo $row['n_partner3'];?>"></td>
    <td><input class="form-control" name="" id="marca3" type="text" value="<?php echo $row['marca3'];?>"></td>
    <td><input class="form-control" name="" id="comentario3" type="text" value="<?php echo $row['comentario3'];?>"></td>
    <td><input class="form-control" onKeyPress="return SoloNumeros(event)"  value="<?php echo $row['venta_repuesto_tres'];?>" name="venta_repuesto_tres" id="" type="text"></td>
  </tr>
  <tr>
  <td><input type="checkbox" name="chb" id="chb" onclick="zuma(this);"></td>
    <td></td>
    <td><input class="form-control" name="" id="n_partner4" type="text" value="<?php echo $row['n_partner4'];?>"></td>
    <td><input class="form-control" name="" id="marca4" type="text" value="<?php echo $row['marca4'];?>"></td>
    <td><input class="form-control" name="" id="comentario4" type="text" value="<?php echo $row['comentario4'];?>"></td>
    <td><input class="form-control" onKeyPress="return SoloNumeros(event)"  value="<?php echo $row['venta_repuesto_cuatro'];?>" name="venta_repuesto_cuatro" id="" type="text"></td>
  </tr>
  <tr>
  <td><input type="checkbox" name="chb" id="chb" onclick="zuma(this);"></td>
  <td></td>
    <td><input class="form-control" name="" id="n_partner5" type="text" value="<?php echo $row['n_partner5'];?>"></td>
    <td><input class="form-control" name="" id="marca5" type="text" value="<?php echo $row['marca5'];?>"></td>
    <td><input class="form-control" name="" id="comentario5" type="text" value="<?php echo $row['comentario5'];?>"></td>
    <td><input class="form-control" onKeyPress="return SoloNumeros(event)"  value="<?php echo $row['venta_repuesto_cinco'];?>" name="venta_repuesto_cinco" id="repuesto4" type="text"></td>
  </tr>
  <tr>
  <td><input type="checkbox" name="chb" id="chb" onclick="zuma(this);"></td>
  <td></td>
    <td><input class="form-control" name="" id="n_partner6" type="text" value="<?php echo $row['n_partner6'];?>"></td>
    <td><input class="form-control" name="" id="marca6" type="text" value="<?php echo $row['marca6'];?>"></td>
    <td><input class="form-control" name="" id="comentario6" type="text" value="<?php echo $row['comentario6'];?>"></td>
    <td><input class="form-control" onKeyPress="return SoloNumeros(event)"  value="<?php echo $row['venta_repuesto_seis'];?>" name="venta_repuesto_seis" id="repuesto4" type="text"></td>
  </tr>
</table>
</div>



</body>
</html>