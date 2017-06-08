$(function(){

	//lista de equipos
	$.post('cotizacionlista.php').done( function(respuesta)
	{
		$('#correlativo_ot').html(respuesta);
	})

});