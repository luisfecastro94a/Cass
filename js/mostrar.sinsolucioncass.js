$(buscar_datos());

function buscar_datos(consulta){
	$.ajax({
		url:'equipo.sinsolucioncass.php',
		type:'POST',
		dataType:'html',
		data: {consulta: consulta},
	})
	.done(function(respuesta){
		$("#dato").html(respuesta);
	})
	.fail(function(){
		console.log("error");
	})
	
}
