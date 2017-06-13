<?php
//llamamos  la clase del pdf
require('../../fpdf/fpdf.php');
require('../../conexion.php');

$pdf=new FPDF();//llamamos clase fpdf
$pdf->AddPage();//agregamos a la pagina lo siguiente que se hara
$pdf->SetMargins(10, 20, 10);//establece los margenes left(izquier), top(superior), right(derecho)...
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
$pdf->Ln(10);//ln es un saldo de linea () le doy el valor
$pdf->SetFont('Arial','B',15);
$pdf->Cell(70,8,'',0);
$pdf->Cell(100,8,'Orden de Trabajo',0);
$pdf->Ln(15);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,8,'Numero Orden de Trabajo',0);
$pdf->Cell(40,8,'Fecha de Creacion',0);
$pdf->Cell(40,8,'Tecnico a Cargo',0);
$pdf->Cell(40,8,'Area',0);
$pdf->Cell(40,8,'Estado de OT',0);
$pdf->Ln(8);
$pdf->SetFont('Arial','',8);
//Consulta SQL
$id=$_REQUEST['id'];
$productos=mysql_query("SELECT orden_trabajo.id_orden_trabajo, orden_trabajo.valorRepuestoOT, orden_trabajo.valorCotizacionOT, orden_trabajo.correlativo_ot, orden_trabajo.fecha_OT, orden_trabajo.motivo, orden_trabajo.valorReparacion, orden_trabajo.fechaPresupuesto, usuario.nombreUsuario, cliente.nombre, cliente.rut, cliente.fono, cliente.direccion, ciudad.nombrec, ot_tipo.nombreTipo, area.area, estado.estado, equipo.serie_equipo FROM orden_trabajo INNER JOIN usuario ON orden_trabajo.id_usuario=usuario.id_usuario INNER JOIN cliente ON orden_trabajo.id_cliente=cliente.id_cliente INNER JOIN ciudad ON cliente.id_ciudad=ciudad.id_ciudad INNER JOIN ot_tipo ON orden_trabajo.id_ot_tipo=ot_tipo.id_ot_tipo INNER JOIN area ON orden_trabajo.id_area=area.id_area INNER JOIN estado ON orden_trabajo.id_estado=estado.id_estado INNER JOIN equipo ON orden_trabajo.id_equipo=equipo.id_equipo WHERE id_orden_trabajo='$id' ");
$item=0;
while ($productos2=mysql_fetch_array($productos)) {
	$pdf->Cell(50,8,$productos2['correlativo_ot'],0);
	$pdf->Cell(40,8,$productos2['fecha_OT'],0);
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
$productos=mysql_query("SELECT orden_trabajo.id_orden_trabajo, orden_trabajo.valorRepuestoOT, orden_trabajo.valorCotizacionOT, orden_trabajo.correlativo_ot, orden_trabajo.fecha_OT, orden_trabajo.motivo, orden_trabajo.valorReparacion, orden_trabajo.fechaPresupuesto, usuario.nombreUsuario, cliente.nombre, cliente.rut, cliente.fono, cliente.direccion, ciudad.nombrec, ot_tipo.nombreTipo, area.area, estado.estado, equipo.serie_equipo FROM orden_trabajo INNER JOIN usuario ON orden_trabajo.id_usuario=usuario.id_usuario INNER JOIN cliente ON orden_trabajo.id_cliente=cliente.id_cliente INNER JOIN ciudad ON cliente.id_ciudad=ciudad.id_ciudad INNER JOIN ot_tipo ON orden_trabajo.id_ot_tipo=ot_tipo.id_ot_tipo INNER JOIN area ON orden_trabajo.id_area=area.id_area INNER JOIN estado ON orden_trabajo.id_estado=estado.id_estado INNER JOIN equipo ON orden_trabajo.id_equipo=equipo.id_equipo WHERE id_orden_trabajo='$id' ");
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
$pdf->Cell(100,8,'Sintoma del Cliente',1);
$pdf->Cell(20,8,'Marca',1);
$pdf->Cell(25,8,'Tipo de Ingreso',1);
$pdf->Ln(8);
$pdf->SetFont('Arial','',8);
//Consulta SQL
$id=$_REQUEST['id'];
$productos=mysql_query("SELECT orden_trabajo.id_orden_trabajo, orden_trabajo.valorRepuestoOT, orden_trabajo.valorCotizacionOT, orden_trabajo.correlativo_ot, orden_trabajo.fecha_OT, orden_trabajo.motivo, orden_trabajo.valorReparacion, orden_trabajo.fechaPresupuesto, usuario.nombreUsuario, cliente.nombre, cliente.rut, cliente.fono, cliente.direccion, ciudad.nombrec, ot_tipo.nombreTipo, area.area, estado.estado, equipo.serie_equipo, equipo.sintoma_cliente, equipo.tipo_ingreso, marca.marca FROM orden_trabajo INNER JOIN usuario ON orden_trabajo.id_usuario=usuario.id_usuario INNER JOIN cliente ON orden_trabajo.id_cliente=cliente.id_cliente INNER JOIN ciudad ON cliente.id_ciudad=ciudad.id_ciudad INNER JOIN ot_tipo ON orden_trabajo.id_ot_tipo=ot_tipo.id_ot_tipo INNER JOIN area ON orden_trabajo.id_area=area.id_area INNER JOIN estado ON orden_trabajo.id_estado=estado.id_estado INNER JOIN equipo ON orden_trabajo.id_equipo=equipo.id_equipo INNER JOIN marca ON equipo.id_marca=marca.id_marca WHERE id_orden_trabajo='$id' ");
$item=0;
while ($productos2=mysql_fetch_array($productos)) {
	$pdf->Cell(30,8,$productos2['serie_equipo'],1);
	$pdf->Cell(100,8,$productos2['sintoma_cliente'],1);
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
$productos=mysql_query("SELECT orden_trabajo.id_orden_trabajo, orden_trabajo.valorRepuestoOT, orden_trabajo.valorCotizacionOT, orden_trabajo.correlativo_ot, orden_trabajo.fecha_OT, orden_trabajo.motivo, orden_trabajo.valorReparacion, orden_trabajo.fechaPresupuesto, orden_trabajo.motivo, orden_trabajo.comentario, usuario.nombreUsuario, cliente.nombre, cliente.rut, cliente.fono, cliente.direccion, ciudad.nombrec, ot_tipo.nombreTipo, area.area, estado.estado, equipo.serie_equipo, equipo.sintoma_cliente, equipo.tipo_ingreso, marca.marca FROM orden_trabajo INNER JOIN usuario ON orden_trabajo.id_usuario=usuario.id_usuario INNER JOIN cliente ON orden_trabajo.id_cliente=cliente.id_cliente INNER JOIN ciudad ON cliente.id_ciudad=ciudad.id_ciudad INNER JOIN ot_tipo ON orden_trabajo.id_ot_tipo=ot_tipo.id_ot_tipo INNER JOIN area ON orden_trabajo.id_area=area.id_area INNER JOIN estado ON orden_trabajo.id_estado=estado.id_estado INNER JOIN equipo ON orden_trabajo.id_equipo=equipo.id_equipo INNER JOIN marca ON equipo.id_marca=marca.id_marca WHERE id_orden_trabajo='$id' ");
$item=0;
while ($productos2=mysql_fetch_array($productos)) {
	$pdf->Cell(30,16,$productos2['motivo'],1);
	$pdf->Cell(150,16,$productos2['comentario'],1);
	$pdf->Ln(16); 
}

$pdf->SetFont('Arial','B',8);
$pdf->Cell(25,8,'Costos:',0);
$pdf->Ln(6);
$pdf->Cell(30,6,'Valores Repuestos',1);
$pdf->Cell(25,6,'Total',1);
$pdf->Ln(6);
$pdf->SetFont('Arial','',8);

//Consulta SQL
$id=$_REQUEST['id'];
$productos=mysql_query("SELECT cotizacion.venta_repuesto, cotizacion.venta_repuesto_uno, cotizacion.venta_repuesto_dos, cotizacion.venta_repuesto_tres, cotizacion.venta_repuesto_cuatro, cotizacion.venta_repuesto_cinco, cotizacion.valorCotizacion FROM cotizacion WHERE id_orden_trabajo='$id' ");
$item=0;
while ($productos2=mysql_fetch_array($productos)) {	
	$pdf->Cell(30,8,$productos2['venta_repuesto'],1);
	$pdf->Cell(25,8,$productos2['venta_repuesto'],1);
	$pdf->Ln(8);
	$pdf->Cell(30,8,$productos2['venta_repuesto_uno'],1);
	$pdf->Cell(25,8,$productos2['venta_repuesto_uno'],1); 
    $pdf->Ln(8);
	$pdf->Cell(30,8,$productos2['venta_repuesto_dos'],1);
	$pdf->Cell(25,8,$productos2['venta_repuesto_dos'],1);
	$pdf->Ln(8);
	$pdf->Cell(30,8,$productos2['venta_repuesto_tres'],1);
	$pdf->Cell(25,8,$productos2['venta_repuesto_tres'],1);
	$pdf->Ln(8);
	$pdf->Cell(30,8,$productos2['venta_repuesto_cuatro'],1);
	$pdf->Cell(25,8,$productos2['venta_repuesto_cuatro'],1);
	$pdf->Ln(8);
	$pdf->Cell(30,8,$productos2['venta_repuesto_cinco'],1);
	$pdf->Cell(25,8,$productos2['venta_repuesto_cinco'],1);	
	$pdf->Ln(8);
	$pdf->Cell(30,6,'SubTotal',1);
	$pdf->Cell(25,6,$productos2['valorCotizacion'],1);	
	$pdf->Ln(6);
	$pdf->Cell(30,6,'Iva 19%',1);
	$pdf->Cell(25,6,$productos2['valorCotizacion'],1);
	$pdf->Ln(6);
	$pdf->Cell(30,6,'Total',1);
	$pdf->Cell(25,6,$productos2['valorCotizacion'],1);
	$pdf->Ln(6);
	
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
$pdf->Cell(40,8,' FIRMA CLIENTE',0);
$pdf->Ln(15);
$pdf->Cell(90,8,'Firma del cliente (encargado, usuario o persona que retira)',0);
$pdf->Cell(40,8,'________________________',0);
$pdf->Cell(40,8,'_______________________________',0);
$pdf->Ln(3);
$pdf->Cell(100,8,'conforme por servicio solicitado.',0);
$pdf->Cell(40,8,' FIRMA CASS',0);
$pdf->Cell(40,8,' FIRMA CLIENTE',0);
$pdf->Ln(20);

//$pdf->AddPage();
$pdf->SetFont('Arial','B',10);
$pdf->Cell(25,8,'',0);
$pdf->Cell(25,8,'CONDICIONES GENERALES APLICABLES AL CONTRATO DE SERVICIO DE REPARACION',0);
$pdf->Ln(7);
$pdf->SetFont('Arial','',9);
$pdf->Cell(25,8,'En Puerto Montt de Chile Carlos Stange domiciliado en Egana 212, en adelante denominada Carlos Stange y el cliente identidicado ',0);
$pdf->Ln(3);
$pdf->Cell(25,8,'en el la pagina, anterior de este instrumento, en adelante denominado CLIENTE, se ha convenido en el siguiente Contrato de Servicio ',0);
$pdf->Ln(3);
$pdf->Cell(25,8,'de Reparacion:',0);
$pdf->Ln(10);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(17,8,'PRIMERO:',0);
$pdf->SetFont('Arial','',9);
$pdf->Cell(25,8,'El cliente encomienda a Carlos Stange la revision y/o reparacion, de los equipos y falla descrita en la pagina anterior de este',0);
$pdf->Ln(3);
$pdf->Cell(17,8,'',0);
$pdf->Cell(17,8,'instrumento, la que acepta, conforme a los articulos establecidos en el presente contrato y a las Notas Generales',0);
$pdf->Ln(3);
$pdf->Cell(17,8,'',0);
$pdf->Cell(17,8,'que se encuentra en la pagina anterior.',0);
$pdf->Ln(10);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(17,8,'SEGUNDO: ',0);
$pdf->SetFont('Arial','',9);
$pdf->Cell(25,8,' El horario de atencion es de 09:00 a 13:00 y de 15:00 a 19:30 hrs. de Lunes a Viernes, excepto feriados.',0);
$pdf->Ln(10);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(17,8,'TERCERO: ',0);
$pdf->SetFont('Arial','',9);
$pdf->Cell(25,8,' Al ingresar un equipo, a Carlos Stange mediante este contrato y con el proposito de agilizar el proceso de reparacion y los',0);
$pdf->Ln(3);
$pdf->Cell(17,8,'',0);
$pdf->Cell(25,8,'tiempos asociados, el Cliente debera definir si desea Presupuesto o Autoriza Reparacion Inmediada.',0);
$pdf->Ln(3);
$pdf->Cell(17,8,'',0);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(25,8,'TODA REPARACION INMEDIATA AUTORIZADA, SE DARA HASTA UN MONTO DE $49.560.- I.V.A. incluido,',0);
$pdf->SetFont('Arial','',9);
$pdf->Ln(3);
$pdf->Cell(17,8,'',0);
$pdf->Cell(25,8,'en caso contrario se enviara Presupuesto.',0);
$pdf->Ln(10);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(17,8,'CUARTO: ',0);
$pdf->SetFont('Arial','',9);
$pdf->Cell(25,8,' El tiempo de diagnostico y/o presupuesto se estima en 96 horas, dependiendo de la disponibilidad de personal tecnico',0);
$pdf->Ln(3);
$pdf->Cell(17,8,'',0);
$pdf->Cell(25,8,'y ordenes de trabajo anteriores. En ningun caso constituye un compromiso ni obligacion para Carlos Stange.',0);
$pdf->Ln(4);
$pdf->Cell(17,8,'',0);
$pdf->Cell(25,8,'Todo Presupuesto sera avisado via FAX, TELEFONO o CORREO.',0);
$pdf->Ln(10);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(17,8,'QUINTO: ',0);
$pdf->SetFont('Arial','',9);
$pdf->Cell(25,8,' EL CLIENTE, al solicitar una atencion tecnica mediante el presente contrato se compromete a cancelar ',0);
$pdf->Ln(3);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(17,8,'',0);
$pdf->Cell(25,8,'un Valor minimo de $10.900 I.V.A. incluido por concepto de Revision y Diagnostico de Falla.',0);
$pdf->Ln(10);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(17,8,'SEXTO: ',0);
$pdf->SetFont('Arial','',9);
$pdf->Cell(25,8,' El tiempo de reparacion se estima en 96 horas, sujeto a la aceptacion del presupuesto, si lo hubiere, y a disponibilidad ',0);
$pdf->Ln(3);
$pdf->Cell(17,8,'',0);
$pdf->Cell(25,8,'de repuestos, personal tecnico y ordenes de trabajo anteriores. En ningun caso constituye un compromiso ni obligacion ',0);
$pdf->Ln(3);
$pdf->Cell(17,8,'',0);
$pdf->Cell(25,8,'para Carlos Stange.',0);
$pdf->Ln(10);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(17,8,'SEPTIMO: ',0);
$pdf->SetFont('Arial','',9);
$pdf->Cell(25,8,' Las reparaciones deben ser canceladas en efectivo o cheque al momento de retirar el equipo. Salvo casos calificados por',0);
$pdf->Ln(3);
$pdf->Cell(17,8,'',0);
$pdf->Cell(25,8,'Carlos Stange se aceptaran ordenes de compra pagaderas contra presentacion de la factura.',0);
$pdf->Ln(10);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(17,8,'OCTAVO: ',0);
$pdf->SetFont('Arial','',9);
$pdf->Cell(25,8,' Carlos Stange no asume responsabilidad por la integridad de la informacion contenida en los medios de almacenamiento, ',0);
$pdf->Ln(3);
$pdf->Cell(17,8,'',0);
$pdf->Cell(25,8,'tales como discos duros, diskettes, cintas magneticas, etc. El CLIENTE declara expresamente, que es su responsabilidad',0);
$pdf->Ln(3);
$pdf->Cell(17,8,'',0);
$pdf->Cell(25,8,'haber respaldado la informacion antes de entregar su equipo al servicio tecnico asi como tambien, la de disponer de los',0);
$pdf->Ln(3);
$pdf->Cell(17,8,'',0);
$pdf->Cell(25,8,'programas originales que utilice el mismo.',0);
$pdf->Ln(3);
$pdf->Cell(17,8,'',0);
$pdf->Cell(25,8,'Carlos Stange, no sera responsable, en caso alguno, de las perdidas de informacion y/o de los danos y perjuicios que sufra',0);
$pdf->Ln(3);
$pdf->Cell(17,8,'',0);
$pdf->Cell(25,8,'el CLIENTE, incluso lucro cesante, por la falta de operatividad de los equipos materia de este contrato.',0);
$pdf->Ln(10);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(17,8,'NOVENO: ',0);
$pdf->SetFont('Arial','',9);
$pdf->Cell(25,8,' Todo repuesto cambiado y servicio de mano de obra realizado en la reparacion de un equipo tiene garantia de 30 dias.',0);
$pdf->Ln(3);
$pdf->Cell(17,8,'',0);
$pdf->Cell(25,8,'Carlos Stange, presenta nuevamente el servicio sin costo para el CLIENTE, siempre que sea por el mismo servicio ',0);
$pdf->Ln(3);
$pdf->Cell(17,8,'',0);
$pdf->Cell(25,8,'y/o repuesto, y su falla no provenga de un uso indebido, o que se haya intervenido por personal ajeno a Carlos Stange. ',0);
$pdf->Ln(10);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(17,8,'DECIMO: ',0);
$pdf->SetFont('Arial','',9);
$pdf->Cell(25,8,' En caso de una prestacion de Servicio por Desinfeccion de VIRUS, No hay Garantia, Carlos Stange no responde por ',0);
$pdf->Ln(3);
$pdf->Cell(17,8,'',0);
$pdf->Cell(25,8,'perdidas de informacion producto de la accion de virus, detectada previamente o al desinfectar.',0);
$pdf->Ln(10);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(30,8,'DECIMO PRIMERO: ',0);
$pdf->SetFont('Arial','',9);
$pdf->Cell(35,8,' Para todo equipo materia de este contrato, se avisara ya sea por fax, telefono o correo, cuando este ',0);
$pdf->Ln(3);
$pdf->Cell(30,8,'',0);
$pdf->Cell(25,8,'se encuentre listo para ser retirado. Todo equipo NO RETIRADO en un plazo de 10 dias habiles desde el aviso,  ',0);
$pdf->Ln(3);
$pdf->Cell(30,8,'',0);
$pdf->Cell(28,8,'mencionado, debera cancelar al ser retirado,',0);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(35,8,'',0);
$pdf->Cell(30,8,'por concepto de almacenamiento la cantidad de',0);
$pdf->Ln(3);
$pdf->Cell(30,8,'',0);
$pdf->Cell(25,8,'$2.360.- I.V.A. incluido, por cada dia trancurrido.',0);
$pdf->Ln(8);
$pdf->SetFont('Arial','',9);
$pdf->Cell(10,8,'',0);
$pdf->Cell(25,8,'Transcurridos 60 dias desde el aviso referido y no habiendose aun retirado el equipo, Carlos Stange no se responsabilizara  ',0);
$pdf->Ln(3);
$pdf->Cell(10,8,'',0);
$pdf->Cell(25,8,'por los danos que pueda sufrir este al estar almacenado. El valor en pesos acumulado a la fecha de retiro, debera ser',0);
$pdf->Ln(3);
$pdf->Cell(10,8,'',0);
$pdf->Cell(25,8,'cancelado al contado al momento de retirar el equipo, de lo contrario Carlos Stange podra retener el equipo hasta que',0);
$pdf->Ln(3);
$pdf->Cell(10,8,'',0);
$pdf->Cell(25,8,'esto se cumpla.',0);
$pdf->Ln(3);
$pdf->Cell(10,8,'',0);
$pdf->Cell(25,8,'De acuerdo al articulo 42 de la Ley N 19496, se entenderan abandonados en favor de Carlos Stange y los equipos ',0);
$pdf->Ln(3);
$pdf->Cell(10,8,'',0);
$pdf->Cell(25,8,'materia de este contrato que no hayan sido retirados en el plazo de un ano.',0);
$pdf->Ln(10);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(30,8,'DECIMO SEGUNDO: ',0);
$pdf->SetFont('Arial','',9);
$pdf->Cell(35,8,' Queda convenido y expresamente aceptado por el CLIENTE que Carlos Stange no respondera por los equipos  ',0);
$pdf->Ln(3);
$pdf->Cell(30,8,'',0);
$pdf->Cell(25,8,'materia de este contrato, en los casos de dano o perdida por causas fortuitas o causa mayor  no imputables ',0);
$pdf->Ln(3);
$pdf->Cell(30,8,'',0);
$pdf->Cell(25,8,'a Carlos Stange.',0);
$pdf->Ln(8);
$pdf->SetFont('Arial','',9);
$pdf->Cell(10,8,'',0);
$pdf->Cell(25,8,'Las parte entienden y declaran conocer y aceptar las partes del presente contrato, fijan sus domicilios en la Region de los',0);
$pdf->Ln(3);
$pdf->Cell(10,8,'',0);
$pdf->Cell(25,8,'Lagos, ciudad de Puerto Montt, y se someten desde luego a la jurisdiccion de sus tribunales. Para constancia, suscriben',0);
$pdf->Ln(3);
$pdf->Cell(10,8,'',0);
$pdf->Cell(25,8,'en 2 (dos) ejemplares identicos tenor.',0);

$pdf->Output();
?>


