$(buscar_datos());

function buscar_datos(consulta){
	$.ajax({
		url:'filtrar.ot.php',
		type:'POST',
		dataType:'html',
		data: {consulta: consulta},
	})
	.done(function(respuesta){
		$("#ot").html(respuesta);
	})
	.fail(function(){
		console.log("error");
	})
	
}