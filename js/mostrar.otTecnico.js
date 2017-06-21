$(buscar_datos());

function buscar_datos(consulta){
	$.ajax({
		url:'ot.asignada.php',
		type:'POST',
		dataType:'html',
		data: {consulta: consulta},
	})
	.done(function(respuesta){
		$("#muestraOT").html(respuesta);
	})
	.fail(function(){
		console.log("error");
	})
	
}