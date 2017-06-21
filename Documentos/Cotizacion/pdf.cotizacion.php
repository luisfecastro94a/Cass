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
$pdf->SetFont('Arial','B',15);
$pdf->Cell(80,8,'',0);
$pdf->Cell(95,8,'Cotizacion',0);
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
$pdf->Cell(25,8,'Valor Unitario',1);
$pdf->Cell(25,8,'Total',1);
$pdf->Ln(8);
$pdf->SetFont('Arial','',8);
//Consulta SQL
$id=$_REQUEST['id'];
$productos=mysql_query("SELECT cotizacion.valorCotizacion, cotizacion.venta_repuesto, cotizacion.venta_repuesto_uno, cotizacion.venta_repuesto_dos, cotizacion.venta_repuesto_tres, cotizacion.venta_repuesto_cuatro, cotizacion.venta_repuesto_cinco, cotizacion.venta_repuesto_seis, cotizacion.disponibilidad, cotizacion.totalRepuesto, orden_trabajo.valorReparacion, orden_trabajo.comentarioo, orden_trabajo.comentario1, orden_trabajo.comentario2, orden_trabajo.comentario3, orden_trabajo.comentario4, orden_trabajo.comentario5, orden_trabajo.comentario6, orden_trabajo.manoObra, orden_trabajo.manoObra1, orden_trabajo.manoObra2, orden_trabajo.manoObra3, orden_trabajo.manoObra4, orden_trabajo.manoObra5, orden_trabajo.manoObra6, orden_trabajo.valor_mano, orden_trabajo.valor_mano1, orden_trabajo.valor_mano2, orden_trabajo.valor_mano3, orden_trabajo.valor_mano4, orden_trabajo.valor_mano5, orden_trabajo.valor_mano6 FROM cotizacion INNER JOIN orden_trabajo ON cotizacion.id_orden_trabajo=orden_trabajo.id_orden_trabajo WHERE id_cotizacion='$id' ");
$item=0;
while ($productos2=mysql_fetch_array($productos)) {
	$pdf->Cell(20,8,'',1);
	$pdf->Cell(110,8,$productos2['manoObra'],1);
	$pdf->Cell(25,8,$productos2['valor_mano'],1);
	$pdf->Cell(25,8,$productos2['valorReparacion'],1);
	$pdf->Ln(8);
    $pdf->Cell(20,8,'',1);
	$pdf->Cell(110,8,$productos2['manoObra1'],1);
	$pdf->Cell(25,8,$productos2['valor_mano1'],1);
	$pdf->Cell(25,8,$productos2['valor_mano1'],1);
	$pdf->Ln(8);
    $pdf->Cell(20,8,'',1);
	$pdf->Cell(110,8,$productos2['manoObra2'],1);
	$pdf->Cell(25,8,$productos2['valor_mano2'],1);
	$pdf->Cell(25,8,$productos2['valor_mano2'],1);
	$pdf->Ln(8);
	$pdf->Cell(20,8,'',1);
	$pdf->Cell(110,8,$productos2['manoObra3'],1);
	$pdf->Cell(25,8,$productos2['valor_mano3'],1);
	$pdf->Cell(25,8,$productos2['valor_mano3'],1);
	$pdf->Ln(8);
	$pdf->Cell(20,8,'',1);
	$pdf->Cell(110,8,$productos2['manoObra4'],1);
	$pdf->Cell(25,8,$productos2['valor_mano4'],1);
	$pdf->Cell(25,8,$productos2['valor_mano4'],1);
	$pdf->Ln(8);
	$pdf->Cell(20,8,'',1);
	$pdf->Cell(110,8,$productos2['manoObra5'],1);
	$pdf->Cell(25,8,$productos2['valor_mano5'],1);
	$pdf->Cell(25,8,$productos2['valor_mano5'],1);
	$pdf->Ln(8);
	$pdf->Cell(20,8,'',1);
	$pdf->Cell(110,8,$productos2['manoObra6'],1);
	$pdf->Cell(25,8,$productos2['valor_mano6'],1);
	$pdf->Cell(25,8,$productos2['valor_mano6'],1);
	$pdf->Ln(8);
	$pdf->Cell(20,8,'',1);
	$pdf->Cell(110,8,$productos2['comentarioo'],1);
	$pdf->Cell(25,8,$productos2['venta_repuesto'],1);
	$pdf->Cell(25,8,$productos2['venta_repuesto'],1);
	$pdf->Ln(8);
	$pdf->Cell(20,8,'',1);
	$pdf->Cell(110,8,$productos2['comentario1'],1);
	$pdf->Cell(25,8,$productos2['venta_repuesto_uno'],1);
	$pdf->Cell(25,8,$productos2['venta_repuesto_uno'],1); 
    $pdf->Ln(8);
	$pdf->Cell(20,8,'',1);
	$pdf->Cell(110,8,$productos2['comentario2'],1);
	$pdf->Cell(25,8,$productos2['venta_repuesto_dos'],1);
	$pdf->Cell(25,8,$productos2['venta_repuesto_dos'],1);
	$pdf->Ln(8);
	$pdf->Cell(20,8,'',1);
	$pdf->Cell(110,8,$productos2['comentario3'],1);
	$pdf->Cell(25,8,$productos2['venta_repuesto_tres'],1);
	$pdf->Cell(25,8,$productos2['venta_repuesto_tres'],1);
	$pdf->Ln(8);
	$pdf->Cell(20,8,'',1);
	$pdf->Cell(110,8,$productos2['comentario4'],1);
	$pdf->Cell(25,8,$productos2['venta_repuesto_cuatro'],1);
	$pdf->Cell(25,8,$productos2['venta_repuesto_cuatro'],1);
	$pdf->Ln(8);
	$pdf->Cell(20,8,'',1);
	$pdf->Cell(110,8,$productos2['comentario5'],1);
	$pdf->Cell(25,8,$productos2['venta_repuesto_cinco'],1);
	$pdf->Cell(25,8,$productos2['venta_repuesto_cinco'],1);	
    $pdf->Ln(8);
	$pdf->Cell(20,8,'',1);
	$pdf->Cell(110,8,$productos2['comentario6'],1);
	$pdf->Cell(25,8,$productos2['venta_repuesto_seis'],1);
	$pdf->Cell(25,8,$productos2['venta_repuesto_seis'],1);
	$pdf->Ln(8);
    $pdf->Cell(20,6,'',0);
	$pdf->Cell(110,6,'',0);
	$pdf->Cell(25,6,'Total Mano Obra',1);
	$pdf->Cell(25,6,$productos2['valorReparacion'],1);	
	$pdf->Ln(6);
    $pdf->Cell(20,6,'',0);
	$pdf->Cell(110,6,'',0);
	$pdf->Cell(25,6,'Total Repuestos',1);
	$pdf->Cell(25,6,$productos2['totalRepuesto'],1);//agregar campo con las sumas de los repuestos	
	$pdf->Ln(6);
	$pdf->Cell(20,6,'',0);
	$pdf->Cell(110,6,'',0);
	$pdf->Cell(25,6,'SubTotal',1);
	$pdf->Cell(25,6,$productos2['valorCotizacion'],1);	
	$pdf->Ln(6);
	$pdf->Cell(20,6,'',0);
	$pdf->Cell(110,6,'',0);
	$pdf->Cell(25,6,'Iva 19%',1);
	$pdf->Cell(25,6,$productos2['valorCotizacion'],1);
	$pdf->Ln(6);
	$pdf->Cell(20,6,'',0);
	$pdf->Cell(110,6,'',0);
	$pdf->Cell(25,6,'Total',1);
	$pdf->Cell(25,6,$productos2['valorCotizacion'],1);
	$pdf->Ln(6);
	$pdf->Cell(25,6,'Disponibilidad:',1);
	$pdf->Cell(25,6,$productos2['disponibilidad'],1);
	
}

$pdf->Output();
?>