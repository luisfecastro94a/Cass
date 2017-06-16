function repuesto(id){
	$.post("repuesto.Autollenar.php",{id_proveedor:id}, function(retorno){
		da = retorno.split("/");
		$('#razon_social').val(da[1]);
		$('#direccion').val(da[2]);
		$('#fono').val(da[3]);
		$('#nombre_contacto').val(da[4]);
		$('#fono_contacto').val(da[5]);
		$('#cargo_contacto').val(da[6]);
	});
}