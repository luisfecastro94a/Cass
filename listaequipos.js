$ (function(){

	//lista de equipos
	$.post('equipolista.php').done( function( respuestas )
	{
		$('#serieequipo').html(respuestas);
	});

})