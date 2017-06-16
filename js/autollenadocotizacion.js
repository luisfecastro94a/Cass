function cotizacion(id){
	$.post("cotizacion.llenar.php",{id_orden_trabajo:id}, function(retorno){
		da = retorno.split("/");	
		$('#nombre').val(da[1]);
		$('#rut').val(da[2]);
		$('#fono').val(da[3]);
		$('#correo').val(da[4]);
		$('#direccion').val(da[5]);
		$('#nombrec').val(da[6]);
		$('#serie_equipo').val(da[7]);
		$('#valorReparacion').val(da[8]);
		$('#n_partner').val(da[9]);
		$('#marca').val(da[10]);
		$('#comentarioo').val(da[11]);
		$('#n_partner1').val(da[12]);
		$('#marca1').val(da[13]);
		$('#comentario1').val(da[14]);
		$('#n_partner2').val(da[15]);
		$('#marca2').val(da[16]);
		$('#comentario2').val(da[17]);
		$('#n_partner3').val(da[18]);
		$('#marca3').val(da[19]);
		$('#comentario3').val(da[20]);
		$('#n_partner4').val(da[21]);
		$('#marca4').val(da[22]);
		$('#comentario4').val(da[23]);
		$('#n_partner5').val(da[24]);
		$('#marca5').val(da[25]);
		$('#comentario5').val(da[26]);
		$('#n_partner6').val(da[27]);
		$('#marca6').val(da[28]);
		$('#comentario6').val(da[29]);
	});

}