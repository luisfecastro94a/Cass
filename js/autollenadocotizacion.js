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
		$('#repuesto').val(da[9]);
		$('#repuesto_uno').val(da[10]);
		$('#repuesto_dos').val(da[11]);
		$('#repuesto_tres').val(da[12]);
		$('#repuesto_cuatro').val(da[13]);
		$('#repuesto_cinco').val(da[14]);
	});

}