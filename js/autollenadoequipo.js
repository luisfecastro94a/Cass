function listaequipo(id){
	$.post("equipoautollenado.php",{id_equipo:id}, function(retorna){
		da = retorna.split("/");
		$('#sintoma_cliente').val(da[1]);
		$('#marca').val(da[2]);
		$('#estado').val(da[3]);
	

	});

}