$(buscar_datos());

function buscar_datos(consulta){
	$.ajax({
		url:'equipo.proceso.php',
		type:'POST',
		dataType:'html',
		data: {consulta: consulta},
	})
	.done(function(respuesta){
		$("#datos5").html(respuesta);
	})
	.fail(function(){
		console.log("error");
	})
	
}