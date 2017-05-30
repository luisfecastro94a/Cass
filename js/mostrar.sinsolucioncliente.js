$(buscar_datos());

function buscar_datos(consulta){
	$.ajax({
		url:'equipo.sinsolucioncliente.php',
		type:'POST',
		dataType:'html',
		data: {consulta: consulta},
	})
	.done(function(respuesta){
		$("#datos3").html(respuesta);
	})
	.fail(function(){
		console.log("error");
	})
	
}
