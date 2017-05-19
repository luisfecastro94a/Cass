$ (function(){

	//lista de clientes
	$.post('clienlista.php').done( function( respuestas )
	{
		$('#nombreCliente').html(respuestas);
	});

	//lista de 	Encargados de los clientes
	$('#nombreCliente').change(function()
{
	var el_cliente = $(this).val();
	//lista de clientes encargados
	$.post('equipolista.php',{nombreCliente: el_cliente}).done( function( respuestas )
	{
		$('#serie_equipo').html(respuestas);
	});


});
	

	//lista de encargados
	$('#serie_equipo').change( function()
	{
		var equipo  = $(this).children('option:selected').html();
		alert ('El Serie del equipo elegido es ' + equipo);
	});


	
})