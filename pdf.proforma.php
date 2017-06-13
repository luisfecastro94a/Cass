<?php 
//llamamos  la clase del pdf
require('fpdf/fpdf.php');
require('conexion.php');


$pdf=new FPDF();//llamamos clase fpdf
$pdf->AddPage();//agregamos a la pagina lo siguiente que se hara
//$pdf->SetMargins(10, 30, 10);//establece los margenes left(izquier), top(superior), right(derecho)...
$pdf->SetFont('Arial','B',9);//setfont sera el tipo de la fuente en el pdf
$pdf->Image('img/cass_logo.png',10,11,18,20,'PNG');//sirve para traer imagen a nuestro pdf izq, y "X-G" 
$pdf->Cell(18,10,'',0);//son celda 18 largo 10 de altura, el 0 es el grosor de la celda
$pdf->Cell(100,10,'CASS S.A.',0);
$pdf->Ln(3);
$pdf->SetFont('Arial','',9);
$pdf->Cell(18,10,'',0);
$pdf->Cell(100,10,'Servicio Tecnico y Comercializacion ',0);
$pdf->Ln(3);
$pdf->Cell(18,10,'',0);
$pdf->Cell(100,10,'Equipos de Oficina sus Accesorios, ',0);
$pdf->Ln(3);
$pdf->Cell(18,10,'',0);
$pdf->Cell(100,10,'Repuestos e Insumos',0);
$pdf->Ln(3);
$pdf->Cell(18,10,'',0);
$pdf->Cell(100,10,'Egana 212 Fono 65-2564300',0);
$pdf->Ln(3);
$pdf->Cell(18,10,'',0);
$pdf->Cell(100,10,'Puerto Montt',0);
$pdf->Ln(3);
$pdf->Cell(18,10,'',0);
$pdf->Cell(100,10,'www.cass.cl',0);
$pdf->SetFont('Arial','B',13);
$pdf->Cell(20,8,'R.U.T. :',0);
$pdf->Cell(50,8,'76.102.295-4',0);
$pdf->Ln(5);
$pdf->Cell(130,8,'',0);
$pdf->Cell(50,8,'Proforma',0);
$pdf->Ln(5);
$pdf->SetFont('Arial','B',15);
//Consulta SQL
$id=$_REQUEST['id'];
$productos=mysql_query("SELECT proforma.id_proforma, proforma.correlativo_proforma, proforma.fecha_proforma, orden_trabajo.id_orden_trabajo, orden_trabajo.correlativo_ot, orden_trabajo.valorCotizacionOT, usuario.nombreUsuario, cliente.nombre, area.area FROM proforma INNER JOIN orden_trabajo ON proforma.id_orden_trabajo=orden_trabajo.id_orden_trabajo INNER JOIN cliente ON orden_trabajo.id_cliente=cliente.id_cliente INNER JOIN usuario ON orden_trabajo.id_usuario=usuario.id_usuario INNER JOIN area ON orden_trabajo.id_area=area.id_area WHERE id_proforma='$id' ");
$item=0;
while ($productos2=mysql_fetch_array($productos)) {
	$pdf->Cell(140,8,'',0);
	$pdf->Cell(50,8,$productos2['correlativo_proforma'],0);
	$pdf->Ln(8);
}

$pdf->SetFont('Arial','B',8);
$pdf->Cell(25,8,'Datos del Cliente:',0);
$pdf->Ln(8);
$pdf->Cell(30,8,'Nombre',1);
$pdf->Cell(30,8,'Rut',1);
$pdf->Cell(40,8,'Fono',1);
$pdf->Cell(70,8,'Direccion',1);
$pdf->Cell(20,8,'Ciudad',1);
$pdf->Ln(8);
$pdf->SetFont('Arial','',8);
//Consulta SQL
$id=$_REQUEST['id'];
$productos=mysql_query("SELECT cliente.nombre, cliente.rut, cliente.fono, cliente.direccion, ciudad.nombrec FROM proforma INNER JOIN orden_trabajo ON proforma.id_orden_trabajo=orden_trabajo.id_orden_trabajo  INNER JOIN cliente ON orden_trabajo.id_cliente=cliente.id_cliente INNER JOIN ciudad ON cliente.id_ciudad=ciudad.id_ciudad   WHERE id_proforma='$id' ");
$item=0;
while ($productos2=mysql_fetch_array($productos)) {
	$pdf->Cell(30,8,$productos2['nombre'],1);
	$pdf->Cell(30,8,$productos2['rut'],1);
	$pdf->Cell(40,8,$productos2['fono'],1);
	$pdf->Cell(70,8,$productos2['direccion'],1);
	$pdf->Cell(20,8,$productos2['nombrec'],1);
	$pdf->Ln(15);
}

$pdf->SetFont('Arial','B',8);
$pdf->Cell(25,8,'Costos:',0);
$pdf->Ln(8);
$pdf->Cell(20,8,'Cantidad',1);
$pdf->Cell(100,8,'Detalle',1);
$pdf->Cell(25,8,'Valor Unitario',1);
$pdf->Cell(25,8,'Total',1);
$pdf->Ln(8);
$pdf->SetFont('Arial','',8);
//Consulta SQL
$id=$_REQUEST['id'];
$item=0;$productos=mysql_query("SELECT orden_trabajo.id_orden_trabajo, orden_trabajo.valorRepuestoOT, orden_trabajo.valorCotizacionOT, orden_trabajo.valorReparacion  FROM orden_trabajo   WHERE id_orden_trabajo='$id' ");

while ($productos2=mysql_fetch_array($productos)) {
	$pdf->Cell(20,20,'$'.$productos2['valorReparacion'],1);
	$pdf->Cell(100,20,'$'.$productos2['valorReparacion'],1);
	$pdf->Cell(25,20,'$'.$productos2['valorRepuestoOT'],1);
	$pdf->Cell(25,20,'$'.$productos2['valorCotizacionOT'],1);
	$pdf->Ln(20); 
}

$pdf->Output();
?>

