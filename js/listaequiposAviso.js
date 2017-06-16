$(function(){

	//lista de equipos
	$.post('equipolistaAviso.php').done( function(respuesta)
	{
		$('#serieEquipo').html(respuesta);
	})

});