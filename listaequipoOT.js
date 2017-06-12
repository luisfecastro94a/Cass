$(function(){

	//lista de equipos
	$.post('equipolistaOT.php').done( function(respuesta)
	{
		$('#serie_equipo').html(respuesta);
	})

});