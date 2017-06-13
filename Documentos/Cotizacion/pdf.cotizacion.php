<?php 
//llamamos  la clase del pdf
require('../../fpdf/fpdf.php');
require('../../conexion.php');


$pdf=new FPDF();//llamamos clase fpdf
$pdf->AddPage();//agregamos a la pagina lo siguiente que se hara
//$pdf->SetMargins(10, 30, 10);//establece los margenes left(izquier), top(superior), right(derecho)...
$pdf->SetFont('Arial','B',9);//setfont sera el tipo de la fuente en el pdf
$pdf->Image('../../img/cass_logo.png',10,11,18,20,'PNG');//sirve para traer imagen a nuestro pdf izq, y "X-G" 
$pdf->Cell(18,10,'',0);//son celda 18 largo 10 de altura, el 0 es el grosor de la celda
$pdf->Cell(150,10,'CASS S.A.',0);
$pdf->Ln(3);
$pdf->SetFont('Arial','',9);
$pdf->Cell(18,10,'',0);
$pdf->Cell(150,10,'Servicio Tecnico y Comercializacion ',0);
$pdf->Ln(3);
$pdf->Cell(18,10,'',0);
$pdf->Cell(150,10,'Equipos de Oficina sus Accesorios, ',0);
$pdf->Ln(3);
$pdf->Cell(18,10,'',0);
$pdf->Cell(150,10,'Repuestos e Insumos',0);
$pdf->Ln(3);
$pdf->Cell(18,10,'',0);
$pdf->Cell(150,10,'Egana 212 Fono 65-2564300',0);
$pdf->Ln(3);
$pdf->Cell(18,10,'',0);
$pdf->Cell(150,10,'Puerto Montt',0);
$pdf->Ln(3);
$pdf->Cell(18,10,'',0);
$pdf->Cell(150,10,'www.cass.cl',0);
$pdf->SetFont('Arial','',9);
$pdf->Cell(50,10,'Fecha:'.date('d-m-Y').'',0);
$pdf->Ln(15);//ln es un saldo de linea () le doy el valor
$pdf->SetFont('Arial','B',11);
$pdf->Cell(85,8,'',0);
$pdf->Cell(100,8,'Cotizacion',0);
$pdf->Ln(20);

$pdf->SetFont('Arial','B',8);
//$pdf->Cell(15,8,'Item',0);//tiene 15 de largo y ocho de alto se llama item borde 0
$pdf->Cell(15,8,'',0);
$pdf->Cell(50,8,'Numero Cotizacion',0);
$pdf->Cell(40,8,'Fecha Creacion',0);
$pdf->Cell(40,8,'Fecha Respuesta',0);
$pdf->Cell(40,8,'Estado de Cotizacion',0);
$pdf->Ln(8);
$pdf->SetFont('Arial','',8);
//Consulta SQL
$id=$_REQUEST['id'];
$productos=mysql_query("SELECT cotizacion.correlativo_cotizacion, cotizacion.fecha_cotizacion, cotizacion.fecha_respuesta, estado.estado FROM cotizacion INNER JOIN estado ON cotizacion.id_estado=estado.id_estado WHERE id_cotizacion='$id' ");
$item=0;
while ($productos2=mysql_fetch_array($productos)) {
	$pdf->Cell(15,8,'',0);
	$pdf->Cell(50,8,$productos2['correlativo_cotizacion'],0);
	$pdf->Cell(40,8,$productos2['fecha_cotizacion'],0);
	$pdf->Cell(40,8,$productos2['fecha_respuesta'],0);
	$pdf->Cell(40,8,$productos2['estado'],0);
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
$productos=mysql_query("SELECT orden_trabajo.id_orden_trabajo, cliente.nombre, cliente.rut, cliente.fono, cliente.direccion, ciudad.nombrec FROM cotizacion INNER JOIN orden_trabajo ON cotizacion.id_orden_trabajo=orden_trabajo.id_orden_trabajo INNER JOIN cliente ON orden_trabajo.id_cliente=cliente.id_cliente INNER JOIN ciudad ON cliente.id_ciudad=ciudad.id_ciudad WHERE id_cotizacion='$id' ");
$item=0;
while ($productos2=mysql_fetch_array($productos)) {
	$pdf->Cell(30,8,$productos2['nombre'],1);
	$pdf->Cell(30,8,$productos2['rut'],1);
	$pdf->Cell(40,8,$productos2['fono'],1);
	$pdf->Cell(70,8,$productos2['direccion'],1);
	$pdf->Cell(20,8,$productos2['nombrec'],1);
	$pdf->Ln(8);
}

$pdf->SetFont('Arial','B',8);
$pdf->Cell(25,8,'Datos del Equipo:',0);
$pdf->Ln(8);
$pdf->Cell(20,8,'Cantidad',1);
$pdf->Cell(110,8,'Descripcion',1);
$pdf->Cell(20,8,'Valor Unitario',1);
$pdf->Cell(25,8,'Total',1);
$pdf->Ln(8);
$pdf->SetFont('Arial','',8);
//Consulta SQL
$id=$_REQUEST['id'];
$productos=mysql_query("SELECT cotizacion.valorCotizacion, cotizacion.venta_repuesto, cotizacion.venta_repuesto_uno, cotizacion.venta_repuesto_dos, cotizacion.venta_repuesto_tres, cotizacion.venta_repuesto_cuatro, cotizacion.venta_repuesto_cinco, cotizacion.disponibilidad, orden_trabajo.valorReparacion, orden_trabajo.repuesto, orden_trabajo.repuesto_uno, orden_trabajo.repuesto_dos, orden_trabajo.repuesto_tres, orden_trabajo.repuesto_cuatro, orden_trabajo.repuesto_cinco FROM cotizacion INNER JOIN orden_trabajo ON cotizacion.id_orden_trabajo=orden_trabajo.id_orden_trabajo WHERE id_cotizacion='$id' ");
$item=0;
while ($productos2=mysql_fetch_array($productos)) {
	$pdf->Cell(20,8,'',1);
	$pdf->Cell(110,8,'Mano de Obra',1);
	$pdf->Cell(20,8,$productos2['valorReparacion'],1);
	$pdf->Cell(25,8,$productos2['valorReparacion'],1);
	$pdf->Ln(8);
	$pdf->Cell(20,8,'',1);
	$pdf->Cell(110,8,$productos2['repuesto'],1);
	$pdf->Cell(20,8,$productos2['venta_repuesto'],1);
	$pdf->Cell(25,8,$productos2['venta_repuesto'],1);
	$pdf->Ln(8);
	$pdf->Cell(20,8,'',1);
	$pdf->Cell(110,8,$productos2['repuesto_uno'],1);
	$pdf->Cell(20,8,$productos2['venta_repuesto_uno'],1);
	$pdf->Cell(25,8,$productos2['venta_repuesto_uno'],1); 
    $pdf->Ln(8);
	$pdf->Cell(20,8,'',1);
	$pdf->Cell(110,8,$productos2['repuesto_dos'],1);
	$pdf->Cell(20,8,$productos2['venta_repuesto_dos'],1);
	$pdf->Cell(25,8,$productos2['venta_repuesto_dos'],1);
	$pdf->Ln(8);
	$pdf->Cell(20,8,'',1);
	$pdf->Cell(110,8,$productos2['repuesto_tres'],1);
	$pdf->Cell(20,8,$productos2['venta_repuesto_tres'],1);
	$pdf->Cell(25,8,$productos2['venta_repuesto_tres'],1);
	$pdf->Ln(8);
	$pdf->Cell(20,8,'',1);
	$pdf->Cell(110,8,$productos2['repuesto_cuatro'],1);
	$pdf->Cell(20,8,$productos2['venta_repuesto_cuatro'],1);
	$pdf->Cell(25,8,$productos2['venta_repuesto_cuatro'],1);
	$pdf->Ln(8);
	$pdf->Cell(20,8,'',1);
	$pdf->Cell(110,8,$productos2['repuesto_cinco'],1);
	$pdf->Cell(20,8,$productos2['venta_repuesto_cinco'],1);
	$pdf->Cell(25,8,$productos2['venta_repuesto_cinco'],1);	
	$pdf->Ln(8);
	$pdf->Cell(20,6,'',0);
	$pdf->Cell(110,6,'',0);
	$pdf->Cell(20,6,'SubTotal',1);
	$pdf->Cell(25,6,$productos2['valorCotizacion'],1);	
	$pdf->Ln(6);
	$pdf->Cell(20,6,'',0);
	$pdf->Cell(110,6,'',0);
	$pdf->Cell(20,6,'Iva 19%',1);
	$pdf->Cell(25,6,$productos2['valorCotizacion'],1);
	$pdf->Ln(6);
	$pdf->Cell(20,6,'',0);
	$pdf->Cell(110,6,'',0);
	$pdf->Cell(20,6,'Total',1);
	$pdf->Cell(25,6,$productos2['valorCotizacion'],1);
	$pdf->Ln(6);
	$pdf->Cell(20,6,'Disponibilidad:',1);
	$pdf->Cell(25,6,$productos2['disponibilidad'],1);
	
}

$pdf->Output();
?>