$(function(){

	//lista de equipos
	$.post('equipolista.php').done( function(respuesta)
	{
		$('#serieEquipo').html(respuesta);
	})

});