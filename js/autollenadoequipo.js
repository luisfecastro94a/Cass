function listaequipo(id){
	$.post("equipoautollenado.php",{id_equipo:id}, function(retorna){
		da = retorna.split("/");
		$('#serie_equipo').val(da[1]);
		$('#sintoma_cliente').val(da[2]);
		$('#marca').val(da[3]);
		$('#estado').val(da[4]);
		$('#nombre').val(da[5]);
		$('#nombre').val(da[6]);
		$('#fono').val(da[7]);
		$('#correo').val(da[8]);
		$('#direccion').val(da[9]);
		$('#id_cliente').val(da[10]);
		$('#nombreE').val(da[11]);
		
	});

}