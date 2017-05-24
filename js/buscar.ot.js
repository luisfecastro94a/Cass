$(buscar_datos());

function buscar_datos(consulta){
	$.ajax({
		url:'ot.buscar.server.php',
		type:'POST',
		dataType:'html',
		data: {consulta: consulta},
	})
	.done(function(respuesta){
		$("#datos").html(respuesta);
	})
	.fail(function(){
		console.log("error");
	})
	
}
//aqui hago para se despliegue al insertar una palabra o numero
$(document).on('keyup','#caja_busqueda', function(){
	var valor = $(this).val();
	if (valor != "") {
		buscar_datos(valor);
	}else{
		buscar_datos();
	}

});