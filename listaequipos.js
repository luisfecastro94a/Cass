$ (function(){

	//lista de equipos
	$.post('equipolista.php').done( function( respuestas )
	{
		$('#serieequipo').html(respuestas);
	});

	//lista de 	Encargados de los clientes
	$('#serieequipo').change(function()
{
	var el_equipo = $(this).val();
	//lista de clientes 
	$.post('equipoclientelista.php',{serieequipo: el_equipo}).done( function( respuesta )
	{
		$('#nombreE').html(respuesta);
	});


});
	

	//lista de clierntes
	$('#nombreE').change( function()
	{
		var cliente  = $(this).children('option:selected').html();
		alert ('El Cliente elegido es ' + cliente);
	});



})