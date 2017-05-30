$(buscar_datos());

function buscar_datos(consulta){
	$.ajax({
		url:'equipo.reparado.php',
		type:'POST',
		dataType:'html',
		data: {consulta: consulta},
	})
	.done(function(respuesta){
		$("#datos1").html(respuesta);
	})
	.fail(function(){
		console.log("error");
	})
	
}
