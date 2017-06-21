function listaequipo(id){
	$.post("equipoReingresoLlenado.php",{id_equipo:id}, function(retorna){
		da = retorna.split("/");
		$('#id_equipo').val(da[1]);
		$('#id_cliente').val(da[2]);
		$('#nombre').val(da[3]);
		$('#nombreE').val(da[4]);
		$('#marca').val(da[5]);
		$('#modelo').val(da[6]);
		
	});

}