<?php
	require 'fpdf/fpdf.php';
	include("conexion.php");
	include("barcodee.php");
	
	$id=$_REQUEST['id'];
	
	$consulta2="SELECT serie_equipo, id_equipo FROM equipo WHERE id_equipo='$id' ";
	$resultE=mysql_query($consulta2);
	
	$pdf = new FPDF('L','mm',array(70,60));//tamaño del pdf ancho y alto
	$pdf->AddPage();
	$pdf->SetAutoPageBreak(true, 20);
	$y = $pdf->GetY();
	
	while ($row=mysql_fetch_array($resultE)){
		
		$code = $row['serie_equipo'];
		
		barcode('codigos/'.$code.'.png', $code, 70, 'horizontal', 'code128', true);//tamaño del codigo de barra
		
		$pdf->Image('codigos/'.$code.'.png',10,$y,50,0,'PNG');//tamaño de la imagen png, codigo de barra
		
		$y = $y+15;
	}
	$pdf->Output();	
	
?>
