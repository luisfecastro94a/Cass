<?php 
	include('conexion.php');

	$año = $_POST['año'];

	$enero = mysql_fetch_array(mysql_query("SELECT SUM(valorCotizacionOT) AS r FROM orden_trabajo WHERE MONTH(fecha_OT)=1 AND YEAR(fecha_OT)='$año'"));
	$febrero = mysql_fetch_array(mysql_query("SELECT SUM(valorCotizacionOT) AS r FROM orden_trabajo WHERE MONTH(fecha_OT)=2 AND YEAR(fecha_OT)='$año'"));
	$marzo = mysql_fetch_array(mysql_query("SELECT SUM(valorCotizacionOT) AS r FROM orden_trabajo WHERE MONTH(fecha_OT)=3 AND YEAR(fecha_OT)='$año'"));
	$abril = mysql_fetch_array(mysql_query("SELECT SUM(valorCotizacionOT) AS r FROM orden_trabajo WHERE MONTH(fecha_OT)=4 AND YEAR(fecha_OT)='$año'"));
	$mayo = mysql_fetch_array(mysql_query("SELECT SUM(valorCotizacionOT) AS r FROM orden_trabajo WHERE MONTH(fecha_OT)=5 AND YEAR(fecha_OT)='$año'"));
	$junio = mysql_fetch_array(mysql_query("SELECT SUM(valorCotizacionOT) AS r FROM orden_trabajo WHERE MONTH(fecha_OT)=6 AND YEAR(fecha_OT)='$año'"));
	$julio = mysql_fetch_array(mysql_query("SELECT SUM(valorCotizacionOT) AS r FROM orden_trabajo WHERE MONTH(fecha_OT)=7 AND YEAR(fecha_OT)='$año'"));
	$agosto = mysql_fetch_array(mysql_query("SELECT SUM(valorCotizacionOT) AS r FROM orden_trabajo WHERE MONTH(fecha_OT)=8 AND YEAR(fecha_OT)='$año'"));
	$septiembre = mysql_fetch_array(mysql_query("SELECT SUM(valorCotizacionOT) AS r FROM orden_trabajo WHERE MONTH(fecha_OT)=9 AND YEAR(fecha_OT)='$año'"));
	$octubre = mysql_fetch_array(mysql_query("SELECT SUM(valorCotizacionOT) AS r FROM orden_trabajo WHERE MONTH(fecha_OT)=10 AND YEAR(fecha_OT)='$año'"));
	$noviembre = mysql_fetch_array(mysql_query("SELECT SUM(valorCotizacionOT) AS r FROM orden_trabajo WHERE MONTH(fecha_OT)=11 AND YEAR(fecha_OT)='$año'"));
	$diciembre = mysql_fetch_array(mysql_query("SELECT SUM(valorCotizacionOT) AS r FROM orden_trabajo WHERE MONTH(fecha_OT)=12 AND YEAR(fecha_OT)='$año'"));

	$data = array(0-> round($enero['r'],1),
					1-> round($febrero['r'],1),
					2-> round($marzo['r'],1),
					3-> round($abril['r'],1),
					4-> round($mayo['r'],1),
					5-> round($junio['r'],1),
					6-> round($julio['r'],1),
					7-> round($agosto['r'],1),
					8-> round($septiembre['r'],1),
					9-> round($octubre['r'],1),
					10-> round($noviembre['r'],1),
					11> round($diciembre['r'],1),
					);
	echo json_encode($data);

?>