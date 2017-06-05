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
$pdf->Cell(150,10,'Egana 212 Fono 65-564300',0);
$pdf->Ln(3);
$pdf->Cell(18,10,'',0);
$pdf->Cell(150,10,'Puerto Montt',0);
$pdf->SetFont('Arial','',9);
$pdf->Cell(50,10,'Fecha:'.date('d-m-Y').'',0);
$pdf->Ln(15);//ln es un saldo de linea () le doy el valor
$pdf->SetFont('Arial','B',11);
$pdf->Cell(70,8,'',0);
$pdf->Cell(100,8,'Orden de Trabajo',0);
$pdf->Ln(20);

$pdf->SetFont('Arial','B',8);
//$pdf->Cell(15,8,'Item',0);//tiene 15 de largo y ocho de alto se llama item borde 0
$pdf->Cell(50,8,'Numero Orden de Trabajo',0);
$pdf->Cell(40,8,'Fecha de Creacion',0);
$pdf->Cell(40,8,'Tecnico a Cargo',0);
$pdf->Cell(40,8,'Area',0);
$pdf->Cell(40,8,'Estado de OT',0);
$pdf->Ln(8);
$pdf->SetFont('Arial','',8);
//Consulta SQL
$id=$_REQUEST['id'];
$productos=mysql_query("SELECT orden_trabajo.id_orden_trabajo, orden_trabajo.valorRepuestoOT, orden_trabajo.valorCotizacionOT, orden_trabajo.correlativo_ot, orden_trabajo.fecha_creacion, orden_trabajo.motivo, orden_trabajo.valorReparacion, orden_trabajo.fechaPresupuesto, usuario.nombreUsuario, cliente.nombre, cliente.rut, cliente.fono, cliente.direccion, ciudad.nombrec, ot_tipo.nombreTipo, area.area, estado.estado, equipo.serie_equipo FROM orden_trabajo INNER JOIN usuario ON orden_trabajo.id_usuario=usuario.id_usuario INNER JOIN cliente ON orden_trabajo.id_cliente=cliente.id_cliente INNER JOIN ciudad ON cliente.id_ciudad=ciudad.id_ciudad INNER JOIN ot_tipo ON orden_trabajo.id_ot_tipo=ot_tipo.id_ot_tipo INNER JOIN area ON orden_trabajo.id_area=area.id_area INNER JOIN estado ON orden_trabajo.id_estado=estado.id_estado INNER JOIN equipo ON orden_trabajo.id_equipo=equipo.id_equipo WHERE id_orden_trabajo='$id' ");
$item=0;
while ($productos2=mysql_fetch_array($productos)) {
	$pdf->Cell(50,8,$productos2['correlativo_ot'],0);
	$pdf->Cell(40,8,$productos2['fecha_creacion'],0);
	$pdf->Cell(40,8,$productos2['nombreUsuario'],0);
	$pdf->Cell(40,8,$productos2['area'],0);
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
$productos=mysql_query("SELECT orden_trabajo.id_orden_trabajo, orden_trabajo.valorRepuestoOT, orden_trabajo.valorCotizacionOT, orden_trabajo.correlativo_ot, orden_trabajo.fecha_creacion, orden_trabajo.motivo, orden_trabajo.valorReparacion, orden_trabajo.fechaPresupuesto, usuario.nombreUsuario, cliente.nombre, cliente.rut, cliente.fono, cliente.direccion, ciudad.nombrec, ot_tipo.nombreTipo, area.area, estado.estado, equipo.serie_equipo FROM orden_trabajo INNER JOIN usuario ON orden_trabajo.id_usuario=usuario.id_usuario INNER JOIN cliente ON orden_trabajo.id_cliente=cliente.id_cliente INNER JOIN ciudad ON cliente.id_ciudad=ciudad.id_ciudad INNER JOIN ot_tipo ON orden_trabajo.id_ot_tipo=ot_tipo.id_ot_tipo INNER JOIN area ON orden_trabajo.id_area=area.id_area INNER JOIN estado ON orden_trabajo.id_estado=estado.id_estado INNER JOIN equipo ON orden_trabajo.id_equipo=equipo.id_equipo WHERE id_orden_trabajo='$id' ");
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
$pdf->Cell(30,8,'Serie del Equipo',1);
$pdf->Cell(70,8,'Sintoma del Cliente',1);
$pdf->Cell(20,8,'Marca',1);
$pdf->Cell(25,8,'Tipo de Ingreso',1);
$pdf->Ln(8);
$pdf->SetFont('Arial','',8);
//Consulta SQL
$id=$_REQUEST['id'];
$productos=mysql_query("SELECT orden_trabajo.id_orden_trabajo, orden_trabajo.valorRepuestoOT, orden_trabajo.valorCotizacionOT, orden_trabajo.correlativo_ot, orden_trabajo.fecha_creacion, orden_trabajo.motivo, orden_trabajo.valorReparacion, orden_trabajo.fechaPresupuesto, usuario.nombreUsuario, cliente.nombre, cliente.rut, cliente.fono, cliente.direccion, ciudad.nombrec, ot_tipo.nombreTipo, area.area, estado.estado, equipo.serie_equipo, equipo.sintoma_cliente, equipo.tipo_ingreso, marca.marca FROM orden_trabajo INNER JOIN usuario ON orden_trabajo.id_usuario=usuario.id_usuario INNER JOIN cliente ON orden_trabajo.id_cliente=cliente.id_cliente INNER JOIN ciudad ON cliente.id_ciudad=ciudad.id_ciudad INNER JOIN ot_tipo ON orden_trabajo.id_ot_tipo=ot_tipo.id_ot_tipo INNER JOIN area ON orden_trabajo.id_area=area.id_area INNER JOIN estado ON orden_trabajo.id_estado=estado.id_estado INNER JOIN equipo ON orden_trabajo.id_equipo=equipo.id_equipo INNER JOIN marca ON equipo.id_marca=marca.id_marca WHERE id_orden_trabajo='$id' ");
$item=0;
while ($productos2=mysql_fetch_array($productos)) {
	$pdf->Cell(30,8,$productos2['serie_equipo'],1);
	$pdf->Cell(70,8,$productos2['sintoma_cliente'],1);
	$pdf->Cell(20,8,$productos2['marca'],1);
	$pdf->Cell(25,8,$productos2['tipo_ingreso'],1);
	$pdf->Ln(8); 
	
}

$pdf->SetFont('Arial','B',8);
$pdf->Cell(25,8,'Observaciones:',0);
$pdf->Ln(8);
$pdf->Cell(30,8,'Causas',1);
$pdf->Cell(150,8,'Comentarios',1);
$pdf->Ln(8);
$pdf->SetFont('Arial','',8);
//Consulta SQL
$id=$_REQUEST['id'];
$productos=mysql_query("SELECT orden_trabajo.id_orden_trabajo, orden_trabajo.valorRepuestoOT, orden_trabajo.valorCotizacionOT, orden_trabajo.correlativo_ot, orden_trabajo.fecha_creacion, orden_trabajo.motivo, orden_trabajo.valorReparacion, orden_trabajo.fechaPresupuesto, orden_trabajo.motivo, orden_trabajo.comentario, usuario.nombreUsuario, cliente.nombre, cliente.rut, cliente.fono, cliente.direccion, ciudad.nombrec, ot_tipo.nombreTipo, area.area, estado.estado, equipo.serie_equipo, equipo.sintoma_cliente, equipo.tipo_ingreso, marca.marca FROM orden_trabajo INNER JOIN usuario ON orden_trabajo.id_usuario=usuario.id_usuario INNER JOIN cliente ON orden_trabajo.id_cliente=cliente.id_cliente INNER JOIN ciudad ON cliente.id_ciudad=ciudad.id_ciudad INNER JOIN ot_tipo ON orden_trabajo.id_ot_tipo=ot_tipo.id_ot_tipo INNER JOIN area ON orden_trabajo.id_area=area.id_area INNER JOIN estado ON orden_trabajo.id_estado=estado.id_estado INNER JOIN equipo ON orden_trabajo.id_equipo=equipo.id_equipo INNER JOIN marca ON equipo.id_marca=marca.id_marca WHERE id_orden_trabajo='$id' ");
$item=0;
while ($productos2=mysql_fetch_array($productos)) {
	$pdf->Cell(30,16,$productos2['motivo'],1);
	$pdf->Cell(150,16,$productos2['comentario'],1);
	$pdf->Ln(20); 
}

$pdf->SetFont('Arial','B',8);
$pdf->Cell(25,8,'Costos:',0);
$pdf->Ln(8);
$pdf->Cell(30,8,'Valor Revision',1);
$pdf->Cell(30,8,'Valor reparacion',1);
$pdf->Cell(60,8,'Valor Repuesto',1);
$pdf->Cell(40,8,'Total',1);
$pdf->Ln(8);
$pdf->SetFont('Arial','',8);
//Consulta SQL
$id=$_REQUEST['id'];
$productos=mysql_query("SELECT orden_trabajo.id_orden_trabajo, orden_trabajo.valorRepuestoOT, orden_trabajo.valorCotizacionOT, orden_trabajo.correlativo_ot, orden_trabajo.fecha_creacion, orden_trabajo.motivo, orden_trabajo.valorReparacion, orden_trabajo.fechaPresupuesto, usuario.nombreUsuario, cliente.nombre, cliente.rut, cliente.fono, cliente.direccion, ciudad.nombrec, ot_tipo.nombreTipo, area.area, estado.estado, equipo.serie_equipo, equipo.sintoma_cliente, equipo.tipo_ingreso, marca.marca FROM orden_trabajo INNER JOIN usuario ON orden_trabajo.id_usuario=usuario.id_usuario INNER JOIN cliente ON orden_trabajo.id_cliente=cliente.id_cliente INNER JOIN ciudad ON cliente.id_ciudad=ciudad.id_ciudad INNER JOIN ot_tipo ON orden_trabajo.id_ot_tipo=ot_tipo.id_ot_tipo INNER JOIN area ON orden_trabajo.id_area=area.id_area INNER JOIN estado ON orden_trabajo.id_estado=estado.id_estado INNER JOIN equipo ON orden_trabajo.id_equipo=equipo.id_equipo INNER JOIN marca ON equipo.id_marca=marca.id_marca WHERE id_orden_trabajo='$id' ");
$item=0;
while ($productos2=mysql_fetch_array($productos)) {
	$pdf->Cell(30,8,'$'.$productos2['valorReparacion'],1);
	$pdf->Cell(30,8,'$'.$productos2['valorReparacion'],1);
	$pdf->Cell(60,8,'$'.$productos2['valorRepuestoOT'],1);
	$pdf->Cell(40,8,'$'.$productos2['valorCotizacionOT'],1);
	$pdf->Ln(30); 
}

$pdf->SetFont('Arial','B',8);
$pdf->Cell(25,8,'ADVERTENCIA PREVIA A REALIZAR TRABAJO:',0);
$pdf->Ln(5);
$pdf->SetFont('Arial','',8);
$pdf->Cell(30,8,'La intervencion en los equipos conlleva riesgos de perdida',0);
$pdf->Ln(3);
$pdf->Cell(40,8,'de la informacion contenida en sus discos duro, siendo de',0);
$pdf->Ln(3);
$pdf->Cell(90,8,'exclusiva responsabilidad del cliente respaldar su',0);
$pdf->Cell(40,8,'',0);
$pdf->Cell(40,8,'_______________________________',0);
$pdf->Ln(3);
$pdf->Cell(100,8,'informacion antes de requerir servicios de reparacion.',0);
$pdf->Cell(40,8,'',0);
$pdf->Cell(40,8,'Huella y Firma Cliente',0);
$pdf->Ln(40);
$pdf->Cell(90,8,'Firma del cliente (encargado, usuario o persona que retira)',0);
$pdf->Cell(40,8,'________________________',0);
$pdf->Cell(40,8,'_______________________________',0);
$pdf->Ln(3);
$pdf->Cell(100,8,'conforme por servicio solicitado.',0);
$pdf->Cell(40,8,'Firma Cass',0);
$pdf->Cell(40,8,'Huella y Firma Cliente',0);
$pdf->Ln(3);


$pdf->Output();
?>