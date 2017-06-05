<?php 
require_once('codigoBarra/examples/lang/eng.php');
require_once('codigoBarra/tcpdf.php');
require_once('conexion.php');

$pdf = new TCPDF('P','mm', 'A4', true,'UTF-8', false);
$pdf->SetMargins(20, 20, 20, false);//se define margenes izquierdo, alto, derecho
$pdf->SetAutoPageBreak(true, 20);//se define un salto de pagina con un limite de pie de pagina
$pdf->addPage();

$sql=mysql_query("SELECT serie_equipo FROM equipo");
//$cosas=mysql_fetch_array();
$html = '';
$item = 1;
	while($row=mysql_fetch_array($sql)){
	$barcode=$row['serie_equipo'];
	$barcode=$pdf->serializeTCPDFtagParameters(array($barcode,'C128','','',72,25,0.5, array('position'=>'S','border'=>false,'padding'=>2,'fgcolor'=>array(0,0,0),'bgcolor'=>array(255,255,255),'text'=>true,'font'=>'helvetica','fontsize'=>7, 'stretchtext'=>6),'N'));
	$html .='
	<table border="1" cellpadding="5">
		<tr>
			<td bgcolor="#E6E6E6">Codigo Barra</td>
			<td><tcpdf method="write1DBarcode" params="'.$barcode.'"/></td>
		</tr>
	</table>
	';
	$item = $item+1;
}
$pdf->SetFont('helvetica','',10);
#$pdf->SetXY(50,90);//define donde se va a ubicar, 50cm de X and 90cm en Y, y con esto se indica de donde se quiere generar el pdf..
$pdf->writeHTML($html,true, 0, true, 0);
$pdf->lastPage();
$pdf->Output('Reporte.pdf','I');

 ?>