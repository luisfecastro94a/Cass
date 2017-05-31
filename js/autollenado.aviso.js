function listaaviso(id){
	$.post("equipoautollenado.aviso.php",{id_equipo:id}, function(retorna){
		da = retorna.split("/");
		$('#sintoma_cliente').val(da[1]);
		$('#marca').val(da[2]);
		$('#estado').val(da[3]);
		$('#nombre').val(da[4]);
		$('#rut').val(da[5]);
		$('#fono').val(da[6]);
		$('#correo').val(da[7]);
		$('#direccion').val(da[8]);
		
	});

}