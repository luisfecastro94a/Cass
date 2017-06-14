<?php

require_once ("xajax/xajax_core/xajax.inc.php");


$xajax = new xajax("filtrar.ot.php");
$xajax->configure('javascript URI','xajax/');
//$xajax->register(XAJAX_FUNCTION,"procesarec");
//$xajax->register(XAJAX_FUNCTION,"buscarcliente");
//$xajax->register(XAJAX_FUNCTION,"agregarcilindro");
//$xajax->register(XAJAX_FUNCTION,"reccilindros");
//$xajax->register(XAJAX_FUNCTION,"guardarrec");
//$xajax->register(XAJAX_FUNCTION,"eliminarservicio");
//$xajax->register(XAJAX_FUNCTION,"processForm");
//$xajax->register(XAJAX_FUNCTION,"processAccountData");
//$xajax->register(XAJAX_FUNCTION,"procesar");
//$xajax->register(XAJAX_FUNCTION,"guardar_factura");
$xajax->register(XAJAX_FUNCTION,"filtrarcliente");



?>