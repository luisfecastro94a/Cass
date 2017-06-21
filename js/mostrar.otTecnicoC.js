
$(buscar_datos());

function buscar_datos(consulta){
	$.ajax({
		url:'ot.asignadaC.php',
		type:'POST',
		dataType:'html',
		data: {consulta: consulta},
	})
	.done(function(respuesta){
		$("#muestraOTC").html(respuesta);
	})
	.fail(function(){
		console.log("error");
	})
	
}