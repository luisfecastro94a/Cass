function listaequipo(id){
	$.post("equipoautollenado.php",{id_equipo:id}, function(retorna){
		da = retorna.split("/");
		$('#sintoma_cliente').val(da[1]);
		$('#marca').val(da[2]);
		$('#estado').val(da[3]);
		$('#id_cliente').val(da[4]);
		$('#nombre').val(da[5]);
		$('#rut').val(da[6]);
		$('#fono').val(da[7]);
		$('#correo').val(da[8]);
		$('#nombreE').val(da[9]);
	
		
		
		
	});

}