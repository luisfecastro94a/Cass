$(buscar_datos());

function buscar_datos(consulta){
	$.ajax({
		url:'equipo.avisado.php',
		type:'POST',
		dataType:'html',
		data: {consulta: consulta},
	})
	.done(function(respuesta){
		$("#datos4").html(respuesta);
	})
	.fail(function(){
		console.log("error");
	})
	
}