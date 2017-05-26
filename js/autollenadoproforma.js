function proforma(id){
	$.post("proforma.llenar.php",{id_orden_trabajo:id}, function(retorno){
		da = retorno.split("/");
		$('#correlativo_ot').val(da[1]);
		$('#nombre').val(da[2]);
		$('#rut').val(da[3]);
		$('#fono').val(da[4]);
		$('#correo').val(da[5]);
		$('#direccion').val(da[6]);
		$('#nombrec').val(da[7]);
		$('#serie_equipo').val(da[8]);
		$('#valorReparacion').val(da[9]);
		$('#valorRepuestoOT').val(da[10]);
		$('#valorCotizacionOT').val(da[11]);
		$('#nombreUsuario').val(da[12]);




	});

}