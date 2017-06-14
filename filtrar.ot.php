<?php 

session_start();
//require ("librerias/clases/class_db.inc.php");
//require ("librerias/clases/class.cliente.php");
//require_once ("documentos_electronicos.php");
require_once ("filtrar.ot.common.php");

function filtrarcliente($aFormValues)
{

  $objResponse = new xajaxResponse();

    $bError = false;


  if (trim($aFormValues['id_orden_trabajo']) == "")
  {
    $objResponse->alert("Seleccione el OOTT.");
    $bError = true;
  }

    $mensaje = "";

  $IdOT = $aFormValues['id_orden_trabajo'];


  $sql2 = " SELECT
orden_trabajo.correlativo_ot, cliente.nombre,  equipo.serie_equipo, orden_trabajo.valorReparacion, orden_trabajo.n_partner, orden_trabajo.marca, orden_trabajo.comentarioo, orden_trabajo.n_partner1, orden_trabajo.marca1, orden_trabajo.comentario1 , orden_trabajo.n_partner2, orden_trabajo.marca2, orden_trabajo.comentario2, orden_trabajo.n_partner3, orden_trabajo.marca3, orden_trabajo.comentario3, orden_trabajo.n_partner4, orden_trabajo.marca4, orden_trabajo.comentario4, orden_trabajo.n_partner5, orden_trabajo.marca5, orden_trabajo.comentario5, orden_trabajo.n_partner6, orden_trabajo.marca6, orden_trabajo.comentario6
FROM
orden_trabajo
INNER JOIN cliente ON orden_trabajo.id_cliente=cliente.id_cliente INNER JOIN ciudad ON cliente.id_ciudad=ciudad.id_ciudad INNER JOIN equipo ON orden_trabajo.id_equipo=equipo.id_equipo WHERE orden_trabajo.id_orden_trabajo='$id_orden_trabajo'  ";
  $consulta2=mysql_query($sql2);
  $registro2=mysql_fetch_array($consulta2);

   $IdOT= $registro2["id_orden_trabajo"];
   $correlativo= $registro2["correlativo_ot"];



  $mensaje = '<form action="" method="get" name="formulario">
         <input name="accion" type="hidden" value="">
         <input name="nav" type="hidden" value="">
         <input name="idTipoDoc" type="hidden" value="">
    <table width="895" height="52"  border="0" class="tabla" >
  <thead>
    <tr>
      <th></th>
    <th width="5%" align="left"></th>
      <th width="13%" height="24" align="left">ID</th>
      <th width="8%" align="left">N&deg; OT</th>
      <th width="39%" align="left">Partner</th>
      <th width="25%" align="left">Marca</th>
    <th width="18%" align="left">Comentario</th>
    <th width="10%" align="left">Partner</th>
    </tr>
  </thead>';
       while ($row = mysql_fetch_array($consulta2))
    {
       
    $mensaje .= '<tr>
    <td height="22" align="left"><input name="GUIA[]" type="checkbox" value="' . $row["id_orden_trabajo"] . '" /></td>
    <td height="22" align="left">' . $row["correlativo_ot"] . '</td>
    <td height="22" align="left">' . $row["nombre"] . '</td>
    <td height="22" align="left">' . $row["n_partner"] . '</td>
    <td height="22" align="left">' . $row["marca"] . '</td>
    <td height="22" align="left">' . $row["comentarioo"] . '</td>
    <td height="22" align="left">' . $row["n_partner1"] . '</td>
    <td height="22" align="left">' . $row["marca1"] . '</td>
    <td height="22" align="left">' . $row["comentario1"] . '</td>
    <td height="22" align="left">' . $row["n_partner2"] . '</td>
    <td height="22" align="left">' . $row["marca2"] . '</td>
    <td height="22" align="left">' . $row["comentario2"] . '</td>
    <td height="22" align="left">' . $row["n_partner3"] . '</td>
    <td height="22" align="left">' . $row["marca3"] . '</td>
    <td height="22" align="left">' . $row["comentario3"] . '</td>    
    <td height="22" align="left">' . $row["n_partner4"] . '</td>
    <td height="22" align="left">' . $row["marca4"] . '</td>
    <td height="22" align="left">' . $row["comentario4"] . '</td>
    <td height="22" align="left">' . $row["n_partner5"] . '</td>
    <td height="22" align="left">' . $row["marca5"] . '</td>
    <td height="22" align="left">' . $row["comentario5"] . '</td>
    <td height="22" align="left">' . $row["n_partner6"] . '</td>
    <td height="22" align="left">' . $row["marca6"] . '</td>
    <td height="22" align="left">' . $row["comentario6"] . '</td>    
  </tr>';

    }

 $mensaje .= '<tr>
      <th width="5%" align="right" colspan="8"><input name="FACTURAR" type="submit" class="boton" value="FACTURAR"></th>
    </tr></table></form>';


}

 ?>